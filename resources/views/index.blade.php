<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albert Julian Tannady | A Software Engineer</title>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<nav class="navbar container has-shadow-2 is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <span class="navbar-item">Albert Julian Tannady</span>

        <button class="button navbar-burger" data-target="navbarJT">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="navbar-menu" id="navbarJT">
        <div class="navbar-end">
            <a class="navbar-item has-text-dark" href="#home"><i class="fa fa-home"></i> Home</a>
            <a class="navbar-item has-text-dark" href="#about-me"><i class="fa fa-user-circle"></i> About Me</a>
            <a class="navbar-item has-text-dark" href="#services"><i class="fa fa-gears"></i> Services</a>
            <a class="navbar-item has-text-dark" href="#experience"><i class="fa fa-globe"></i> Experience</a>
            <a class="navbar-item has-text-dark" href="#contact-me"><i class="fa fa-phone"></i> Contact Me</a>
        </div>
    </div>
</nav>
<section class="section is-home" id="home">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <div class="title">Hello there!</div>
                <div class="subtitle">I'm a Fullstack Web Developer</div>
                <div>
                    <img class="image is-home-image" src="images/rsc1.png" alt="A Person that codes on chair">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section is-about-me" id="about-me">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <div class="title">About Me</div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="content has-text-justified">
                    <p>Born and raised in Medan, North Sumatra by two wonderful parents, I'm a fullstack web developer
                        with
                        3 years experience. I went to Jakarta to pursue a computer science degree and ended up became
                        a full-fledged web developer.</p>
                    <p>Backend development is more of my forte, but I do fine (and quite confident actually) on my
                        Frontend
                        development skills. I speak <b>PHP</b> and <b>Java</b> for Backend development with
                        <b>Laravel</b> and <b>Spring</b> as my framework of choice. I'm also familiar with
                        <b>AngularJS</b> and <b>Vue.js</b> for frontend web development.</p>
                    <p>Coding has become my passion since the moment I tried to make a triangle out of <i>for loops</i>
                        <i class="fa fa-smile-o"></i>. I fell in love more when I found out that there's a lot to
                        discover,
                        experience, and to learn in the world of web development. From the basics of clean architecture,
                        design patterns, to the world of continuous deployment, and enterprise applications, things have
                        been a blast for me.</p>
                    <p>I'm also a tech enthusiast, a geek, a bookworm, and an amateur guitarist (not that it matters
                        though
                        <i class="fa fa-meh-o"></i>).</p>
                    <p>I look forward for your inquiry!</p>
                </div>
            </div>
            <div class="column">
                <img class="image is-about-me-image" src="images/rsc2.png" alt="Mac on a table">
            </div>
        </div>
    </div>
</section>
<section class="section is-services" id="services">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <div class="title">Services</div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="card has-shadow-2">
                    <div class="card-header">
                        <div class="card-header-title">
                            Web Applications
                        </div>
                        <div class="card-header-icon">
                            <i class="fa fa-chrome fa-spin"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="has-text-justified">
                            Wanted a <b>personal web</b> as cool as this one? a <b>company profile</b>? an <b>e-catalogue</b>?
                            an <b>internal application</b>? or an <b>e-commerce</b> perhaps? Well you are in good luck!
                            Albert at your service. We can discuss about your project requirements, any truly needed
                            features, and perhaps insight on the future of your application. Rest easy, you're in good
                            hands. <i class="fa fa-smile-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card has-shadow-2">
                    <div class="card-header">
                        <div class="card-header-title">
                            Backend as a Service (BaaS)
                        </div>
                        <div class="card-header-icon">
                            <i class="fa fa-gear fa-spin"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="has-text-justified">
                            You needed a <b>web service</b> with complex logic and multiple APIs? No worries, Backend
                            hero to the rescue! For now, I can make backend services from <b>PHP (Laravel)</b> and <b>Java
                                (Spring)</b>.
                            I also have experience on making <b>Mobile APIs</b> and making a <b>Microservice</b> from
                            my workplace.
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card has-shadow-2">
                    <div class="card-header">
                        <div class="card-header-title">
                            Private Tutoring
                        </div>
                        <div class="card-header-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="has-text-justified">
                            "Oh My God! <b>Coding is so hard</b>, there's so many to learn yet so little time. Perhaps
                            I needed a tutor to <b>learn faster</b>". You came to the right place grasshopper. I'm
                            available
                            for anyone that wanted to learn how to develop a <b>proper web applications</b> or if you
                            are a computer science student and needed help on <b>Algorithms, Data Structures, Basic
                                C/C++</b>,
                            etc. Seek me grasshopper for further discussions!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <img class="image is-services-image" src="images/rsc3.png" alt="Responsive web design">
            </div>
        </div>
    </div>
