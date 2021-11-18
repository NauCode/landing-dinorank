<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTranslation("Inicio"); ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />

    <link rel="stylesheet" href="https://dinorank.com/css/estiloscss2.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/spacers.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/components/headers.css" />
    <link rel="stylesheet" href="css/components/footer.css" />
    <link rel="stylesheet" href="css/pages/home.css" />
    <link rel="stylesheet" href="css/desktop/home.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header class="drl-header drl-pv-20">
      <div class="drl-header-section drl-left">
        <a href="/" class="logo">
          <img src="assets/images/dinorank_header_logo.png" alt="" />
          <img
            class="fixedContent"
            src="assets/images/dinorank_header_logo_white.png"
            alt=""
          />
        </a>
      </div>
      <div class="drl-header-section drl-center">
        <div href="" class="drl-menu-item drl-Button2 drl-menu-dropdown">
          <div class="label">
            <span data-content="Sobre Dinorank">Sobre Dinorank</span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img
              class="fixedContent arrow"
              src="assets/images/atom/icon/drop-down-white.svg"
              alt=""
            />
          </div>
          <div class="content">
            <a href="whatisdinorank.html"><?php getTranslation("Qué es DinoRANK"); ?></a>
            <a href="about_us.html"><?php getTranslation("Sobre los fundadores"); ?></a>
            <a href="testimonials.html"><?php getTranslation("Testimonios"); ?></a>
          </div>
        </div>

        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Funciones">Funciones</span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img
              class="fixedContent arrow"
              src="assets/images/atom/icon/drop-down-white.svg"
              alt=""
            />
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
            <a href="gestion_enlazado_externo.html"
              ><?php getTranslation("Gestión de enlazado externo"); ?></a
            >
          </div>
        </div>
        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Perfiles">Perfiles</span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img
              class="fixedContent arrow"
              src="assets/images/atom/icon/drop-down-white.svg"
              alt=""
            />
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
            <span data-content="Precios">Precios</span>
          </div>
        </a>
        <div href="" class="drl-menu-item drl-Button2">
          <div class="label">
            <span data-content="Recursos">Recursos</span>
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img
              class="fixedContent arrow"
              src="assets/images/atom/icon/drop-down-white.svg"
              alt=""
            />
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
          <img
            class="fixedContent"
            src="assets/images/atom/icon/menu.svg"
            alt=""
          />
        </div>
        <div class="drl-language-dropdown">
          <div class="drl-langauge-dropdown-btn">
            <img class="flag" src="assets/images/bandera-es.png" alt="" />
            <img
              class="flag fixedContent"
              src="assets/images/bandera-es.png"
              alt=""
            />
            <img src="assets/images/atom/icon/drop-down.svg" alt="" />
            <img
              class="fixedContent arrow"
              src="assets/images/atom/icon/drop-down-white.svg"
              alt=""
            />
          </div>
          <div class="drl-language-dropdown-content">
            <div>
              <a href="#" class="drl-language-menu-item">
                <img src="assets/images/bandera-es.png" alt="" />
                <span class="drl-Button2 lItem">Inglés</span>
              </a>
              <a href="#" class="drl-language-menu-item">
                <img src="assets/images/bandera-es.png" alt="" />
                <span class="drl-Button2 lItem">Alemán</span>
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
        </div>
      </div>
    </header>
    <!-- END HEADER -->
    <!-- MAIN -->
    <main>
      <section id="hero">
        <div class="container">
          <div class="home_particles_1"></div>
          <div class="home_particles_2"></div>
          <div class="wrapper">
            <h1 class="drl-Headline1"><?php getTranslation("
              Consigue mayor visibilidad en Google, atrae más tráfico
              cualificado y aumenta tus ingresos con DinoRANK
            "); ?></h1>
            <p class="drl-Text1"><?php getTranslation("
              Si quieres mejorar el SEO, posicionar tu contenido y saber qué
              hace tu competencia, necesitas una plataforma potente, intuitiva y
              que no te duela pagar.
            "); ?></p>
            <div class="btn-wrapper">
              <div style="position: relative">
                <a id="cta-hero-btn" href="" class="drl-btn drl-btn-b cta"
                  ><?php getTranslation("Empieza Ahora"); ?></a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="hero-badge">
        <div class="dino"></div>
        <div class="container">
          <div class="boxes">
            <div class="box box-1">
              <h2 class="drl-Headline6"><?php getTranslation("Una única herramienta"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                DinoRANK es una suite SEO todo en uno pensada para que no
                necesites más.
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-2">
              <h2 class="drl-Headline6"><?php getTranslation("Creada por SEOs"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                La potencia de una herramienta SEO profesional pensada para
                todos.
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-3">
              <h2 class="drl-Headline6"><?php getTranslation("Software SEO accesible"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Demostramos que las herramientas SEO no tienen porque ser caras.
              "); ?></p>
            </div>
          </div>
        </div>
      </section>
      <section id="intro-content">
        <div class="wrapper">
          <div class="video-container">
            <img src="assets/images/home_dinorank_video_1.png" alt="" />
          </div>
          <h2 id="ic-h2-1" class="drl-Headline2"><?php getTranslation("
            Dinorank es una herramienta SEO creada por SEOs que ayuda a escalar
            posiciones en Google a profesionales y empresas
          "); ?></h2>
          <p id="ic-p-1" class="drl-Text1"><?php getTranslation("
            No importa si eres un pequeño emprendedor, una gran agencia, un SEO
            nichero de raza, un consultor SEO profesional o un redactor de
            contenidos.
          "); ?></p>
          <p id="ic-p-2" class="drl-Text1"><?php getTranslation("¿Por qué?"); ?></p>
          <p id="ic-p-3" class="drl-Text1"><?php getTranslation("
            Porque sabemos que <b>el SEO es difícil</b> y técnico y, sobre todo
            al principio, se hace un poco bola.
          "); ?></p>
          <p id="ic-p-4" class="drl-Text1"><?php getTranslation("
            Conseguir visibilidad en Google cuesta mucho tiempo y dinero, y
            <b>las herramientas SEO que hay en el mercado no ayudan</b> porque
            son complicadas de usar y son caras.
          "); ?></p>
          <p id="ic-p-5" class="drl-Text1"><?php getTranslation("DinoRANK es todo lo contrario."); ?></p>
          <p id="ic-p-6" class="drl-Text1"><?php getTranslation("
            Es una suite todo en uno muy fácil de entender y utilizar. Tiene
            tutoriales en cada sección, es muy visual y no te duele en el
            bolsillo cada mes.
          "); ?></p>
          <p id="ic-p-7" class="drl-Text1"><?php getTranslation("
            Otras herramientas SEO te dan mucha información que no vas a
            utilizar nunca y además vas a terminar saturado de todo lo que
            ofrecen, que no es sencillo de aprender y dominar. Y, sobre todo,
            que no necesitas.
          "); ?></p>
          <p id="ic-p-8" class="drl-Text1"><?php getTranslation("
            Para que te hagas una idea, hay herramientas que cobran 40€ al mes
            (casi el doble que DinoRANK) solo por una de las funcionalidades que
            DinoRANK incluye. Y esto lo puedes comprobar tu mismo buscando en
            Google.
          "); ?></p>
          <p id="ic-p-9" class="drl-Text1"><?php getTranslation("
            Por eso, es más práctico que la herramienta SEO que tú elijas te
            ofrezca <b>las funcionalidades que necesitas</b>, sea
            <b>sencilla de manejar</b> y no te cobre por cosas que no vas a usar
            jamás.
          "); ?></p>
          <a id="ic-btn-1" href="whatisdinorank.html" class="drl-btn"
            ><?php getTranslation("¿Quieres saber más sobre DinoRANK?"); ?></a
          >
        </div>
      </section>
      <section id="intro-content-badge">
        <div class="container">
          <div class="boxes">
            <div class="box box-1">
              <h2 class="drl-Headline6"><?php getTranslation("Hacemos el SEO universal"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                DinoRANK nace con la idea de democratizar el SEO
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-2">
              <h2 class="drl-Headline6"><?php getTranslation("Relación calidad precio salvaje"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Una herramienta de élite pero no solo para las élites
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-3">
              <h2 class="drl-Headline6"><?php getTranslation("Haz SEO con pocos clicks"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Fácil de usar y de exprimir con tutoriales en cada sección
              "); ?></p>
            </div>
          </div>
        </div>
      </section>
      <section id="dino-functions">
        <div class="wrapper">
          <h2 id="df-h2-1" class="drl-Headline2 headerTitle"><?php getTranslation("
            Te presentamos las funciones de DinoRANK
          "); ?></h2>
          <p id="df-p-1" class="drl-Text1 headerParagraph"><?php getTranslation("
            Conoce exactamente cómo te puede ayudar la herramienta.
          "); ?></p>
          <div class="items-container">
            <!-- Feature 1 -->
            <div class="item image" style="grid-column: 2; grid-row: 1">
              <img
                src="assets/images/home_dinorank_feature_1_tracking_posiciones.png"
                alt=""
              />
              <div class="shape"></div>
            </div>
            <div class="item" style="grid-column: 1; grid-row: 1">
              <h3 class="drl-Headline3"><?php getTranslation("
                Tracking de posiciones: controla la evolución de tus keywords y
                de las de tu competencia
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Monitoriza en todo momento la posición real de tus palabras
                clave en Google.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Tracker de posiciones geolocalizado, tanto mobile como PC,
                fluctuaciones de SERPs y posibilidad de tracking por cluster o
                grupos de palabras clave.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-1" class="feature odd">
              <div class="particles"></div>
              <div class="item image">
                <img
                  src="assets/images/home_dinorank_feature_1_tracking_posiciones.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Tracking de posiciones: controla la evolución de tus keywords
                  y de las de tu competencia
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Monitoriza en todo momento la posición real de tus palabras
                  clave en Google.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Tracker de posiciones geolocalizado, tanto mobile como PC,
                  fluctuaciones de SERPs y posibilidad de tracking por cluster o
                  grupos de palabras clave.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 1 -->
            <!-- Feature 2 -->
            <div
              class="item image image-left"
              style="grid-column: 1; grid-row: 2"
            >
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_2_auditoria.png"
                alt=""
              />
              <div class="shape left"></div>
            </div>
            <div class="item right" style="grid-column: 2; grid-row: 2">
              <h3 class="drl-Headline3"><?php getTranslation("
                Auditoría SEO: limpia los errores SEO de tu web rápidamente
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Audita tus webs o las de tus clientes con pocos clicks.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Convierte el complejo proceso de auditoría SEO en algo rápido y
                sencillo. Páginas 404, redirecciones 301, posts mal
                optimizados... todo a golpe de click.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-2" class="feature">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_2_auditoria.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Auditoría SEO: limpia los errores SEO de tu web rápidamente
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Audita tus webs o las de tus clientes con pocos clicks.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Convierte el complejo proceso de auditoría SEO en algo rápido
                  y sencillo. Páginas 404, redirecciones 301, posts mal
                  optimizados... todo a golpe de click.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 2 -->
            <!-- Feature 3 -->
            <div class="item image" style="grid-column: 2; grid-row: 3">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_3_prominencia_semantica.png"
                alt=""
              />
              <div class="shape"></div>
            </div>
            <div class="item" style="grid-column: 1; grid-row: 3">
              <h3 class="drl-Headline3"><?php getTranslation("
                Prominencia semántica: lleva tu marketing de contenidos a otro
                nivel
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Conoce qué keywords usar, su disposición y la cantidad de veces
                que debe aparecer en tu contenido en base a los términos que usa
                tu competencia.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Si eres redactores o copywriter y quieres obtener visibilidad en
                Google, es imprescindible para ti.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-3" class="feature odd">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_3_prominencia_semantica.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Prominencia semántica: lleva tu marketing de contenidos a otro
                  nivel
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Conoce qué keywords usar, su disposición y la cantidad de
                  veces que debe aparecer en tu contenido en base a los términos
                  que usa tu competencia.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Si eres redactores o copywriter y quieres obtener visibilidad
                  en Google, es imprescindible para ti.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 3 -->
            <!-- Feature 4 -->
            <div class="item image" style="grid-column: 1; grid-row: 4">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_4_keyword_research.png"
                alt=""
              />
              <div class="shape left"></div>
            </div>
            <div class="item right" style="grid-column: 2; grid-row: 4">
              <h3 class="drl-Headline3"><?php getTranslation("
                Keyword research: encuentra las mejores palabras clave
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Descubre todas las palabras clave que tu usuario busca en Google
                y atrae tráfico cualificado a tu web.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Keyword research con búsquedas por país, tendencia de la keyword
                y una enorme base de datos de palabras clave a tu disposición.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-4" class="feature">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_4_keyword_research.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item right">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Keyword research: encuentra las mejores palabras clave
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Descubre todas las palabras clave que tu usuario busca en
                  Google y atrae tráfico cualificado a tu web.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Keyword research con búsquedas por país, tendencia de la
                  keyword y una enorme base de datos de palabras clave a tu
                  disposición.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 4 -->
            <!-- Feature 5 -->
            <div class="item image" style="grid-column: 2; grid-row: 5">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_5_pagerank_interno.png"
                alt=""
              />
              <div class="shape"></div>
            </div>
            <div class="item" style="grid-column: 1; grid-row: 5">
              <h3 class="drl-Headline3"><?php getTranslation("
                Pagerank interno: distribuye bien la fuerza SEO de tu página
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Aprende a distribuir la fuerza interna de tu web de la forma
                óptima para posicionar en Google lo que tú quieras.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Aprende a manejar la autoridad o link juice y dile a Google en
                todo momento qué es lo que debe posicionar en tu web.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-5" class="feature odd">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_5_pagerank_interno.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Pagerank interno: distribuye bien la fuerza SEO de tu página
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Aprende a distribuir la fuerza interna de tu web de la forma
                  óptima para posicionar en Google lo que tú quieras.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Aprende a manejar la autoridad o link juice y dile a Google en
                  todo momento qué es lo que debe posicionar en tu web.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 5 -->
            <!-- Feature 6 -->
            <div class="item image" style="grid-column: 1; grid-row: 6">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_6_enlazado_interno.png"
                alt=""
              />
              <div class="shape left"></div>
            </div>
            <div class="item right" style="grid-column: 2; grid-row: 6">
              <h3 class="drl-Headline3"><?php getTranslation("
                Enlazado interno: nunca antes habías visto de manera visual cómo
                está enlazada tu web
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Radiografía tu arquitectura web, o la de tu competencia, con el
                mapa de enlaces internos.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Observa "cómo es una página por dentro a ojos de Google" y
                mejora su estructura interna con esta función.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-6" class="feature">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_6_enlazado_interno.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item right">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Enlazado interno: nunca antes habías visto de manera visual
                  cómo está enlazada tu web
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Radiografía tu arquitectura web, o la de tu competencia, con
                  el mapa de enlaces internos.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Observa "cómo es una página por dentro a ojos de Google" y
                  mejora su estructura interna con esta función.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 6 -->
            <!-- Feature 7 -->
            <div class="item image" style="grid-column: 2; grid-row: 7">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_7_canibalizaciones.png"
                alt=""
              />
              <div class="shape"></div>
            </div>
            <div class="item" style="grid-column: 1; grid-row: 7">
              <h3 class="drl-Headline3"><?php getTranslation("
                Canibalizaciones: aprende a resolverlas de forma sencilla
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Deja tu web limpia de canibalizaciones que perjudican el
                posicionamiento de tus textos.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Encuentra todas tus canibalizaciones de forma precisa con
                DinoRANK y mejora el ranking de tus contenidos.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-7" class="feature odd">
              <div class="particle"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_7_canibalizaciones.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Canibalizaciones: aprende a resolverlas de forma sencilla
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Deja tu web limpia de canibalizaciones que perjudican el
                  posicionamiento de tus textos.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Encuentra todas tus canibalizaciones de forma precisa con
                  DinoRANK y mejora el ranking de tus contenidos.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 7 -->
            <!-- Feature 8 -->
            <div class="item image" style="grid-column: 1; grid-row: 8">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_8_visbilidad.png"
                alt=""
              />
              <div class="shape left"></div>
            </div>
            <div class="item right" style="grid-column: 2; grid-row: 8">
              <h3 class="drl-Headline3"><?php getTranslation("
                Visibilidad: descubre las keywords que posiciona tu competencia
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Tus rivales ya no tendrán secretos para ti.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Obtén una gráfica de visibilidad y un listado de las palabras
                clave que ya está posicionando tu competencia para adelantarlos
                en Google.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-8" class="feature">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_8_visbilidad.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item right">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Visibilidad: descubre las keywords que posiciona tu
                  competencia
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Tus rivales ya no tendrán secretos para ti.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Obtén una gráfica de visibilidad y un listado de las palabras
                  clave que ya está posicionando tu competencia para
                  adelantarlos en Google.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 8 -->
            <!-- Feature 9 -->
            <div class="item image" style="grid-column: 2; grid-row: 9">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_9_thin_content.png"
                alt=""
              />
              <div class="shape"></div>
            </div>
            <div class="item" style="grid-column: 1; grid-row: 9">
              <h3 class="drl-Headline3"><?php getTranslation("
                Thin content: detecta las URLs sin tráfico de tu site
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Encuentra rápido el contenido que a Google "no le gusta" de tu
                página.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Una vez lo detectes podrás trabajar sobre él, mejorándolo o
                eliminándolo y así aumentar el tráfico que es capaz de captar.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-9" class="feature odd">
              <div class="particle"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_9_thin_content.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Thin content: detecta las URLs sin tráfico de tu site
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Encuentra rápido el contenido que a Google "no le gusta" de tu
                  página.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Una vez lo detectes podrás trabajar sobre él, mejorándolo o
                  eliminándolo y así aumentar el tráfico que es capaz de captar.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 9 -->
            <!-- Feature 10 -->
            <div class="item image" style="grid-column: 1; grid-row: 10">
              <img
                style="max-width: 100%; height: auto"
                src="assets/images/home_dinorank_feature_10_gestion_enlazado_externo.png"
                alt=""
              />
              <div class="shape left"></div>
            </div>
            <div class="item right" style="grid-column: 2; grid-row: 10">
              <h3 class="drl-Headline3"><?php getTranslation("
                Gestión de enlazado externo: controla todos tus enlaces o
                backlinks
              "); ?></h3>
              <p class="drl-Text2"><?php getTranslation("
                Anota todos los enlaces que apuntan hacia tu sitio web para
                controlar tu estrategia de link building.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Obtén estadísticas de tus enlaces entrantes, perfil de anchor
                text y además la herramienta te avisa si alguien te retira un
                enlace.
              "); ?></p>
              <div class="btn-container">
                <a href="" class="drl-btn drl-btn-outlined">
                  <span><?php getTranslation("Ver más"); ?></span>
                  
                </a>
              </div>
            </div>
            <div id="df-f-10" class="feature">
              <div class="particles"></div>
              <div class="item image">
                <img
                  style="max-width: 100%; height: auto"
                  src="assets/images/home_dinorank_feature_10_gestion_enlazado_externo.png"
                  alt=""
                />
                <div class="shape"></div>
              </div>
              <div class="item right">
                <h3 class="drl-Headline3"><?php getTranslation("
                  Gestión de enlazado externo: controla todos tus enlaces o
                  backlinks
                "); ?></h3>
                <p class="drl-Text2"><?php getTranslation("
                  Anota todos los enlaces que apuntan hacia tu sitio web para
                  controlar tu estrategia de link building.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Obtén estadísticas de tus enlaces entrantes, perfil de anchor
                  text y además la herramienta te avisa si alguien te retira un
                  enlace.
                "); ?></p>
                <div class="btn-container">
                  <a href="" class="drl-btn drl-btn-outlined">
                    <span><?php getTranslation("Ver más"); ?></span>
                    
                    <img
                      src="assets/images/arrow-right-white.svg"
                      class="onhover"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <!-- End Feature 10 -->
          </div>
        </div>
      </section>
      <section id="intro-content-badge">
        <div class="container">
          <div class="boxes">
            <div class="box box-1">
              <h2 class="drl-Headline6"><?php getTranslation("115.000 keywords trackeadas"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Son más que la cantidad máxima de abejas que tiene una colmena
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-2">
              <h2 class="drl-Headline6"><?php getTranslation("
                34 millones de URLs almacenadas activas
              "); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Esto es la misma cantidad de personas que se conectan a Internet
                desde el móvil en España
              "); ?></p>
            </div>
            <div class="separator"></div>
            <div class="box box-3">
              <h2 class="drl-Headline6"><?php getTranslation("5.000 dominios activos"); ?></h2>
              <p class="drl-Text2"><?php getTranslation("
                Esto es cerca del doble que las estrellas visibles en el cielo
                nocturno
              "); ?></p>
            </div>
          </div>
        </div>
      </section>
      <section id="opinions-content">
        <div class="wrapper">
          <h3 id="op-h3-1" class="drl-Headline3"><?php getTranslation("
            Esto es lo que opina de DinoRANK la plana mayor del SEO
          "); ?></h3>
          <p id="op-p-1" class="drl-Text2"><?php getTranslation("
            Esto es lo que dicen algunos de los profesionales más reputados del
            mundo del SEO sobre DinoRANK.
          "); ?></p>
          <div class="opinions">
            <div class="opinions-row">
              <!-- ITEM 1 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/alvaro_pena.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Alvaro Peña"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Co-CEO de iSocialWeb"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Pocas herramientas dan más por menos. Una excelente
                    herramienta all in one.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 1 -->
              <!-- ITEM 2 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/alex_navarro.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Alex Navarro"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Leyenda SEO desde 2003"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK es una herramienta creada por grandes
                    profesionales en activo del mundo SEO.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 2 -->
              <!-- ITEM 3 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/esteva_castells.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Esteva Castells"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Global SEO Manager en Adevinta"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK acerca los datos de rastreo e indexación a
                    cualquier público, democratiza el SEO.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 3 -->
            </div>
            <!-- ITEM 1 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/alvaro_pena.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Alvaro Peña"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Co-CEO de iSocialWeb"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Pocas herramientas dan más por menos. Una excelente
                  herramienta all in one.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 1 -->
            <!-- ITEM 2 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/alex_navarro.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Alex Navarro"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Leyenda SEO desde 2003"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK es una herramienta creada por grandes profesionales
                  en activo del mundo SEO.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 2 -->
            <!-- ITEM 3 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/esteva_castells.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Esteva Castells"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Global SEO Manager en Adevinta"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK acerca los datos de rastreo e indexación a cualquier
                  público, democratiza el SEO.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 3 -->
            <div class="opinions-row">
              <!-- ITEM 4 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/juan_gonzalez.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Juan González"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de Useo"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Sencilla y completa que simplifica el trabajo de SEO. Su
                    WDF*DF es la más útil del mercado.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 4 -->
              <!-- ITEM 5 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/marquez.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Marquez"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de Prensarank"); ?></p>"CEO de Prensarank"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “La verdad es que DinoRANK me ha sorprendido, sobre todo su
                    modulo de enlazado interno.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 5 -->
              <!-- ITEM 6 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/jesus_madurga.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Jesús Madurga"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de NeoAttack"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Llevamos todo el tracking de posiciones de nuestros
                    clientes con DinoRANK, es imprescindible.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 6 -->
            </div>
            <!-- ITEM 4 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/juan_gonzalez.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Juan González"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de Useo"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Sencilla y completa que simplifica el trabajo de SEO. Su
                  WDF*DF es la más útil del mercado.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 4 -->
            <!-- ITEM 5 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/marquez.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Marquez"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de Prensarank"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “La verdad es que DinoRANK me ha sorprendido, sobre todo su
                  modulo de enlazado interno.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 5 -->
            <!-- ITEM 6 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/jesus_madurga.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Jesús Madurga"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de NeoAttack"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Llevamos todo el tracking de posiciones de nuestros clientes
                  con DinoRANK, es imprescindible.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 6 -->
            <div class="opinions-row">
              <!-- ITEM 7 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/madre_seoperiora.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Madre Seoperiora"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO en Oorganika"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Cuenta con funcionalidades avanzadas pero explicadas de
                    forma que todos pueden entender.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 7 -->
              <!-- ITEM 8 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/mijael.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Mijael"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("SEO nichero Amazon afiliados"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “La relación calidad/precio que consigues con DinoRANK no la
                    consigas con ninguna otra.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 8 -->
              <!-- ITEM 9 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/borja_aranda.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Borja Aranda"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK es sin duda la herramienta All In One más versátil
                    y económica del mercado.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 9 -->
            </div>
            <!-- ITEM 7 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/madre_seoperiora.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Madre Seoperiora"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO en Oorganika"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Cuenta con funcionalidades avanzadas pero explicadas de forma
                  que todos pueden entender.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 7 -->
            <!-- ITEM 8 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/mijael.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Mijael"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("SEO nichero Amazon afiliados"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “La relación calidad/precio que consigues con DinoRANK no la
                  consigas con ninguna otra.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 8 -->
            <!-- ITEM 9 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/borja_aranda.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Borja Aranda"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK es sin duda la herramienta All In One más versátil y
                  económica del mercado.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 9 -->
            <div class="opinions-row">
              <!-- ITEM 10 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/raul_aranega.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Raúl Aránega"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO en APPYWEB y LinkContentPro"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Herramienta ágil que simplifica mucho el trabajo diario que
                    hacemos todos los SEOs.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 10 -->
              <!-- ITEM 11 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/jose_lab.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Jose Lab"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Me ha sorprendido su versatilidad, tenerlo todo en una sola
                    suite es genial. Es muy intuitiva.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 11 -->
              <!-- ITEM 12 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/ivan_larizgoitia.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Iván Larizgoitia"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de Dosmedia"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Me parece increíble todo lo que ofrece DinoRANK por ese
                    precio. Está a otro nivel.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 12 -->
            </div>
            <!-- ITEM 10 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/raul_aranega.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Raúl Aránega"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO en APPYWEB y LinkContentPro"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Herramienta ágil que simplifica mucho el trabajo diario que
                  hacemos todos los SEOs.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 10 -->
            <!-- ITEM 11 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/jose_lab.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("<?php getTranslation("Jose Lab"); ?>"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Me ha sorprendido su versatilidad, tenerlo todo en una sola
                  suite es genial. Es muy intuitiva.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 11 -->
            <!-- ITEM 12 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/ivan_larizgoitia.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Iván Larizgoitia"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de Dosmedia"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Me parece increíble todo lo que ofrece DinoRANK por ese
                  precio. Está a otro nivel.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 12 -->
            <div class="opinions-row">
              <!-- ITEM 13 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/luis_revuelto.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Luis Revuelto"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Práctica, intuitiva, sin fuegos artificiales. Únicamente
                    las funcionalidades imprescindibles.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 13 -->
              <!-- ITEM 14 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/lucia_y_el_seo.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Lucía y el SEO"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Consultora SEO freelance"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Lo que más me gusta de DinoRANKes que me ayuda a mejorar el
                    enlazado interno de mi web.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 14 -->
              <!-- ITEM 15 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/clara_soteras.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Clara Soteras"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("SEO en la TV pública catalana"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Te permite llevar el SEO de tu proyecto al completo y está
                    pensado para principiantes y expertos.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 15 -->
            </div>
            <!-- ITEM 13 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/luis_revuelto.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Luis Revuelto"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Consultor SEO freelance"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Práctica, intuitiva, sin fuegos artificiales. Únicamente las
                  funcionalidades imprescindibles.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 13 -->
            <!-- ITEM 14 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/lucia_y_el_seo.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Lucía y el SEO"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Consultora SEO freelance"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Lo que más me gusta de DinoRANKes que me ayuda a mejorar el
                  enlazado interno de mi web.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 14 -->
            <!-- ITEM 15 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/clara_soteras.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Clara Soteras"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("SEO en la TV pública catalana"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Te permite llevar el SEO de tu proyecto al completo y está
                  pensado para principiantes y expertos.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 15 -->
            <div class="opinions-row">
              <!-- ITEM 16 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/andres_kloster.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Andres Kloster"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de Agencia Eleven"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Hemos usado DinoRANK en Agencia Eleven y no hay nada con
                    mejor relación calidad precio.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 16 -->
              <!-- ITEM 17 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/alfonso_ojeda.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Alfonso Ojeda"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("SEO black hat nichero"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK es la herramienta que me hubiera gustado que
                    existiera cuando empecé.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 17 -->
              <!-- ITEM 18 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/bruno_ramos.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Bruno Ramos"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("Experto en Google Adsense"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Tiene todo lo que necesitas para hacer crecer tus proyectos
                    sin complicaciones. Y encima lo pone fácil, visual y
                    económico.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 18 -->
              <!------->
            </div>
            <!-- ITEM 16 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/andres_kloster.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Andres Kloster"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de Agencia Eleven"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Hemos usado DinoRANK en Agencia Eleven y no hay nada con
                  mejor relación calidad precio.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 16 -->
            <!-- ITEM 17 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/alfonso_ojeda.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Alfonso Ojeda"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("SEO black hat nichero"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK es la herramienta que me hubiera gustado que
                  existiera cuando empecé.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 17 -->
            <!-- ITEM 18 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/bruno_ramos.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Bruno Ramos"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Experto en Google Adsense"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Tiene todo lo que necesitas para hacer crecer tus proyectos
                  sin complicaciones. Y encima lo pone fácil, visual y
                  económico.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 18 -->
            <!------->
            <div class="opinions-row">
              <!-- ITEM 19 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/emilio_garcia.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Emilio García"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("SEO y webmaster en CampamentoWeb"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK es la mejor herramienta SEO en relación calidad
                    precio del mercado.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 19 -->
              <!-- ITEM 20 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/marta_romera.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Marta Romera"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("
                    Consultora SEO de Internet República
                  "); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “DinoRANK facilita la detección de oportunidades a golpe de
                    clic y las funcionalidades están muy bien explicadas.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 20 -->
              <!-- ITEM 21 -->
              <div class="opinion-item">
                <div class="avatar-container">
                  <img src="assets/images/people/fernando_macia.png" alt="" />
                </div>
                <div class="content">
                  <h5 class="drl-Headline5"><?php getTranslation("Fernando Macia"); ?></h5>
                  <p class="drl-Caption3"><?php getTranslation("CEO de Human Level"); ?></p>
                  <p class="drl-Text3"><?php getTranslation("
                    “Me encanta cómo muestra la evolución de posiciones de las
                    keywords en relación a la competencia.”
                  "); ?></p>
                </div>
              </div>
              <!-- END ITEM 21 -->
            </div>
            <!-- ITEM 19 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/emilio_garcia.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Emilio García"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("SEO y webmaster en CampamentoWeb"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK es la mejor herramienta SEO en relación calidad
                  precio del mercado.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 19 -->
            <!-- ITEM 20 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/marta_romera.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Marta Romera"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("Consultora SEO de Internet República"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “DinoRANK facilita la detección de oportunidades a golpe de
                  clic y las funcionalidades están muy bien explicadas.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 20 -->
            <!-- ITEM 21 -->
            <div class="opinion-item">
              <div class="avatar-container">
                <img src="assets/images/people/fernando_macia.png" alt="" />
              </div>
              <div class="content">
                <h5 class="drl-Headline5"><?php getTranslation("Fernando Macia"); ?></h5>
                <p class="drl-Caption3"><?php getTranslation("CEO de Human Level"); ?></p>
                <p class="drl-Text3"><?php getTranslation("
                  “Me encanta cómo muestra la evolución de posiciones de las
                  keywords en relación a la competencia.”
                "); ?></p>
              </div>
            </div>
            <!-- END ITEM 21 -->
          </div>
        </div>
      </section>
      <section id="testimonials">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("Testimonios de usuarios de DinoRANK"); ?></h2>
          <p class="drl-Text2"><?php getTranslation("
            Opiniones de clientes que usan DinoRANK en su día a día para mejorar
            su visibilidad.
          "); ?></p>
          <div class="content" id="masonry-effect">
            <!-- ITEM 1 -->
            <div class="item" id="testimonial1">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                Es imposible hacer SEO sin los datos que DinoRank proporciona.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Ha optimizado mucho nuestro trabajo en la agencia, tanto a la
                hora de hacer SEO on Page, como para ver el progreso de nuestros
                clientes y el rendimiento de cada recurso.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                La mayor ventaja es poder ver todos los problemas de una página
                con un sencillo análisis. También nos ayuda a hacer seguimiento
                del posicionamiento de las palabras clave y a conocer con
                detalle el CPC y la competencia de cada palabra clave.
              "); ?></p>
              <div class="profile">
                <div class="image-container">
                  <img src="assets/images/people/maria_ponsada.png" alt="" />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6"><?php getTranslation("María Ponsada"); ?></p>
                  <p class="drl-Caption3"><?php getTranslation("CEO Seoriginalsweb.com"); ?></p>
                </div>
              </div>
            </div>
            <!-- END ITEM 1 -->
            <!-- ITEM 2 -->
            <div class="item" id="testimonial2">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                La gran virtud de DinoRANK es que es una herramienta SEO muy
                económica pero también muy completa.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Cuando inicias un proyecto intentas contener los gastos usando
                mil y una herramientas gratuitas para analizar las métricas de
                tu web. Con DinoRANK, no tengo que saltar de herramienta en
                herramienta.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Su Keyword research ha cambiado mi manera de afrontar la
                redacción de los posts. La cantidad de palabras clave derivadas
                y la rapidez con las que se logran, me enamoró desde el primer
                momento.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                La funcionalidad que más me ha sorprendido es el Tracking de
                posiciones. Es muy útil para controlar la evolución de mis
                keywords y ver cómo reacciona la competencia.
              "); ?></p>
              <div class="profile">
                <div class="image-container">
                  <img
                    src="assets/images/people/francisco_marhuenda_sala.png"
                    alt=""
                  />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6"><?php getTranslation("Francisco Marhuenda Sala"); ?></p>
                  <p class="drl-Caption3"><?php getTranslation("Webmaster laguíadelchollo.com"); ?></p>
                </div>
              </div>
            </div>
            <!-- END ITEM 2 -->
            <div class="column-items" id="ts-column-1">
              <!-- ITEM 1 -->
              <div class="item" id="testimonial1">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  Es imposible hacer SEO sin los datos que DinoRank proporciona.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Ha optimizado mucho nuestro trabajo en la agencia, tanto a la
                  hora de hacer SEO on Page, como para ver el progreso de
                  nuestros clientes y el rendimiento de cada recurso.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  La mayor ventaja es poder ver todos los problemas de una
                  página con un sencillo análisis. También nos ayuda a hacer
                  seguimiento del posicionamiento de las palabras clave y a
                  conocer con detalle el CPC y la competencia de cada palabra
                  clave.
                "); ?></p>
                <div class="profile">
                  <div class="image-container">
                    <img src="assets/images/people/maria_ponsada.png" alt="" />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6"><?php getTranslation("María Ponsada"); ?></p>
                    <p class="drl-Caption3"><?php getTranslation("CEO Seoriginalsweb.com"); ?></p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 1 -->
              <!-- ITEM 4 -->
              <div class="item" id="testimonial4">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  Mi proyecto ha crecido en tráfico, autoridad y posicionamiento
                  en palabras clave superimportantes para mi negocio. A pesar de
                  haber trabajado con otras, la magia de WDF*DF y prominencia
                  para saber, en un solo vistazo, lo que deben tener mis
                  artículos a nivel de estructura es brutal y no necesito tener
                  profundos conocimientos SEO.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Al principio dudé por ser menos conocida que Semrush o Ahrefs
                  pero he conseguido rankear en los primeros lugares de Google
                  para KW con intencionalidades de búsqueda muy competidas.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  DinoRANK es intuitiva. Te dice en un solo vistazo la
                  estructura que deberían tener tus artículos para posicionar
                  por encima de la competencia.
                "); ?></p>
              </div>
              <!-- END ITEM 4 -->
            </div>
            <!-- ITEM 3 -->
            <div class="item" id="testimonial3">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                Gracias a DinoRANK, he aprendido a distribuir el PageRank y los
                niveles de clicks para dar fuerza a las partes que más me
                interesan de mi página web. Antes no sabía lo importante que es
                la distribución de un buen interlinking dentro de mis proyectos.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Reviso continuamente el tracking de posiciones para ver como
                aumenta la visibilidad de mi web gracias al balance de mejora
                que he implementado con esta Suite. He aumentado el
                posicionamiento de mi página web para las palabras clave más
                fuertes y más importantes de mis proyectos.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                DinoRANK me ha ayudado de forma muy visual e intuitiva a
                desarrollar una mejora del SEO On Page de mi web, a enriquecer
                los textos gracias al estudio de la competencia y hacer una
                auditoría de 0 a 100 que nada tiene que envidiar a Crawlers y/o
                herramientas SEO de precios bastante más elevados.
              "); ?></p>
              <div class="profile">
                <div class="image-container">
                  <img src="assets/images/people/sergio_cordero.png" alt="" />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6"><?php getTranslation("Sergio Cordero"); ?></p>
                  <p class="drl-Caption3"><?php getTranslation("sergiocordero.net"); ?></p>
                </div>
              </div>
            </div>
            <!-- END ITEM 3 -->
            <!-- ITEM 4 -->
            <div class="item" id="testimonial4">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                Mi proyecto ha crecido en tráfico, autoridad y posicionamiento
                en palabras clave superimportantes para mi negocio. A pesar de
                haber trabajado con otras, la magia de WDF*DF y prominencia para
                saber, en un solo vistazo, lo que deben tener mis artículos a
                nivel de estructura es brutal y no necesito tener profundos
                conocimientos SEO.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Al principio dudé por ser menos conocida que Semrush o Ahrefs
                pero he conseguido rankear en los primeros lugares de Google
                para KW con intencionalidades de búsqueda muy competidas.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                DinoRANK es intuitiva. Te dice en un solo vistazo la estructura
                que deberían tener tus artículos para posicionar por encima de
                la competencia.
              "); ?></p>
            </div>
            <!-- END ITEM 4 -->
            <div id="ts-column-2" class="column-items">
              <!-- ITEM 2 -->
              <div class="item" id="testimonial2">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  La gran virtud de DinoRANK es que es una herramienta SEO muy
                  económica pero también muy completa.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Cuando inicias un proyecto intentas contener los gastos usando
                  mil y una herramientas gratuitas para analizar las métricas de
                  tu web. Con DinoRANK, no tengo que saltar de herramienta en
                  herramienta.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Su Keyword research ha cambiado mi manera de afrontar la
                  redacción de los posts. La cantidad de palabras clave
                  derivadas y la rapidez con las que se logran, me enamoró desde
                  el primer momento.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  La funcionalidad que más me ha sorprendido es el Tracking de
                  posiciones. Es muy útil para controlar la evolución de mis
                  keywords y ver cómo reacciona la competencia.
                "); ?></p>
                <div class="profile">
                  <div class="image-container">
                    <img
                      src="assets/images/people/francisco_marhuenda_sala.png"
                      alt=""
                    />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6"><?php getTranslation("Francisco Marhuenda Sala"); ?></p>
                    <p class="drl-Caption3"><?php getTranslation("Webmaster laguíadelchollo.com"); ?></p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 2 -->
              <!-- ITEM 5 -->
              <div class="item" id="testimonial5">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  Tengo varios proyectos, y me ha sido muchísimo más fácil
                  encontrar nuevas keywords para posicionar y saber por las que
                  ya estaba posicionando.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Hago keyword research para mis proyectos y de mis clientas
                  casi a diario. La auditoría la uso muchísimo tanto para
                  posibles clientes, como para controlar mis proyectos. Y la
                  función de visibilidad es genial. Poder ver keywords de otras
                  webs sin tener acceso a su search console. Mi web principal
                  está subiendo visitas y me estoy posicionando en keywords muy
                  interesantes. He comenzado un proyecto poco y ya está
                  consiguiendo tráfico orgánico interesante, sin haber invertido
                  en linkbuilding, solo con optimización de contenidos.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Con DinoRANK es muy fácil hacer keyword research, la auditoría
                  completa del sitio y la visibilidad.
                "); ?></p>
              </div>
              <!-- END ITEM 5 -->
            </div>
            <!-- ITEM 5 -->
            <div class="item" id="testimonial5">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                Tengo varios proyectos, y me ha sido muchísimo más fácil
                encontrar nuevas keywords para posicionar y saber por las que ya
                estaba posicionando.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Hago keyword research para mis proyectos y de mis clientas casi
                a diario. La auditoría la uso muchísimo tanto para posibles
                clientes, como para controlar mis proyectos. Y la función de
                visibilidad es genial. Poder ver keywords de otras webs sin
                tener acceso a su search console. Mi web principal está subiendo
                visitas y me estoy posicionando en keywords muy interesantes. He
                comenzado un proyecto poco y ya está consiguiendo tráfico
                orgánico interesante, sin haber invertido en linkbuilding, solo
                con optimización de contenidos.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Con DinoRANK es muy fácil hacer keyword research, la auditoría
                completa del sitio y la visibilidad.
              "); ?></p>
            </div>
            <!-- END ITEM 5 -->
            <!-- ITEM 6 -->
            <div class="item" id="testimonial6">
              <div class="comilla"></div>
              <p class="drl-Text2"><?php getTranslation("
                Probé DinoRANK para 3 de mis páginas web, dos de ellas son
                nichos y una, mi proyecto principal.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                No esperaba que por ese precio me diera tanto. Al principio dudé
                de si sería buena, pero tras probar Semrush, Ahrefs,
                Ubersuggest, ninguna me ha enamorado como Dinorank.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                La uso a diario para hacer seguimiento de las keywords. La
                función de prominencia semántica ha sido un gran sorpresa, me ha
                permitido escalar posiciones muy rápido y me ha generado un
                incremento en los ingresos de la WEB.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Ver a golpe de click toda la estructura y fuerza interna de la
                página, poder realizar de manera sencilla una auditoría de SEO
                on Page o detectar canibalizaciones... me parece brutal.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Además, es la primera suite SEO todo en uno que he probado que
                te hace sentir en su comunidad y partícipe del proyecto, y lo
                valoro mucho.
              "); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Probé un mes y tengo claro que ya no me voy de Dinorank. Es una
                herramienta sencilla, completa, a bajo coste y que te hace
                llevar tu proyecto a dónde quieras, facilitándote la vida.
              "); ?></p>
            </div>
            <!-- END ITEM 6 -->
            <div id="ts-column-3" class="column-items">
              <!-- ITEM 3 -->
              <div class="item" id="testimonial3">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  Gracias a DinoRANK, he aprendido a distribuir el PageRank y
                  los niveles de clicks para dar fuerza a las partes que más me
                  interesan de mi página web. Antes no sabía lo importante que
                  es la distribución de un buen interlinking dentro de mis
                  proyectos.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Reviso continuamente el tracking de posiciones para ver como
                  aumenta la visibilidad de mi web gracias al balance de mejora
                  que he implementado con esta Suite. He aumentado el
                  posicionamiento de mi página web para las palabras clave más
                  fuertes y más importantes de mis proyectos.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  DinoRANK me ha ayudado de forma muy visual e intuitiva a
                  desarrollar una mejora del SEO On Page de mi web, a enriquecer
                  los textos gracias al estudio de la competencia y hacer una
                  auditoría de 0 a 100 que nada tiene que envidiar a Crawlers
                  y/o herramientas SEO de precios bastante más elevados.
                "); ?></p>
                <div class="profile">
                  <div class="image-container">
                    <img src="assets/images/people/sergio_cordero.png" alt="" />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6"><?php getTranslation("Sergio Cordero"); ?></p>
                    <p class="drl-Caption3"><?php getTranslation("sergiocordero.net"); ?></p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 3 -->
              <!-- ITEM 6 -->
              <div class="item" id="testimonial6">
                <div class="comilla"></div>
                <p class="drl-Text2"><?php getTranslation("
                  Probé DinoRANK para 3 de mis páginas web, dos de ellas son
                  nichos y una, mi proyecto principal.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  No esperaba que por ese precio me diera tanto. Al principio
                  dudé de si sería buena, pero tras probar Semrush, Ahrefs,
                  Ubersuggest, ninguna me ha enamorado como Dinorank.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  La uso a diario para hacer seguimiento de las keywords. La
                  función de prominencia semántica ha sido un gran sorpresa, me
                  ha permitido escalar posiciones muy rápido y me ha generado un
                  incremento en los ingresos de la WEB.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Ver a golpe de click toda la estructura y fuerza interna de la
                  página, poder realizar de manera sencilla una auditoría de SEO
                  on Page o detectar canibalizaciones... me parece brutal.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Además, es la primera suite SEO todo en uno que he probado que
                  te hace sentir en su comunidad y partícipe del proyecto, y lo
                  valoro mucho.
                "); ?></p>
                <p class="drl-Text2"><?php getTranslation("
                  Probé un mes y tengo claro que ya no me voy de Dinorank. Es
                  una herramienta sencilla, completa, a bajo coste y que te hace
                  llevar tu proyecto a dónde quieras, facilitándote la vida.
                "); ?></p>
              </div>
              <!-- END ITEM 6 -->
            </div>
          </div>
          <div class="bottom">
            <a href="testimonials.html" class="drl-btn"><?php getTranslation("
              Ver más opiniones de usuarios
            "); ?></a>
          </div>
        </div>
        <div class="bottom">
          <a href="testimonials.html" class="drl-btn"><?php getTranslation("
            Ver más opiniones de usuarios
          "); ?></a>
        </div>
      </section>
      <section id="plans-prices">
        <div class="wrapper">
          <h2 id="pp-h2-1" class="drl-Headline2"><?php getTranslation("Planes y precios"); ?></h2>
          <p id="pp-p-1" class="drl-Text1"><?php getTranslation("
            Todos nuestros planes incluyen las funcionalidades que más
            necesitas:
          "); ?></p>
          <p id="pp-p-2" class="drl-Text1"><?php getTranslation("
            Dominios ilimitados, un mínimo de <b>400 palabras clave</b> para
            trackear, análisis y
            <b>gráfica de la competencia, keyword research</b> e
            <b>informes para tus clientes.</b>
          "); ?></p>
          <p id="pp-p-3" class="drl-Text1"><?php getTranslation("
            Seas grande o pequeño, tenemos un plan para ti más económico que el
            que vas a encontrar en la competencia.
          "); ?></p>
          <p id="pp-p-4" class="drl-Caption1"><?php getTranslation("
            Paga mes a mes o paga anualmente y <u>ahorra hasta un 20%</u>
          "); ?></p>
          <div class="plan-picker">
            <a href="" class="picker-btn left selected"><span><?php getTranslation("Mensual"); ?></span></a>
            <a href="" class="picker-btn right"><span><?php getTranslation("Anual"); ?></span></a>
          </div>
          <div class="top-dots"></div>
          <div class="plans" id="monthly">
            <!-- ITEM STARTER -->
            <div class="item tier1" id="monthly-starter">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Starter"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Ideal para nicheros, pequeños emprendedores y redactores
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("25,00 €<span> /mes</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn-outlined">
                <span><?php getTranslation("Contratar"); ?></span>
                
                
              </a>
            </div>
            <!-- END ITEM STARTER -->
            <!-- ITEM PRO -->
            <div class="item tier2 featured" id="monthly-pro">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Pro"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Pensado para consultores, marketing managers y diseñadores web
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("42,00 €<span> /mes</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn">
                <span><?php getTranslation("Contratar"); ?></span>                
              </a>
            </div>
            <!-- END ITEM PRO -->
            <!-- ITEM BUSINESS -->
            <div class="item tier3" id="monthly-business">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Business"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Perfecto para agencias SEO y de marketing y grandes ecommerce
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("68,99 €<span> /mes</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn-outlined">
                <span><?php getTranslation("Contratar"); ?></span>
                
                
              </a>
            </div>
            <!-- END ITEM BUSINESS -->
          </div>
          <div class="plans" id="yearly">
            <!-- ITEM STARTER -->
            <div class="item tier1" id="monthly-starter">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Starter"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Ideal para nicheros, pequeños emprendedores y redactores
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("25,00 €<span> /año</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn-outlined">
                <span><?php getTranslation("Contratar"); ?></span>
                
                
              </a>
            </div>
            <!-- END ITEM STARTER -->
            <!-- ITEM PRO -->
            <div class="item tier2 featured" id="monthly-pro">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Pro"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Pensado para consultores, marketing managers y diseñadores web
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("42,00 €<span> /año</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn">
                <span><?php getTranslation("Contratar"); ?></span>                
              </a>
            </div>
            <!-- END ITEM PRO -->
            <!-- ITEM BUSINESS -->
            <div class="item tier3" id="monthly-business">
              <div class="header">
                <h3 class="drl-Headline2"><?php getTranslation("Plan Business"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Perfecto para agencias SEO y de marketing y grandes ecommerce
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("68,99 €<span> /año</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn-outlined">
                <span><?php getTranslation("Contratar"); ?></span>
                
                
              </a>
            </div>
            <!-- END ITEM BUSINESS -->
          </div>
          <div class="bottom-dots"></div>
          <div class="plan-chooser-container">
            <div class="side-figure"></div>
            <a href="" class="drl-btn drl-btn-b"
              ><?php getTranslation("COMPRUEBA QUE PLAN DE DINORANK ES PARA TI"); ?></a
            >
          </div>
        </div>
      </section>
      <section id="dinorank-helps">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("
            Dinos quién eres y te diremos cómo DinoRANK te puede ayudar
          "); ?></h2>
          <div class="work-picker">
            <a href="" id="wp-0" class="picker-btn selected"><?php getTranslation("Consultor SEO"); ?></a>
            <a href="" id="wp-1" class="picker-btn"><?php getTranslation("Nichero"); ?></a>
            <a href="" id="wp-2" class="picker-btn"><?php getTranslation("Emprendedor"); ?></a>
            <a href="" id="wp-3" class="picker-btn"><?php getTranslation("Agencia SEO"); ?></a>
          </div>
          <div class="content" id="content-seo">
            <p class="drl-Text1"><?php getTranslation("
              Si quieres mejorar el tráfico de tus clientes para que consigan más ingresos, DinoRANK es tu suite SEO.
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Cuesta 19,90 €/mes si contratas el plan anual, o 25 €/mes si prefieres contratarlo meses sueltos.             "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Si lo piensas, es bastante menos de lo que pagas por un café al día. 
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Y es que nuestro objetivo es que consigas vivir del SEO sin invertir mil horas en aprender y sin dejarte una pasta cada mes.
            "); ?></p>
          </div>
          <div class="content" id="content-seo-1">
            <p class="drl-Text1"><?php getTranslation("
              Consigue más tráfico para tus nichos y aumenta tus ingresos de Google Adsense y Amazon Afiliados con DinoRANK.
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Es una herramienta SEO todo en uno muy visual y fácil de entender, por eso te va a facilitar que escales posiciones y generes autoridad más rápido que otras herramientas."); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Y, además, si te suscribes todo el año a Dinorank pagarás mucho menos dinero de lo que pagarías por solo 3 meses de Semrush o Ahrefs.
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              No necesitas más para monetizar tus nichos.
            "); ?></p>
          </div>
          <div class="content" id="content-seo-2">
            <p class="drl-Text1"><?php getTranslation("
              Si eres emprendedor o tienes un ecommerce, el tiempo y el dinero son tus recursos más valiosos.
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Trabajar el SEO lleva tiempo, por eso es importante que utilices herramientas fáciles de usar. Y ya sabes que las herramientas SEO son muy caras."); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Con DinoRANK tendrás todas las funcionalidades que necesitas como Tracking de Posiciones, Visibilidad y Competencia o Auditoría SEO, por menos de lo que te cuesta un café al día. 
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Porque nuestro objetivo es hacer el SEO accesible a todos los emprendedores digitales.
            "); ?></p>
          </div>
          <div class="content" id="content-seo-3">
            <p class="drl-Text1"><?php getTranslation("
              Si eres una agencia SEO, necesitas mejorar el posicionamiento web y ofrecer resultados a tus clientes.
            "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              DinoRANK te ayuda a conseguir para ellos más tráfico orgánico, escalar posiciones en las SERPs y mejorar su posicionamiento, porque es una herramienta SEO muy potente, económica y fácil de usar.             "); ?></p>
            <p class="drl-Text1"><?php getTranslation("
              Además, genera informes mensuales para que entregues a tus clientes muy sencillos de entender.
            "); ?></p>
          </div>
          <div class="cta-container">
            <a href="" class="drl-btn"
              ><?php getTranslation("MIRA LO QUE DINORANK PUEDE HACER POR TI"); ?></a
            >
          </div>
        </div>
      </section>
      <section id="about-founders">
        <div class="wrapper">
          <h2 class="drl-Headline2">Sobre los fundadores</h2>
          <p class="drl-Text1"><?php getTranslation("
            DinoRANK es el resultado de la unión de dos emprendedores
            incansables con hambre de crear un proyecto digital que deje huella
            en el universo.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            La unión de los dos ha hecho posible introducir en el mercado
            <b>un proyecto mucho más potente</b> y con mayor proyección que lo
            que hubiéramos podido crear cada uno por separado.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            La idea se creó en la primera reunión que tuvimos.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            No nos conocíamos y después de tres o cuatro horas de charla
            frenética, nació la herramienta SEO todo en uno cuyo objetivo
            principal es <b>hacer el SEO accesible para todo el mundo.</b>
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Detrás de este proyecto estamos Gabriel Aylagas y Dean Romero.
          "); ?></p>
          <div class="img-container">
            <img
              src="assets/images/home_dinorank_sobre_fundadores.png"
              alt=""
            />
          </div>
          <p class="drl-Text1"><?php getTranslation("
            Hemos contado muchas veces cómo nos conocimos y por qué estamos
            aquí.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Básicamente por la insistencia de Gaby, por mi talento para saber
            identificar las oportunidades y por el match ganador que hacemos los
            dos juntos.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Somos el contrapunto perfecto y tenemos un mismo objetivo:
            democratizar el SEO.
          "); ?></p>
          <div class="btn-wrapper">
            <a href="" class="drl-btn"><?php getTranslation("Así nació Dinorank"); ?></a>
          </div>
        </div>
      </section>
      <section id="dinorank-academy">
        <div class="wrapper">
          <div class="logo-container">
            <img src="assets/images/DinoRANK_Academy-Logo.png" alt="" />
          </div>
          <p class="drl-Text1"><?php getTranslation("
            Si formas parte de la comunidad de DinoRANK, te ofrecemos contenidos
            para que crezcas profesionalmente y seas más competitivo.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("Por eso hemos creado Dino Academy."); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Una academia donde encontrarás contenidos y masterclasses de SEO,
            para consultores SEO, nicheros, gestores de ecommerce, copywriters,
            redactores y diseñadores web.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            ¿Por qué hacemos contenidos sobre estos temas?
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Porque el grueso de usuarios de DinoRANK están comprendidos en
            alguna de esas disciplinas y además del software creamos formación
            para ellos.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Te damos las herramientas (software SEO) y la formación (cursos)
            necesaria para que alcances el éxito en tu negocio.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Suena bien, ¿verdad? Entra y echa un vistazo a los contenidos que
            hemos preparado.
          "); ?></p>
          <a href="" class="drl-btn"><?php getTranslation("ACCEDE A DINO ACADEMY"); ?></a>
        </div>
      </section>
      <section id="weekly-lives">
        <div class="wrapper">
          <h2 class="drl-Headline1"><?php getTranslation("Directos semanales"); ?></h2>
          <p class="drl-Text1"><?php getTranslation("
            En DinoRANK publicamos constantemente contenido para que nuestra
            comunidad de DinoRANKERS siga formándose y aprendiendo. Auditamos en
            directo las webs de nuestros usuarios o las de sus clientes para
            ayudarles a posicionar mejor.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Por eso, además del podcast y el blog, tenemos directos semanales.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Apúntate a nuestro canal de Youtube para estar al día.
          "); ?></p>
          <div class="img-container">
            <img
              src="assets/images/home_dinorank_weekly_lives_section.png"
              alt=""
            />
          </div>
        </div>
      </section>
      <section id="newsletter">
        <div class="wrapper">
          <div class="nw-particles-1"></div>
          <div class="nw-particles-2"></div>
          <div class="nw-particles-3"></div>
          <div class="content">
            <h2 class="drl-Headline2"><?php getTranslation("
              La newsletter del Dinosaurio Mecanizado
            "); ?></h2>
            <p class="drl-Text2"><?php getTranslation("
              Y si quieres recibir contenidos exclusivos y conocer a referentes
              y emprendedores del mundo digital,
              <b>apúntate a la newsletter que Dean escribe todos los días</b>
              compartiendo sus conocimientos y experiencias, sobre SEO,
              emprendimiento y mucho más.
            "); ?></p>
            <form>
              <input
                class="drl-Caption2"
                type="text"
                name="newsletterName"
                id=""
                placeholder="nombre"
              />
              <input
                class="drl-Caption2"
                type="email"
                name="newsletterEmail"
                id=""
                placeholder="Email"
              />
              <label class="container"
                ><span class="drl-Label1"
                  >He leído y acepto los términos y condiciones</span
                >
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
              <a href="" class="drl-btn drl-btn-b"><?php getTranslation("
                <span>Apúntate Ya</span>
              "); ?></a>
              <input
                type="submit"
                value=""
                id="newsletterSubmit"
                style="display: none"
              />
            </form>
            <div class="mobile-vulcan"></div>
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
    <script src="js/ctaEffect.js"></script>
    <script src="js/home.js"></script>
    <script src="js/priceSwitcher.js"></script>
  </body>
</html>