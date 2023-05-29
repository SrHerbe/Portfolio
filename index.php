<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio desarrollador web experto en soluciones creativas y eficientes para el crecimiento de tu negocio. Diseño y desarrollo de sitios web personalizados y optimizados para SEO.">
    <meta name="keywords"
        content="desarrollador web, portafolio, portfolio diseño web, desarrollo web, soluciones web, SEO, sitios web personalizados, sitios web optimizados">
    <title>Portfolio | Samuel Hernández Berrocal</title>
    <link rel="stylesheet" href="./styles.css">
    <link id="favicon" rel="icon" type="image/png" href="./assets/logo/logo_white_bold.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>

    <div id="vanta-bg"></div>

    <header>
        <nav class="center" id="header-container">
            <img decoding="async" src="./assets/logo/logo_white.png" alt="logo" width="69px" height="69px" id="logo">

            <ul id="menu">
                <li id="btn-inicio">Inicio</li>
                <li id="btn-proyectos">Proyectos</a></li>
                <li id="btn-sobreMi">Sobre mí</li>
                <li id="btn-habilidades">Habilidades</li>
                <li id="btn-contacto">Contacto</li>
            </ul>

            <button id="cambiarTema" name="btn-cambiar-tema">
                <svg id="btn-claro" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M17 12c0 2.762-2.238 5-5 5s-5-2.238-5-5 2.238-5 5-5 5 2.238 5 5zm-9.184-5.599l-3.594-3.594-1.414 1.414 3.594 3.595c.402-.537.878-1.013 1.414-1.415zm4.184-1.401c.34 0 .672.033 1 .08v-5.08h-2v5.08c.328-.047.66-.08 1-.08zm5.598 2.815l3.594-3.595-1.414-1.414-3.594 3.595c.536.402 1.012.878 1.414 1.414zm-12.598 4.185c0-.34.033-.672.08-1h-5.08v2h5.08c-.047-.328-.08-.66-.08-1zm11.185 5.598l3.594 3.593 1.415-1.414-3.594-3.594c-.403.537-.879 1.013-1.415 1.415zm-9.784-1.414l-3.593 3.593 1.414 1.414 3.593-3.593c-.536-.402-1.011-.877-1.414-1.414zm12.519-5.184c.047.328.08.66.08 1s-.033.672-.08 1h5.08v-2h-5.08zm-6.92 8c-.34 0-.672-.033-1-.08v5.08h2v-5.08c-.328.047-.66.08-1 .08z" />
                </svg>
                <svg id="btn-oscuro" class="oculto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 10.999c1.437.438 2.562 1.564 2.999 3.001.44-1.437 1.565-2.562 3.001-3-1.436-.439-2.561-1.563-3.001-3-.437 1.436-1.562 2.561-2.999 2.999zm8.001.001c.958.293 1.707 1.042 2 2.001.291-.959 1.042-1.709 1.999-2.001-.957-.292-1.707-1.042-2-2-.293.958-1.042 1.708-1.999 2zm-1-9c-.437 1.437-1.563 2.562-2.998 3.001 1.438.44 2.561 1.564 3.001 3.002.437-1.438 1.563-2.563 2.996-3.002-1.433-.437-2.559-1.564-2.999-3.001zm-7.001 22c-6.617 0-12-5.383-12-12s5.383-12 12-12c1.894 0 3.63.497 5.37 1.179-2.948.504-9.37 3.266-9.37 10.821 0 7.454 5.917 10.208 9.37 10.821-1.5.846-3.476 1.179-5.37 1.179z" />
                </svg>
            </button>
        </nav>
    </header>

    <section id="inicio" class="seccion">
        <div class="inicio-container center">

            <img decoding="async" class="inicio-img" src="./assets/DNII.jpg" alt="foto-perfil" width="300px" height="300px">

            <div>
                <p class="inicio-saludo">¡Hola!<img src="./assets/saludo.png" alt="saludo" height="42px"></p>
                <h1 class="inicio-soy">Soy <span class="multiText"></span></h1>
                <p class="inicio-p">
                    Preparado para afrontar cualquier desafío, buscando superar las expectativas y entregar soluciones
                    completas que se adapten a tus necesidades.
                </p>
                <div class="inicio-btns-container">
                    <a href="https://github.com/SrHerbe" class="inicio-btn-item" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>

                    </a>
                    <a href="https://www.linkedin.com/in/samuelherbe/" class="inicio-btn-item" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>

                    </a>
                </div>
            </div>

        </div>
        <svg id="test" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 150px; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: rgb(9, 11, 17);"></path>
        </svg>
    </section>

    <section id="proyectos" class="seccion">
        <div class="proyectos-container center">
            <h2 class="titulo">Proyectos</h2>
            <div class="container">
                <div class="proyecto">Proyecto 1</div>
                <div class="proyecto">Proyecto 2</div>
                <div class="proyecto">Proyecto 3</div>
            </div>
        </div>
    </section>

    <section id="sobreMi" class="seccion">
        <div class="sobreMi-container center">
            <h2 class="titulo">Sobre mi</h2>

            <p class="sobreMi-txt">Soy Samuel Hernández Berrocal. Mi interés por la tecnología va más allá de mi ámbito laboral, ya que me fascina explorar las últimas tendencias y herramientas que puedan ser aplicables en el mundo del desarrollo.</p>

            <a id="btn-cv" href="./assets/CV.pdf" target="_blank">
                Descargar CV
                <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path transform="translate(0, 3.5)"
                        d="M3 24h19v-23h-1v22h-18v1zm17-24h-18v22h18v-22zm-1 1h-16v20h16v-20zm-2 16h-12v1h12v-1zm0-3h-12v1h12v-1zm0-3h-12v1h12v-1zm-7.348-3.863l.948.3c-.145.529-.387.922-.725 1.178-.338.257-.767.385-1.287.385-.643 0-1.171-.22-1.585-.659-.414-.439-.621-1.04-.621-1.802 0-.806.208-1.432.624-1.878.416-.446.963-.669 1.642-.669.592 0 1.073.175 1.443.525.221.207.386.505.496.892l-.968.231c-.057-.251-.177-.449-.358-.594-.182-.146-.403-.218-.663-.218-.359 0-.65.129-.874.386-.223.258-.335.675-.335 1.252 0 .613.11 1.049.331 1.308.22.26.506.39.858.39.26 0 .484-.082.671-.248.187-.165.322-.425.403-.779zm3.023 1.78l-1.731-4.842h1.06l1.226 3.584 1.186-3.584h1.037l-1.734 4.842h-1.044z"/>
                </svg>
            </a>


        </div>
    </section>

    <section id="habilidades" class="seccion">
        <div class="habilidades-container center">
            <h2 class="titulo">Habilidades y <span class="secondary-color">Experiencias</span></h2>

            <div class="habilidades-subcontainer">
                <div class="skills-container">
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/31f11147f89dbd855a9b948e2ce643ea2f41c0a9-480x480.png" alt="HTML5" width="45px" height="45px">
                        </div>
                        <p>HTML5</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/107574d887f1c07c9fbea0704de7f293e244a8f3-480x480.png" alt="CSS3" width="45px" height="45px">
                        </div>
                        <p>CSS3</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="./assets/bootstrap.png" alt="CSS3" width="45px" height="45px">
                        </div>
                        <p>Bootstrap</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="./assets/typescript.svg" alt="" width="45px" height="45px">
                        </div>
                        <p>TypeScript</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/66bbf9242b1ccffebb5d46f376f5036b527fad48-480x480.png" alt="" width="45px" height="45px">
                        </div>
                        <p>JavaScript</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="./assets/angular.png" alt="" width="45px" height="45px">
                        </div>
                        <p>Angular</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/2825d163301127c72b6121baebb5e570689596e5-480x480.png" alt="" width="45px" height="45px">
                        </div>
                        <p>SASS</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/a804a741fb26f6c236c73086a87cfc9f64106401-480x480.png" alt="" width="45px" height="45px">
                        </div>
                        <p>Git</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="https://cdn.sanity.io/images/k92q0z30/production/a88486fee977aa130a76d10dc6300c84955691a5-480x480.png" alt="" width="45px" height="45px">
                        </div>
                        <p>MySQL</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="./assets/php.svg" alt="" width="45px" height="45px">
                        </div>
                        <p>PHP</p>
                    </div>
                    <div class="skill-item">
                        <div class="skill-img-container">
                            <img src="./assets/laravel.png" alt="" width="45px" height="45px">
                        </div>

                        <p>Laravel</p>
                    </div>
                </div>

                <div class="experiencias">
                    <div class="experiencia-item">
                        <div class="year">2023</div>
                        <div>
                            <h3>Navantia, Ferrol</h3>
                            <p><span class="secondary-color">Programador Junior</span></p>
                            <p class="third-color">Automatización de procesos para el seguimiento de órdenes de material.
                                Creación de herramientas web para procesar datos sobre planificación de obras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="contacto" class="seccion">
        <div class="center contacto-container">
            <h2 class="">Contáctame</h2>

            <div class="form-container">
                <div>
                    <p>Gracias por llegar hasta aquí. Espero que este portfolio, hecho con mucho cariño te haya gustado.</p>
                    <p>Contacta conmigo a través del correo electrónico, redes sociales o rellenando el formulario. Hasta pronto!</p>
                    <p>contact@herbe.es</p>
                    <div class="contact-btn-container">
                        <a href="https://github.com/SrHerbe" class="inicio-btn-item" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
    
                        </a>
                        <a href="https://www.linkedin.com/in/samuelherbe/" class="inicio-btn-item" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
    
                        </a>
                    </div>
                </div>


                <form id="myForm" action="sendmail.php" method="post">
                    <input type="email" placeholder="Email" name="email" id="form_email" autocomplete="off" required>
                    <textarea name="message" id="form_message" cols="30" rows="6" placeholder="Mensaje" autocomplete="off" required></textarea>
                    <div>
                        <button type="submit" id="enviar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="10" y1="14" x2="21" y2="3"></line><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"></path></svg>
                            Enviar
                        </button>
                    </div>
                    <div id="message"></div>
                </form>
                

            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r110/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.birds.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./script.js"></script>
</body>

</html>