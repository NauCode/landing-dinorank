<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTranslation("Sobre Nosotros"); ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />

    <link rel="stylesheet" href="https://dinorank.com/css/estiloscss2.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/spacers.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/components/headers.css" />
    <link rel="stylesheet" href="css/components/footer.css" />
    <link rel="stylesheet" href="css/pages/aboutus.css" />
    <link rel="stylesheet" href="css/desktop/aboutus.css">
  </head>
  <body>
    <!-- HEADER -->
    <header class="drl-header drl-pv-20">
      <div class="drl-header-section drl-left">
        <a href="/" class="logo">
          <img src="assets/images/dinorank_header_logo.png" alt="" />
          <img class="fixedContent" src="assets/images/dinorank_header_logo_white.png" alt="" />
        </a>
      </div>
      <div class="drl-header-section drl-center">
        <div href="" class="drl-menu-item drl-Button2 drl-menu-dropdown">
          <div class="label">
            <span data-content="Sobre Dinorank"><?php getTranslation("Sobre Dinorank"); ?></span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img class="fixedContent arrow" src="assets/images/atom/icon/drop-down-white.svg" alt="" />
          </div>
          <div class="content">
            <a href="whatisdinorank.html"><?php getTranslation("Qué es DinoRANK"); ?></a>
            <a href="about_us.html"><?php getTranslation("Sobre los fundadores"); ?></a>
            <a href="testimonials.html"><?php getTranslation("Testimonios"); ?></a>
          </div>
        </div>

        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Funciones"><?php getTranslation("Funciones"); ?></span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img class="fixedContent arrow" src="assets/images/atom/icon/drop-down-white.svg" alt="" />
          </div>
          <div class="content">
            <a href="tracking.html"><?php getTranslation("Tracking de posiciones"); ?></a>
            <a href="keyword_research.html"><?php getTranslation("Keyword research"); ?></a>
            <a href="auditoria_on_page.html"><?php getTranslation("Auditoría SEO on page"); ?></a>
            <a href="enlazado_interno.html"><?php getTranslation("Enlazado interno"); ?></a>
            <a href="pagerank_interno.html"><?php getTranslation("Pagerank interno"); ?></a>
            <a href="prominencia_semantica.html"><?php getTranslation("Prominencia semántica"); ?></a>
            <a href="canibalizaciones.html"><?php getTranslation("Canibalizaciones"); ?></a>
            <a href="thin_content.html"><?php getTranslation("Thin content"); ?></a>
            <a href="trafico_organico.html"><?php getTranslation("Tráfico orgánico"); ?></a>
            <a href="visibility.html"><?php getTranslation("Visibilidad"); ?></a>
            <a href="enlazado_externo.html"><?php getTranslation("Enlazado externo"); ?></a>
            <a href="gestion_enlazado_externo.html"><?php getTranslation("Gestión de enlazado externo"); ?></a>
          </div>
        </div>
        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Perfiles"><?php getTranslation("Perfiles"); ?></span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img class="fixedContent arrow" src="assets/images/atom/icon/drop-down-white.svg" alt="" />
          </div>
          <div class="content">
            <a href="agency.html"><?php getTranslation("Agencia SEO"); ?></a>
            <a href="consultor.html"><?php getTranslation("Consultor SEO"); ?></a>
            <a href="designer.html"><?php getTranslation("Diseñador Web"); ?></a>
            <a href="entrepreneur.html"><?php getTranslation("Emprendedor E-Commerce"); ?></a>
            <a href="marketing_manager.html"><?php getTranslation("Marketing Manager"); ?></a>
            <a href="nichero.html"><?php getTranslation("Nichero"); ?></a>
            <a href="copywriter.html"><?php getTranslation("Redactor SEO"); ?></a>
          </div>
        </div>
        <a href="precios.html" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Precios"><?php getTranslation("Precios"); ?></span>
          </div>
        </a>
        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Recursos"><?php getTranslation("Recursos"); ?></span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img class="fixedContent arrow" src="assets/images/atom/icon/drop-down-white.svg" alt="" />
          </div>
          <div class="content">
            <a href=""><?php getTranslation("Blog"); ?></a>
            <a href=""><?php getTranslation("Podcast"); ?></a>
            <a href=""><?php getTranslation("DinoWIKI"); ?></a>
            <a href=""><?php getTranslation("Directos"); ?></a>
            <a href=""><?php getTranslation("Librería"); ?></a>
            <a href=""><?php getTranslation("Merchandaising"); ?></a>
          </div>
        </div>
        <a href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Dino Academy"><?php getTranslation("Dino Academy"); ?></span>
          </div>
        </a>
      </div>
      <div class="drl-header-section drl-right">
        <div class="drl-mobile-menu-btn">
          <img src="assets/images/atom/icon/menu.svg" alt="" />
          <img class="fixedContent" src="assets/images/atom/icon/menu-white.svg" alt="" />
        </div>
        <div class="drl-language-dropdown">
          <div class="drl-langauge-dropdown-btn">
            <img class="flag" src="assets/images/bandera-es.png" alt="" />
            <img class="flag fixedContent" src="assets/images/bandera-es.png" alt="" />
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img class="fixedContent arrow" src="assets/images/atom/icon/drop-down-white.svg" alt="" />
          </div>
          <div class="drl-language-dropdown-content">
            <div>
              <a href="#" class="drl-language-menu-item">
                <img src="assets/images/bandera-es.png" alt="" />
                <span class="drl-Button2 lItem"><?php getTranslation("Inglés"); ?></span>
              </a>
              <a href="#" class="drl-language-menu-item">
                <img src="assets/images/bandera-es.png" alt="" />
                <span class="drl-Button2 lItem"><?php getTranslation("Alemán"); ?></span>
              </a>
            </div>
          </div>
        </div>
        <div class="drl-separator"></div>
        <div class="drl-header-action-buttons">
          <a
            href=""
            class="
              drl-Button2
              drl-header-btn
              drl-header-btn-1
              drl-header-btn-1--gooey
            "
            ><?php getTranslation("Regístrate"); ?>
            <div class="drl-header-btn-1__blobs">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </a>
          <a
            href=""
            class="drl-Button2 drl-header-btn drl-header-btn-2"
            data-content="Inicia Sesión"
            ><?php getTranslation("Inicia Sesión"); ?></a
          >
        </div>
      </div>
    <div class="mobile-menu">
        <div class="mm-item">
          <span id="btnSubmm1"><?php getTranslation("Sobre DinoRANK"); ?></span>
          <div id="submm-1" class="box">
            <div class="mm-subitem">
              <a href="whatisdinorank.html"><?php getTranslation("¿Qué es DinoRANK?"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="about_us.html"><?php getTranslation("Sobre los fundadores"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="testimonials.html"><?php getTranslation("Testimonios"); ?></a>
            </div>
          </div>
        </div>
        <div class="mm-item">
          <span id="btnSubmm2"><?php getTranslation("Funciones"); ?></span>
          <div id="submm-2" class="box">
            <div class="mm-subitem">
              <a href="tracking.html"><?php getTranslation("Tracking de posiciones"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="keyword_research.html"><?php getTranslation("Keyword research"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="auditoria_on_page.html"><?php getTranslation("Auditoría SEO on page"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="enlazado_interno.html"><?php getTranslation("Enlazado interno"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="pagerank_interno.html"><?php getTranslation("Pagerank interno"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="prominencia_semantica.html"><?php getTranslation("Prominencia semántica"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="canibalizaciones.html"><?php getTranslation("Canibalizaciones"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="thin_content.html"><?php getTranslation("Thin content"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="visibility.html"><?php getTranslation("Visibilidad"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="enlazado_externo.html"><?php getTranslation("Enlazado externo"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="gestion_enlazado_externo.html"
                ><?php getTranslation("Gestión de enlazado externo"); ?></a
              >
            </div>
          </div>
        </div>
        <div class="mm-item">
          <span id="btnSubmm3"><?php getTranslation("Perfiles"); ?></span>
          <div id="submm-3" class="box">
            <div class="mm-subitem">
              <a href="agency.html"><?php getTranslation("Agencia SEO"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="consultor.html"><?php getTranslation("Consultor SEO"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="designer.html"><?php getTranslation("Diseñador Web"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="entrepreneur.html"><?php getTranslation("Emprendedor E-commerce"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="marketing_manager.html"><?php getTranslation("Marketing Manager"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="nichero.html"><?php getTranslation("Nichero"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="copywriter.html"><?php getTranslation("Redactor SEO"); ?></a>
            </div>
          </div>
        </div>

        <div class="mm-item">
          <a href="precios.html"><?php getTranslation("Precios"); ?></a>
        </div>
        <div class="mm-item">
          <span id="btnSubmm4"><?php getTranslation("Recursos"); ?></span>
          <div id="submm-4" class="box">
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("Blog"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("Podcast"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("DinoWIKI"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("Directos"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("Librería"); ?></a>
            </div>
            <div class="mm-subitem">
              <a href="#"><?php getTranslation("Merchandaising"); ?></a>
            </div>
          </div>
        </div>

        <div class="mm-item">
          <a href="#"><?php getTranslation("Dino Academy"); ?></a>
        </div>

        <div class="mm-item">
          <a href="#"><?php getTranslation("Iniciar Sesión"); ?></a>
        </div>

        <div class="mm-item">
          <a href="#"><?php getTranslation("Registrarse"); ?></a>
        </div>      </div>
</header>
    <!-- END HEADER -->
    <!-- MAIN -->
    <main>
      <section id="hero">
        <div class="wrapper">
          <h1 class="drl-Headline1"><?php getTranslation("
            El nacimiento de DinoRANK ha cambiado el panorama de las herramientas SEO
          "); ?></h1>
          <div class="img-container">
            <img
              src="assets/images/dino_teacher.png"
              alt=""
              class="mobile-dino"
            />
          </div>
        </div>
      </section>
      <section id="story">
          <div class="wrapper">
              <p class="drl-Text1"><?php getTranslation("La historia que hay detrás de DinoRANK es todo un viaje."); ?></p>
              <p class="drl-Text1"><?php getTranslation("Y por primera vez voy a escribirla yo, Gaby, socio cofundador de DinoRANK."); ?></p>
              <p class="drl-Text1"><?php getTranslation("Soy ingeniero informático y he trabajado en casi todas las áreas técnicas que se pueden tocar en el mundo web. En 2012 decidí emprender, monté varias empresas, pero no logré el éxito que esperaba. Al final conseguí que una de esas empresas fuera relativamente bien y me volqué en ella."); ?></p>
              <p class="drl-Text1"><?php getTranslation("<b>Así que para potenciar ese negocio, en 2017 hice Dispara Tus Visitas (DTV), el curso de Dean Romero, para mejorar mis conocimientos SEO y aumentar las ventas.</b>"); ?></p>
              <p class="drl-Text1"><?php getTranslation("Y fue haciendo ese curso cuando me di cuenta de que casi todas las herramientas que usaba Dean (que eran unas cuantas y costaban una pasta), las podía hacer yo a medida y me ahorraba ese dinero."); ?></p>
              <div class="img-wrapper">
                  <img id="gaby-image" src="assets/images/au_story_gaby.png" alt="">
              </div>
              <p class="drl-Text1"><?php getTranslation("Y lo hice."); ?></p>
              <p class="drl-Text1"><?php getTranslation("En ese momento pensé en crear una suite de herramientas SEO y sacarla al mercado por un precio inferior. Podría dar acceso a una herramienta profesional a mucha gente que no puede permitirse pagar lo que cuestan las suites que hay en el mercado."); ?></p>
          </div>
      </section>
      <section id="initial-contact">
        <div class="wrapper">
            <h2 class="drl-Headline2"><?php getTranslation("Fue entonces cuando contacté a Dean"); ?></h2>
            <p class="drl-Headline5"><?php getTranslation("Quería que fuera mi socio por su experiencia como SEO, su conocimiento del sector, su habilidad como marketer y por la comunidad que él ya tenía en Blogger3cero."); ?></p>
        </div>
     </section>
     <section id="story-2">
         <div class="wrapper">
             <p class="drl-Text1"><?php getTranslation("No me contestó. Durante varios meses. Pero yo me negaba a aceptar ese rechazo."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Sabía desde lo más profundo de mí que si me escuchaba, el proyecto que yo tenía en la cabeza se convertiría en algo real."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Dean estaba en un momento personal complicado, se había ido de viaje y no contestaba a ningún email."); ?></p>
             <p class="drl-Text1"><?php getTranslation("<b>Entonces decidí usar “la bala de plata” que tenía reservada.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Publiqué un comentario en un post de Blogger3cero (sabía que Dean contestaba a todos los comentarios), diciéndole que le había escrito varios emails para proponerle algo y no me había contestado."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Me arriesgué porque, en cierto modo, le puse un poco en evidencia. Pero respondió."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Y, a medida que nos íbamos escribiendo, le sentía cada vez más receptivo."); ?></p>
         </div>
     </section>
     <section id="comment-fragment">
         <div class="wrapper">
             <p><?php getTranslation("¿Extracto del comentario?"); ?></p>
         </div>
     </section>
     <section id="story-3">
         <div class="wrapper">
             <p class="drl-Text1"><?php getTranslation("Y por fin nos conocimos."); ?></p>
             <p class="drl-Text1"><?php getTranslation("<b>Yo sabía que tenía que venderle mi proyecto, pero tenía la sensación de que iba a ser relativamente fácil.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Quedamos en el Starbucks del Centro Comercial Plaza Norte 2, de S. Sebastián de los Reyes."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Llevé algunas páginas impresas con detalles de las herramientas que había preparado para mí y que no tenían nada de diseño ni usabilidad de cara al cliente."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Solo quería mostrar las funcionalidades a nivel concepto."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Te voy a decir que todavía hoy, cuando estamos de broma, Dean me sigue diciendo que le presenté el proyecto con un aspecto horrible... Pero siempre reconoce que en cuanto me vio, se dio cuenta de que <b>yo era un emprendedor hambriento, que el proyecto era sólido y que realmente tenía muchas posibilidades.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Ahí nació el embrión de DinoRANK con el único objetivo de resolver un problema muy sencillo:"); ?></p>
         </div>
     </section>
     <section id="objetive">
         <div class="wrapper">
             <h2 class="drl-Headline2"><?php getTranslation("
                Democratizar el SEO
             "); ?></h2>
             <p class="drl-Headline5"><?php getTranslation("Conseguir que nuestros usuarios no tengan que gastar mucho dinero para posicionar sus páginas en Google, mejorar su visibilidad y aumentar sus ingresos."); ?></p>
             <div class="img-wrapper">
                 <img src="assets/images/au_story_dean_gaby.png" alt="">
             </div>
         </div>
     </section>
     <section id="story-4">
         <div class="wrapper">
             <p class="drl-Text1"><?php getTranslation("Y comienza la juerga."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Yo empecé a hacer diagramas, distribuir tiempos y tareas y <b>me metí de lleno en la programación.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Voy a contarte algo que no se me olvida."); ?></p>
             <p class="drl-Text1"><?php getTranslation("En aquella época, mi hija mayor dormía bastante mal y había que pasearla en carrito un buen rato. Así que gran parte del análisis de DinoRANK, lo fui haciendo durante esos paseos nocturnos. Y por la mañana picaba ese código."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Por su parte <b>Dean se ocupó de mover y preparar a todos sus contactos del mundo SEO</b>. Les dio acceso a la versión beta de la herramienta para que la probaran, y con su feedback pulimos los fallos iniciales, ajustamos detalles..."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Tras unos meses llegó el momento crucial: <b>El lanzamiento de DinoRANK.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Íbamos a cambiar el mundo SEO con una herramienta que no existía en el mercado en relación usabilidad-calidad-precio."); ?></p>
             <p class="drl-Text1"><?php getTranslation("<b>Y fue un auténtico desastre.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Dean había creado mucho hype entre sus contactos así que, cuando lanzamos, compró muchísima gente de golpe y surgieron problemas que en la versión beta no habíamos detectado."); ?></p>
             <p class="drl-Text1"><?php getTranslation("El sistema no aguantaba, la herramienta iba lenta, se caía cada dos por tres..."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Estuve dos semanas durmiendo unas 4 horas al día con un nivel de tensión increíble, pero <b>conseguí reestructurar las partes que habían fallado.</b>"); ?></p>
         </div>
     </section>
     <section id="achieved">
         <div class="wrapper">
             <h3 class="drl-Headline3"><?php getTranslation("
                DinoRANK ya era un producto que entraba en el mercado de las suites SEO para transformarlo de forma definitiva
             "); ?></h3>
             <div class="img-wrapper">
                 <img src="assets/images/dino_fire.png" alt="">
             </div>
         </div>
     </section>
     <section id="story-5">
         <div class="wrapper">
             <p class="drl-Text1"><?php getTranslation("<b>La progresión ha sido increíble.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Los usuarios han respondido de forma increíble."); ?></p>
             <p class="drl-Text1"><?php getTranslation("Recuerdo una de las quedadas “Cañas-SEO” a la que fue Dean. Me contó que se le acercaron dos hombres y le dijeron que habían ido a Madrid, desde Málaga, solo para <b>agradecerle en persona que hubiera creado DinoRANK</b> y decirle todo lo que les facilitaba su trabajo."); ?></p>
             <p class="drl-Text1"><?php getTranslation("¡Desde Málaga! El subidón que nos dio fue increíble."); ?></p>
             <p class="drl-Text1"><?php getTranslation("<b>Cada día nos escriben usuarios contándonos sus casos de éxito.</b>"); ?></p>
             <p class="drl-Text1"><?php getTranslation("Gente que audita sus webs, que hace sus páginas de nichos o que da servicios a sus clientes y gana dinero a través de la herramienta. Realmente es algo que te realiza."); ?></p>
         </div>
     </section>
     <section id="cta-banner">
         <div class="wrapper">
             <h3 class="drl-Headline3"><?php getTranslation("DinoRANK es una suite seo todo en uno accesible, tiene calidad y potencia y es económica, algo que en el mercado SEO actual no existe"); ?></h3>
             <div class="btn-wrapper">
                 <a href="" class="drl-btn"><?php getTranslation("Conoce todas las funcionalidades de DinoRANK"); ?></a>
             </div>
         </div>
     </section>
     <section id="dino-cards">
         <div class="wrapper">
             <div class="container">
                 <div class="item">
                     <p class="drl-Caption1"><?php getTranslation("DinoRANK está hecha para profesionales digitales de cualquier rama."); ?></p>
                     <p class="drl-Text2"><?php getTranslation("Personas cuyo core no es el SEO, pueden trabajar el SEO de forma sencilla."); ?></p>
                     <div class="list">
                         <div class="valid-icon"></div>
                         <p class="drl-Text2"><?php getTranslation("<b>Redactores SEO y copywriters</b> pueden escribir sus textos y optimizarlos para posicionar en Google."); ?></p>
                     </div>
                     <div class="item-figure"></div>
                 </div>
                 <div class="item">
                    <p class="drl-Caption1"><?php getTranslation("Y también está hecha para SEOs profesionales de distinto tamaño."); ?></p>
                    <p class="drl-Text2"><?php getTranslation("Con DinoRANK pueden trabajar un SEO de calidad sin dejarse una pasta."); ?></p>
                    <div class="list">
                        <div class="valid-icon"></div>
                        <p class="drl-Text2"><?php getTranslation("<b>Nicheros, consultores SEO y agencias</b> pueden posicionar sus webs o las de sus clientes a nivel profesional."); ?></p>
                    </div>
                    <div class="item-figure"></div>
                </div>
             </div>
         </div>
     </section>
     <section id="alternative">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("DinoRANK es la alternativa a las herramientas SEO que vas a encontrar y es software creado en España"); ?></h2>
          <div class="img-wrapper">
            <img src="assets/images/dino_desktop_wid.png" alt="">
          </div>
        </div>
      </section>
    </main>
    <!-- END MAIN -->
    <!-- FOOTER -->
    <footer>
      <div class="wrapper">
        <div class="top">
          <div class="left">
            <a href="" class="dlr-Button1"><?php getTranslation("Contacto"); ?></a>
            <a href="" class="dlr-Button1"><?php getTranslation("Newsletter"); ?></a>
            <a href="" class="dlr-Button1"><?php getTranslation("Afiliados"); ?></a>
            <a href="" class="dlr-Button1"><?php getTranslation("Aviso legal"); ?></a>
          </div>
          <div class="right">
            <a href="" class="icon">
              <img src="assets/images/twitter_icon.svg" alt="" />
            </a>
            <a href="" class="icon">
              <img src="assets/images/instagram_icon.svg" alt="" />
            </a>
            <a href="" class="icon">
              <img src="assets/images/youtube_icon.svg" alt="" />
            </a>
          </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
          <p class="drl-Caption2"><?php getTranslation("Hecho con 💚 desde Madrid para el mundo"); ?></p>
        </div>
      </div>
    </footer>
    <!-- END FOOOTER -->

    <svg
      xmlns="http://www.w3.org/2000/svg"
      version="1.1"
      style="display: block; height: 0; width: 0"
    >
      <defs>
        <filter id="goo">
          <feGaussianBlur
            in="SourceGraphic"
            stdDeviation="10"
            result="blur"
          ></feGaussianBlur>
          <feColorMatrix
            in="blur"
            mode="matrix"
            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 9 -7"
            result="goo"
          ></feColorMatrix>
          <feBlend in="SourceGraphic" in2="goo"></feBlend>
        </filter>
      </defs>
    </svg>

    <script src="js/header.js"></script>
  </body>
</html>
