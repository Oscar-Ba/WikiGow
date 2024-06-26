
<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Tienes que iniciar sesion para ingresar");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }

    session_destroy();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki gow</title>
    <link rel="shortcut icon" href="./images/Favicom.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/Estilos.css">
    <link rel="stylesheet" href="./css/Normalize.css">

</head>
<body im>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Wiki GOW</h2>
            </div>

            <Ul class="nav__link nav__link--menu">
                
                <li class="nav__items">
                    <a href="php/cerrar_sesion.php" class="nav__links" target="_blank">Cerrar sesion</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>
                <img src="./images/Salir.svg" alt="" class="nav__close">
            </Ul>

            <div class="nav__menu">
                <img src="./images/Menu.svg" alt="" class="nav__img"> 
            </div>

        </nav>

        <section class="hero__container container">
                <h1 class="hero__title">Bienvenido a la wiki de God of war</h1>
                <p class="hero__paragraph">Esta es una pagina de un fan de la saga, espero disfrutes y aprendas algo nuevo. </p>
                <a href="https://godofwar.fandom.com/es/wiki/God_of_War_Wiki" class="cta"> Wiki mas completa </a>
            </section>
        
    </header>

    <main>
        <section class="about">
            <h2 class="subtitle">¿Quieres comprar el juego?</h2>
            <p class="about__paragraph">Visita estos sitios web que te recomendamos para comprarlos, tanto fisicos, como digitales.</p>

            <div class="about__main">
                <article class="about__icons">

                    <h3 class="about__title">God of war ps4</h3>
                    <p class="about__paragraph"><img src="images/Gow4.jpg" class="juego__1" alt=""></p>
                    <a href="https://store.playstation.com/es-es/product/EP9000-CUSA07411_00-0000000GODOFWARN" class="gowS">Compra aqui... <img src="images/PlayStation-Logo.png" alt=""></a>

                </article>


                <article class="about__icons">

                    <h3 class="about__title">God of war Pc</h3>
                    <p class="about__paragraph"><img src="images/GOW3.jpg" class="juego__1" alt=""></p>
                    <a href="https://store.steampowered.com/app/1593500/God_of_War/" class="gowS">Compra aqui... <img src="images/Steam.svg" alt=""></a>

                </article>


                <article class="about__icons">

                    <h3 class="about__title">God of war Pc</h3>
                    <p class="about__paragraph"><img src="images/Gow2.jpg" class="juego__1" alt=""></p>
                    <a href="https://store.epicgames.com/es-ES/p/god-of-war" class="gowS">Compra aqui... <img src="images/Epic_Games_logo.png" alt=""></a>

                </article>


                <article class="about__icons">

                    <h3 class="about__title">God of war III ps4</h3>
                    <p class="about__paragraph"><img src="images/Gow1.jpg" class="juego__1" alt=""></p>
                    <a href="https://store.playstation.com/es-cl/product/UP9000-CUSA01623_00-0000GODOFWAR3PS4" class="gowS">Compra aqui... <img src="images/PlayStation-Logo.png" alt=""></a>

                </article>

            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">

                    <h2 class="title">Historia Cronolojicamente desde Gow Ascension hasta Gow de ps4</h2>

                </div>
            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <div>
                    <img src="images/Izqarrow.svg" class="testimony__arrow" id="before">
                </div>
                
                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war: Ascension</h2>
                        <p class="testimony__review">Precuela de la historia principal, Ascension nos lleva a los primeros años de Kratos como soldado espartano. 
                            Tras ser traicionado por Ares, el dios de la guerra, Kratos se embarca en una búsqueda de venganza que lo llevará a cuestionar su propia moralidad.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/ascension.webp" class="testimony__img">
                    </figure>
                </section>

                
                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war: Chains of Olympus</h2>
                        <p class="testimony__review">Atenea guía a Kratos para buscar al Dios Sol, Helios, cuya ausencia ha sumido a muchos dioses en un sueño profundo debido a Morfeo, el Dios del Sueño. 
                            Con la ayuda del Titán Atlas, Kratos busca evitar que Morfeo y Perséfone, la Reina del Inframundo, destruyan el Pilar del Mundo y con ello el Olimpo.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/CoO.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war I</h2>
                        <p class="testimony__review">Impulsada por la ira y la venganza, la diosa Atenea encomienda a Kratos, un guerrero marcado por la tragedia, la misión de eliminar a Ares, 
                            el dios de la guerra y antiguo mentor de Kratos. Ares, consumido por el rencor hacia Atenea, ha desatado su furia sobre Atenas, sembrando el caos y la destrucción.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/GowI.webp" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war: Ghost of Sparta</h2>
                        <p class="testimony__review">Kratos, ahora el dios de la guerra, todavía está atormentado por su pasado y las visiones de su familia muerta. Un día, es visitado por el fantasma de su madre, Calisto, quien le dice que su hermano Deimos todavía está vivo y prisionero en la ciudad perdida de Atlántida.
                                Kratos decide embarcarse en un viaje para encontrar a su hermano y finalmente romper la cadena de la culpa y la rabia que lo ha atormentado durante tanto tiempo.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/Gow1.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="5">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war II</h2>
                        <p class="testimony__review">Kratos, el recién coronado Dios de la Guerra que derrotó a Ares, su predecesor, es traicionado por Zeus, el soberano de los dioses olímpicos. Zeus le arrebata su divinidad y trata de matarlo, enviándolo al Inframundo. Gaia, la Titán, interviene y le revela a Kratos 
                                que las Hermanas del Destino poseen el poder de alterar el tiempo. Ellas podrían permitirle evitar su traición y buscar venganza contra Zeus.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/GowII.webp" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="6">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war III</h2>
                        <p class="testimony__review">Marcado por la traición de su padre, el dios supremo Zeus, Kratos se lanza a una guerra sin cuartel contra el Olimpo. Su sed de venganza lo impulsa a escalar las imponentes laderas del Monte Olimpo, sembrando el terror entre titanes, dioses y criaturas mitológicas. 
                            En su épica ascensión, Kratos se enfrenta a la deslealtad de la titán Gaia, quien lo abandona a su suerte. Sin embargo, guiado por el espíritu de Atenea, Kratos no se rinde. Su furia lo convierte en una fuerza imparable que arrasa con todo a su paso.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/GowIII.webp" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="7">
                    <div class="testimony__texts">
                        <h2 class="subtitle">God of war</h2>
                        <p class="testimony__review">Inspirada en la rica mitología nórdica, la entrega de God of War del 2018 nos transporta a la antigua Escandinavia, específicamente al reino de Midgard. En esta ocasión, la historia gira en torno a dos protagonistas: Kratos, el otrora dios griego de la guerra, y su hijo Atreus.
                            Tras la muerte de Faye, la segunda esposa de Kratos y madre de Atreus, ambos se embarcan en un viaje para cumplir su último deseo: esparcir sus cenizas en la cima más alta de los nueve reinos. Sin embargo, este viaje no estará exento de desafíos. Kratos, decidido a proteger a su hijo, oculta su pasado turbulento y su naturaleza divina a Atreus.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/GowIIII.jfif" class="testimony__img">
                    </figure>
                </section>


                <img src="images/Derarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Wiki Gow</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>


        <section class="footer__copy container">
            <div class="footer__social">
                <a href="https://discord.com/channels/1252809273025499216/1252809273742721035" class="footer__icons"><img src="./images/Discord.svg" class="footer__img"></a>
                <a href=" https://www.twitch.tv/dizenplayer?sr=a" class="footer__icons"><img src="./images/twich.svg" class="footer__img"></a>
                <a href="https://www.instagram.com/oscardr_050?igsh=MTFkdWZuMTRsbXAyZg==" class="footer__icons"><img src="./images/ig.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Oscar Barros</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>