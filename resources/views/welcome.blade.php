<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/My-Signature-Logo.png') }}" type="image/x-icon">
    <title>Ayman Portfolio</title>
</head>

<body>
    <div class="bg-light col-12 px-0">
        <nav class="navbar bg-transparent fixed-top px-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#top"><img src="{{ asset('images/My-Signature-Logo.png') }}"
                        alt="Logo" width="55" height="40"></a>
                <i class="fa-sharp fa-solid fa-bars-staggered fa-flip" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"></i>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sections</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experiences">Experiences</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="d-md-flex justify-content-center vh-50 vh-md-100">
            <div class="col-md-6 px-0 d-flex justify-content-center align-items-center"
                style="background-color: #dbd94e90" id="top">
                <img src="{{ asset('images/my-photo.png') }}" alt="my photo" class="rounded col-10 px-0">
            </div>
            <div class="col-md-6 my-3 my-md-0 px-0 d-flex flex-column justify-content-center align-items-center">
                <h5 style="color:#878638;">Full Stack Developer</h5>
                <h1>I'm Ayman Safwat</h1>
                <div class="d-flex">
                    <a href="#" class="text-decoration-none text-secondary px-3 py-2 border first_link">More About
                        Me</a>
                    <a href="#contact" class="text-decoration-none text-body px-3 py-2 border second_link">Hire Me</a>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h2 class="bold text-center my-4" id="services">What I Do?</h2>
            <div class="d-flex justify-content-around">
                <div class="card col-10 col-md-3 px-2">
                    <div class="text-center mt-3 mb-2">
                        <i class="fa-sharp fa-3x fa-solid fa-code myColor"></i>
                        <h4 class="bold">Front End Development</h4>
                    </div>
                    <div class="col-11 px-0 mx-auto">
                        <p class="bold text-justify">
                            Front-End development is all about creating the user-facing part of websites and
                            applications,
                            with a focus on design, user experience, and the use of web technologies like HTML, CSS, and
                            JavaScript. It plays a pivotal role in delivering a visually appealing and user-friendly
                            digital
                            experience to end-users.
                            <br>
                            So To Achieve This I Use:
                            <span class="myColor">
                                (HTML-CSS-JavaScript-Jquery-Ajax-Angular)
                            </span>
                        </p>
                    </div>
                </div>
                <div class="card col-10 col-md-3 px-2">
                    <div class="text-center mt-3 mb-2">
                        <i class="fa-sharp fa-3x fa-solid fa-gears myColor"></i>
                        <h4 class="bold">Back End Development</h4>
                    </div>
                    <div class="col-11 px-0 mx-auto">
                        <p class="bold text-justify">
                            Back-End development is concerned with building and maintaining the server-side
                            infrastructure, databases, and business logic that power web applications. It involves
                            programming, data management, security, and scalability to create robust and
                            high-performance back-end systems that interact with the front-end to deliver a complete and
                            functional user experience.
                            <br>
                            So To Achieve This I Use:
                            <span class="myColor">
                                (PHP-Laravel-Mysql)
                            </span>
                        </p>
                    </div>
                </div>
                <div class="card col-10 col-md-3 px-2">
                    <div class="text-center mt-3 mb-2">
                        <i class="fa-solid fa-mobile-screen-button fa-3x myColor"></i>
                        <h4 class="bold">APIs For Mobile Apps</h4>
                    </div>
                    <div class="col-11 px-0 mx-auto">
                        <p class="bold text-justify">
                            APIs serve as bridges that enable different software applications or systems to communicate
                            and interact. They abstract complexity, provide standardized ways to access functionality or
                            data, and play a fundamental role in modern software development, enabling the creation of
                            interconnected and feature-rich applications.
                            <br>
                            So To Achieve This I Use:
                            <span class="myColor">
                                (PHP-Laravel-Mysql-JSON)
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h2 class="bold text-center my-4" id="experiences">Experiences</h2>
            <div class="d-flex flex-wrap justify-content-around">
                <div class="card col-10 col-md-5 px-2 my-2">
                    <div class="mt-3 mb-2">
                        <div class="col-11 px-0 mx-auto">
                            <i class="fa-solid fa-user-graduate fa-3x myColor"></i>
                            <p class="bold myColor">2011-2015</p>
                            <h4 class="bold">Bachelor Of Physics</h4>
                            <p class="bold text-justify">
                                A Bachelor of Physics is an undergraduate degree program that provides a comprehensive
                                foundation in the fundamental principles of physics. Students study topics such as
                                mechanics,
                                electromagnetism, thermodynamics, quantum mechanics, and relativity. This degree equips
                                graduates with strong analytical and problem-solving skills, making them suitable for
                                various
                                careers in research, education, engineering, and technology.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-10 col-md-5 px-2 my-2">
                    <div class="mt-3 mb-2">
                        <div class="col-11 px-0 mx-auto">
                            <i class="fa-solid fa-person-military-rifle fa-3x myColor"></i>
                            <p class="bold myColor">2016-2018</p>
                            <h4 class="bold">Reserve First Lieutenant</h4>
                            <p class="bold text-justify">
                                Serviced in the Artillery Corps as a reserve first lieutenant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-10 col-md-5 px-2 my-2">
                    <div class="mt-3 mb-2">
                        <div class="col-11 px-0 mx-auto">
                            <i class="fa-solid fa-helmet-safety fa-3x myColor"></i>
                            <p class="bold myColor">2018-2020</p>
                            <h4 class="bold">HSE Engineer</h4>
                            <p class="bold text-justify">
                                HSE (Health, Safety, and Environment) Engineer is a professional responsible for
                                ensuring that workplaces and projects comply with safety and environmental regulations.
                                They assess risks, implement safety measures, and develop strategies to maintain a safe
                                and eco-friendly environment, protecting both personnel and the surrounding community.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-10 col-md-5 px-2 my-2">
                    <div class="mt-3 mb-2">
                        <div class="col-11 px-0 mx-auto">
                            <i class="fa-solid fa-laptop-code fa-3x myColor"></i>
                            <p class="bold myColor">2020-now</p>
                            <h4 class="bold">Full Stack Developer</h4>
                            <p class="bold text-justify">
                                A Full Stack Developer is a versatile software engineer who possesses expertise in both
                                front-end and back-end development. They have the skills to work on the entire web
                                application stack, from designing user interfaces and user experiences to developing
                                server-side logic and managing databases. Full Stack Developers are capable of creating
                                end-to-end solutions for web and software projects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center my-4" id="contact">
            <a href="tel:+201062153292"
                class="text-decoration-none text-body px-3 py-2 d-flex justify-content-center align-items-center border first_link last_hover">Call
                Me</a>
            <a href="https://wa.me/+201062153292" class="px-3 py-2 border second_link"><i
                    class="fa-brands fa-whatsapp fa-fade fa-2x text-success"></i></a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
