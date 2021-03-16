<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Ixudra\Curl\Facades\Curl;

class MailController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->all();
        $validator = $this->validateMessage($data);
        if ($validator->fails()) {
            return redirect('/#contact-me')
                ->withErrors($validator)
                ->withInput();
        }
        $response = $this->verifyGoogleCaptcha($data['g-recaptcha-response']);
        if ($response['success'] == false) {
            Log::error(Carbon::now() . " - Failed on #verifyGoogleCaptcha.", ['response' => $response]);
            $errors['g-recaptcha-response'] = 'Failed on verifying captcha, please try again!!';
            return redirect('/#contact-me')
                ->withErrors($errors)
                ->withInput();
        }
        try {
            $this->constructAndSendEmail($data);
        } catch (\Exception $ex) {
            Log::error(Carbon::now() . " - Failed on #constructAndSendEmail.", ['ex' => $ex]);
            $errors['others'] = 'Failed on sending email, please try again later!!';
            return redirect('/#contact-me')
                ->withErrors($errors)
                ->withInput();
        }
        $request->session()->flash('success', 'Successfully sent message!!');
        return redirect('/#contact-me');
    }

    private function validateMessage(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ]);
    }

    private function verifyGoogleCaptcha($google)
    {
        $parameters = http_build_query([
            'secret' => env('GOOGLE_SECRET_KEY', '6LdffxgTAAAAACG-VLnHxj9PNsb_DqI11lKiVU-J'),
            'response' => $google,
        ]);
        return Curl::to('https://www.google.com/recaptcha/api/siteverify?' . $parameters)
            ->asJson(true)->post();
    }

    private function constructAndSendEmail(array $data)
    {
        $sender = $this->constructSenderObject($data);
        Mail::to('albertjulian97@gmail.com')->send(new SendMessage($sender));
    }

    private function constructSenderObject(array $data)
    {
        $sender = new Sender();
        $sender->setName($data['name']);
        $sender->setEmail($data['email']);
        $sender->setSubject($data['subject']);
        $sender->setMessage($data['message']);
        return $sender;
    }
}
