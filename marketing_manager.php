<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTranslation("Marketing Manager"); ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />

    <link rel="stylesheet" href="https://dinorank.com/css/estiloscss2.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/spacers.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/components/headers.css" />
    <link rel="stylesheet" href="css/components/footer.css" />
    <link rel="stylesheet" href="css/pages/marketing_manager.css" />
    <link rel="stylesheet" href="css/desktop/marketing_manager.css">
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
            Si eres Marketing Manager, consigue mejores resultados para tu estrategia de marketing
          "); ?></h1>
          <div class="btn-wrapper">
            <div style="position: relative;">
              <a id="cta-hero-btn" href="" class="drl-btn drl-btn-b cta"><?php getTranslation("hazte dinoranker"); ?></a>
            </div>
          </div>
          <div class="img-container">
            <img src="assets/images/dino_fire_2.png" alt="" />
          </div>
        </div>
      </section>
      <section id="data-1">
        <div class="wrapper">
          <p class="drl-Text1"><?php getTranslation("Como <b>marketing manager</b> tienes que planificar la mejor <b>estrategia digital</b> para alcanzar los objetivos del <b>plan de marketing</b> de tu compañía o agencia."); ?></p>
          <p class="drl-Text1"><?php getTranslation("Cada vez es más importante tener conocimientos de SEO porque la inversión en publicidad digital no deja de aumentar."); ?></p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text2"><?php getTranslation("
                Tienes que estar al día de <b>nuevas estrategias</b>, saber integrar distintas herramientas e interpretar datos.
              "); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text2"><?php getTranslation("
                El <b>marketing de contenidos</b> es vital para responder a la intención de búsqueda del usuario y generar tráfico.
              "); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
                <p class="drl-Text2"><?php getTranslation("
                    Conoce <b>qué keywords usa la competencia</b> y también los enlaces externos para generar más tráfico a tu web o ecommerce.
                "); ?></p>
                <div class="figure"></div>
              </div>
              <!-- END ITEM -->
          </div>
        </div>
      </section>
      <section id="data-2">
        <div class="wrapper">
          <h3 class="drl-Headline3"><?php getTranslation("
            Amplía tus conocimientos de optimización SEO, posicionamiento web y estrategia de contenidos con DinoRANK
          "); ?></h3>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text2"><?php getTranslation("
                Conoce la posición real de tu proyecto digital en Google y los datos de tu competencia con el <b>Tracking de Posiciones</b>.
              "); ?></p>
              <a href="" class="drl-btn"><?php getTranslation("Saber más"); ?></a>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text2"><?php getTranslation("
                Combina <b>keyword research y WDF*DF</b> para crear contenidos que respondan a la intención de búsqueda del usuario.
              "); ?></p>
              <a href="" class="drl-btn"><?php getTranslation("Saber más"); ?></a>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text2"><?php getTranslation("
                Obtén una lista de todos los errores a corregir y mejora el tráfico tu página web o ecommerce con la <b>Auditoría SEO on page</b>.
              "); ?></p>
              <a href="" class="drl-btn"><?php getTranslation("Saber más"); ?></a>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
          </div>
        </div>
      </section>
      <section id="plans-prices">
        <div class="wrapper">
          <h2 id="pp-h2-1" class="drl-Headline2"><?php getTranslation("Planes y precios"); ?></h2>
          <p id="pp-p-1" class="drl-Text1"><?php getTranslation("
            DinoRANK tiene 3 planes de precios en función de las necesidades de
            cada profesional y empresa.
          "); ?></p>
          <p id="pp-p-2" class="drl-Text1"><?php getTranslation("
            Si eres Marketing Manager, el <b>Plan Business</b> incluye todo lo que necesitas y es multiusuario.
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
                <h3 class="drl-Headline2"><?php getTranslation("Plan Business"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Perfecto para agencias SEO y de marketing y grandes ecommerce
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("68,99 €<span> /mes</span>"); ?></p>
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
                <h3 class="drl-Headline2"><?php getTranslation("Plan Pro"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Pensado para consultores, marketing managers y diseñadores web
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("42,00 €<span> /mes</span>"); ?></p>
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
                <h3 class="drl-Headline2"><?php getTranslation("Plan Business"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Perfecto para agencias SEO y de marketing y grandes ecommerce
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("68,99 €<span> /mes</span>"); ?></p>
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
                <h3 class="drl-Headline2"><?php getTranslation("Plan Pro"); ?></h3>
                <p class="drl-Text3"><?php getTranslation("
                  Pensado para consultores, marketing managers y diseñadores web
                "); ?></p>
              </div>
              <div class="price-box">
                <p class="drl-Headline2"><?php getTranslation("42,00 €<span> /mes</span>"); ?></p>
                <p class="drl-Text3"><?php getTranslation("Impuestos incluídos"); ?></p>
              </div>
              <a href="" class="drl-btn drl-btn-outlined">
                <span><?php getTranslation("Contratar"); ?></span>
                
                
              </a>
            </div>
            <!-- END ITEM BUSINESS -->
          </div>
          <div class="bottom-dots"></div>
        </div>
      </section>
      <section id="final-cta">
        <h3 class="drl-Headline3"><?php getTranslation("
            DinoRANK tiene todas las funcionalidades que necesitas para mejorar tu estrategia de marketing digital
        "); ?></h3>
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
    <script src="js/priceSwitcher.js"></script>
  </body>
</html>