</section>
<section class="section is-experience" id="experience">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <div class="title">Experiences</div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="card has-shadow-2" style="margin-bottom: 20px;">
                    <div class="card-header">
                        <div class="card-header-title">
                            PT Global Digital Niaga (Blibli.com)
                        </div>
                        <div class="card-header-icon">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left is-hidden-mobile">
                                <img class="image is-128x128" src="images/logos/blibli.png" alt="Blibli Logo">
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <h5 class="is-size-6"><b>Software Development Engineer</b></h5>
                                    <h6 class="is-size-7"><b>January 2019 - Current</b></h6>
                                    <ul>
                                        <li>Developed features and bugfixes for Blibli Core Commerce Applications</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="is-size-6"><b>Associate Software Development Engineer</b></h5>
                                    <h6 class="is-size-7"><b>March 2018 - January 2019</b></h6>
                                    <ul>
                                        <li>Developed features and bugfixes for Blibli Core Commerce Applications</li>
                                        <li>Contributed to the development of 2018 Asian Games Closing Ceremony</li> 
                                        <li>Create Automations for Commerce Applications by using Cucumber</li> 
                                        <li>Contributed to the development of 10.10 Promo Deals</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h5 class="is-size-6"><b>Internship as Software Development Engineer</b></h5>
                                    <h6 class="is-size-7"><b>May 2017 - March 2018</b></h6>
                                    <ul>
                                        <li>Learned the concepts of Spring Framework and Play Framework.</li>
                                        <li>Learned the products, the technology stack and workflow of the company.</li>
                                        <li>Contributed to Blibli hotel development.</li>
                                        <li>Release Hotel International for Blibli Hotel.</li>
                                        <li>Revamped and refactored a microservice that handles Voucher Retailing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-item">
                            <b><a href="https://www.blibli.com" target="_blank" class="has-text-primary">Go to web <i
                                            class="fa fa-arrow-circle-o-right"></i></a></b>
                        </div>
                    </div>
                </div>
                <div class="card has-shadow-2" style="margin-bottom: 20px;">
                    <div class="card-header">
                        <div class="card-header-title">
                            Freelancer (alberjtan.com)
                        </div>
                        <div class="card-header-icon">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left is-hidden-mobile">
                                <i class="fa fa-github-square" style="font-size: 10em;"></i>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <h5 class="is-size-6"><b>Freelance Web Developer</b></h5>
                                    <h6 class="is-size-7"><b>Jul 2016 - Present</b></h6>
                                    <ul>
                                        <li>Create websites for clients such as company profiles or e-catalogs.</li>
                                        <li>Create web services for mobile applications.</li>
                                        <li>Create web based internal application</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-item">
                            <b><a href="https://www.albertjtan.com" target="_blank" class="has-text-primary">Go to web <i
                                            class="fa fa-arrow-circle-o-right"></i></a></b>
                        </div>
                    </div>
                </div>
                <div class="card has-shadow-2" style="margin-bottom: 20px;">
                    <div class="card-header">
                        <div class="card-header-title">
                            PT Panca Intan Borneo (Lazato.com)
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left is-hidden-mobile">
                                <img class="image is-128x128" src="images/logos/lazato.png" alt="Lazato Logo">
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <h5 class="is-size-6"><b>Part Time Web Developer</b></h5>
                                    <h6 class="is-size-7"><b>May 2016 - Dec 2016</b></h6>
                                    <ul>
                                        <li>Manage some web projects such as e-catalogue, inventory application.</li>
                                        <li>Developing and maintaining company products.</li>
                                        <li>Develop new features for the products and bug fixing on web services.</li>
                                        <li>Developing new web applications such as company profiles.</li>
                                        <li>Making code guidelines for web developers to follow.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-item">
                            <b><a href="https://www.lazato.com" target="_blank" class="has-text-primary">Go to web <i
                                            class="fa fa-arrow-circle-o-right"></i></a></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section is-contact-me" id="contact-me">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                <div class="title">Contact Me</div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="card has-shadow-2">
                    <div class="card-header">
                        <div class="card-header-title">Contact Information</div>
                    </div>
                    <div class="card-content">
                        <div class="subtitle is-size-6">
                            <i class="fa fa-whatsapp"></i> Whatsapp : (+62) - 8577-3890-342
                        </div>
                        <div class="subtitle is-size-6">
                            <i class="fa fa-at"></i> Email : me@albertjtan.com
                        </div>
                        <div class="subtitle is-size-5">
                            <a href="https://www.facebook.com/albert.j.tannady" target="_blank"><i
                                        class="fa fa-facebook-square has-text-primary"></i></a>
                            <a href="https://www.linkedin.com/in/albertjt/" target="_blank"><i
                                        class="fa fa-linkedin-square has-text-primary"></i></a>
                            <a href="https://github.com/albertjt" target="_blank"><i
                                        class="fa fa-github-square has-text-primary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card has-shadow-2" style="margin: 10px auto 10px">
                    <div class="card-header">
                        <div class="card-header-title">Credits</div>
                    </div>
                    <div class="card-content">
                        <div class="content is-size-6">
                            This website won't happen without :
                            <ul>
                                <li><a href="https://bulma.io" class="has-text-primary">Bulma (Modern Lightweight CSS Framework)</a></li>
                                <li><a href="https://fontawesome.com" class="has-text-primary">Font Awesome (The web’s most popular icon set and toolkit)</a></li>
                                <li><a href="https://laravel.com" class="has-text-primary">Laravel (The PHP Framework for Web Artisan)</a></li>
                                <li><a href="https://freepik.com" class="has-text-primary">Freepik (Free Graphic Resources for Everyone)</a></li>
                                <li>And Other Open Source Projects...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card has-shadow-2">
                    <div class="card-header">
                        <div class="card-header-title">
                            Message me!
                        </div>
                    </div>
                    <form action="{{ url('mail') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-content">
                            @if(Session::has('success'))
                                <div class="notification is-success">
                                    {{ Session::get('success') }}
                                </div>
                            @elseif($errors->first('others'))
                                <div class="notification is-danger">
                                    {{ $errors->first('others') }}
                                </div>
                            @endif
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input
                                           @if($errors->first('name')) {{ 'is-danger' }} @endif" name="name"
                                           value="{{ old('name') }}"
                                           type="text" placeholder="Your Name">
                                    <span class="icon is-small is-left">
                                                <i class="fa fa-user"></i>
                                            </span>
                                </div>
                                @if($errors->first('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input @if($errors->first('email')) {{ 'is-danger' }} @endif"
                                           value="{{ old('email') }}"
                                           name="email" type="email" placeholder="Your Email">
                                    <span class="icon is-small is-left">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                </div>
                                @if($errors->first('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input @if($errors->first('subject')) {{ 'is-danger' }} @endif"
                                           value="{{ old('subject') }}"
                                           name="subject" type="text" placeholder="Subject of your message">
                                    <span class="icon is-small is-left">
                                                    <i class="fa fa-header"></i>
                                                </span>
                                </div>
                                @if($errors->first('subject'))
                                    <p class="help is-danger">{{ $errors->first('subject') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea @if($errors->first('message')) {{ 'is-danger' }} @endif"
                                              name="message" placeholder="Your message to me :)">{{ old('message') }}</textarea>
                                </div>
                                @if($errors->first('message'))
                                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                                @endif
                            </div>
                            <div class="g-recaptcha"
                                 data-sitekey="{{ env('GOOGLE_SITE_KEY', '6LdffxgTAAAAAAXYAgYVgViRPviSE2M5n75zhEa0') }}"></div>
                            @if($errors->first('g-recaptcha-response'))
                                <p class="help is-danger">{{ $errors->first('g-recaptcha-response') }}</p>
                            @endif
                            <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                    <button class="button is-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered">
                    <span class="is-size-7">
                        Copyright <i class="fa fa-copyright"></i> 2017 - 2020 All Rights Reserved | www.alberjtan.com
                    </span>
            </div>
        </div>
    </div>
</footer>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>