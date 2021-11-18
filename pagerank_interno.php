<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTranslation("PageRank Interno"); ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />

    <link rel="stylesheet" href="https://dinorank.com/css/estiloscss2.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/spacers.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/components/headers.css" />
    <link rel="stylesheet" href="css/components/footer.css" />
    <link rel="stylesheet" href="css/pages/pagerank_interno.css" />
    <link rel="stylesheet" href="css/desktop/pagerank_interno.css">
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
            Distribuye la fuerza hacia las URLs más importantes de tu web,
            mejora su ranking y vende más
          "); ?></h1>
          <div class="btn-wrapper">
            <div style="position: relative;">
              <a id="cta-hero-btn" href="" class="drl-btn drl-btn-b cta"><?php getTranslation("SUSCríbete ahora"); ?></a>
            </div>
          </div>
          <div class="img-container">
            <img src="assets/images/dino_fire_2.png" alt="" />
          </div>
        </div>
      </section>
      <section id="data-1">
        <div class="wrapper">
          <p class="drl-Text1"><?php getTranslation("Muchas veces pasa."); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Trabajas distintas técnicas de SEO, pero tu web no acaba de rankear
            bien y no te da el dinero que esperabas.
          "); ?></p>
          <p class="drl-Headline3"><?php getTranslation("
            Pagerank interno es la transmisión de la autoridad, o de la fuerza,
            de un enlace a otro.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            <b
              >No gestionar bien el pagerank interno de una página web es un
              error muy común</b
            >
            y que afecta directamente al rendimiento que esperas tú (o tu
            cliente) de ese proyecto digital.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            De hecho, saber trabajarlo es una de las técnicas SEO que más
            beneficios genera:
          "); ?></p>
          <div class="grid-container">
            <div class="img-wrapper">
              <img src="assets/images/valid_icon.svg" alt="" />
            </div>
            <p class="drl-Text1"><?php getTranslation("Aumenta el tráfico a la URL que te interesa"); ?></p>
            <div class="img-wrapper">
              <img src="assets/images/valid_icon.svg" alt="" />
            </div>
            <p class="drl-Text1"><?php getTranslation("Mejora la intención de búsqueda del usuario"); ?></p>
            <div class="img-wrapper">
              <img src="assets/images/valid_icon.svg" alt="" />
            </div>
            <p class="drl-Text1"><?php getTranslation("Google te ve con mejores ojos"); ?></p>
            <div class="img-wrapper">
              <img src="assets/images/valid_icon.svg" alt="" />
            </div>
            <p class="drl-Text1"><?php getTranslation("Incrementa tus ventas"); ?></p>
          </div>
        </div>
      </section>
      <section id="data-2">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("
            La función Pagerank Interno aporta más fuerza y autoridad a las URLs
            más relevantes o que más cueste posicionar
          "); ?></h2>
          <div class="video-wrapper">
            <img src="assets/images/kr_video_thumbnail.png" alt="" />
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
          </div>
          <p class="drl-Caption1"><?php getTranslation("Esto es lo que te ofrece:"); ?></p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text1"><?php getTranslation("Búsqueda por país"); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text1"><?php getTranslation("Fácil de usar"); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Text1"><?php getTranslation("Informes descargables"); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
          </div>
        </div>
      </section>
      <section id="data-3">
        <div class="wrapper">
          <p class="drl-Headline3"><?php getTranslation("Cómo funciona Pagerank Interno"); ?></p>
          <ul>
            <li><p class="drl-Text1"><?php getTranslation("
              Selecciona el proyecto sobre el que quieras trabajar y haz clic en Pagerank Interno.
            "); ?></p></li>
          </ul>
          <p class="drl-Text1"><?php getTranslation("Aparece un gráfico de bolitas. En él puedes ver y entender de forma muy visual <b>cómo se está trasmitiendo la fuerza SEO o link juice</b>, de unos enlaces a otros de tu página web."); ?></p>
          <div class="img-wrapper">
            <img src="assets/images/pi_panel_principal.png" alt="" />
          </div>
          <p class="drl-Text1"><?php getTranslation("
            La bola negra es la home, que es de la que derivan el resto de URLs.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Cuanto más grande es una bola, más fuerza tiene.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("
            Los colores indican las que están agrupadas o enlazadas.
          "); ?></p>
          <p class="drl-Text1"><?php getTranslation("Si sitúas el cursor sobre una bola, puedes ver:"); ?>
            <ul>
              <li><p class="drl-Text1"><?php getTranslation("La URL"); ?></p></li>
              <li><p class="drl-Text1"><?php getTranslation("El pagerank "); ?></p></li>
              <li><p class="drl-Text1"><?php getTranslation("Su distancia a la home"); ?></p></li>
            </ul>
          </p>
          <p class="drl-Text1"><?php getTranslation("Si la URL que quieres trabajar está a 1 clic de la home, toda la fuerza de la home pasa de forma directa a esa URL."); ?></p>
          <p class="drl-Text1"><?php getTranslation("De forma que, a más clics esté un enlace de la home, más se va diluyendo la fuerza SEO."); ?></p>
          <p class="drl-Text1"><?php getTranslation("Y este link juice, también depende de los enlaces que esté recibiendo esa URL."); ?></p>
          <p class="drl-Text1"><?php getTranslation("En este gráfico de bolas, puedes ver también si el reparto de fuerza entre las URLs de tu web está equilibrado o no."); ?></p>
          <ul>
            <li><p class="drl-Text1"><?php getTranslation("
              <b>Listado de todas las URLs</b>
            "); ?></p></li>
          </ul>
          <div class="img-wrapper">
            <img src="assets/images/pi_listado_urls.png" alt="" />
          </div>
          <p class="drl-Text1"><?php getTranslation("<b>En este listado puedes ver distintos datos para mejorar el Pagerank Interno de tu sitio web:</b>"); ?></p>
          <ul>
            <li>
              <p class="drl-Text1"><?php getTranslation("La distancia a la que se encuentran esas URLs desde la home, su pagerank interno y su estado (200 o 3xx)."); ?></p>
            </li>
            <li>
              <p class="drl-Text1"><?php getTranslation("Pinchando puedes ver el gráfico de cada URL."); ?></p>
            </li>
            <li>
              <p class="drl-Text1"><?php getTranslation("Si haces clic en él, Dinorank te lleva a la función de enlazado interno que es la que se complementa con pagerank interno."); ?></p>
            </li>
            <li>
              <p class="drl-Text1"><?php getTranslation("Aquí ves las URLs que apuntan hacia ella y así puedes entender cómo está funcionando el enlazado interno y la forma en la que se transmite la fuerza."); ?></p>
            </li>
            <li>
              <p class="drl-Text1"><?php getTranslation("Debajo aparece el detalle de todo el enlazado interno (lo puedes ver más detallado en la página de <a href="" >Enlazado Interno</a>)."); ?></p>
            </li>
          </ul>
          <p class="drl-Text1"><?php getTranslation("Con todos estos datos puedes elegir cómo transmitir la fuerza, cómo hacer la <b>estructura de enlazado interno</b> de tu página web."); ?>
            <ul>
              <li>
                <p class="drl-Text1"><?php getTranslation("Este trabajo es importante hacerlo de forma cuidadosa, con sentido y naturalidad para <b>aportar valor al usuario</b>, respondiendo a su intención de búsqueda y mostrándole a <b>Google cómo están relacionados tus contenidos.</b>"); ?></p>
              </li>
              <li>
                <p class="drl-Text1"><?php getTranslation("Puedes ver si hay demasiados enlaces y si conviene hacer agrupaciones por clúster o por temáticas, para ofrecer una estructura más ordenada a Google y a tu usuario."); ?></p>
              </li>
              <li>
                <p class="drl-Text1"><?php getTranslation("Y también entenderás por qué unas URLs reciben más tráfico que otras. "); ?></p>
              </li>
              <li>
                <p class="drl-Text1"><?php getTranslation("A través de estos gráficos puedes saber de un solo vistazo, cuál es el problema con la transmisión de fuerza entre las URLs de tu página web."); ?></p>
              </li>
            </ul>
          </p>
        </div>
      </section>
      <section id="cta-banner">
        <h2 class="drl-Headline2"><?php getTranslation("
          Aumenta el Pagerank Interno de un post o URL con enlaces internos de URLs que tengan más pagerank
        "); ?></h2>
      </section>
      <section id="data-5">
        <div class="wrapper">
          <p class="drl-Text1"><?php getTranslation("
            Haciendo link sculpting, vas <b>esculpiendo la arquitectura web</b> de tu página y poco a poco conseguirás alterar la relevancia de esa URL en base a la fuerza que va recibiendo.
          "); ?></p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <div class="img-wrapper">
                <img src="assets/images/up_trend_icon.png" alt="" />
              </div>
              <p class="drl-Text2"><?php getTranslation("
                Alterar la fuerza de una URL con el Pagerank Interno es vital para que Google sepa cuáles son las partes más importantes de tu site.
              "); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="img-wrapper">
                <img src="assets/images/shield_icon.png" alt="" />
              </div>
              <p class="drl-Text2"><?php getTranslation("
                Trabaja la transmisión de autoridad y aumenta las posibilidades de posicionar el contenido que más te interese de tu página web.              "); ?></p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
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
      <section id="related-functions">
        <div class="wrapper">
          <h3 class="drl-Caption1"><?php getTranslation("
            FUNCIONES RELACIONADAS QUE TE PUEDEN INTERESAR
          "); ?></h3>
          <p id="subtitle" class="drl-Text2"><?php getTranslation("
            Sácale más partido a la información que te da Pagerank Interno, combinando su uso con otras funcionalidades de DinoRANK.
          "); ?></p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1"><?php getTranslation("Enlazado interno"); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Visualiza la arquitectura de tu página web y comprueba si tu estrategia de enlazado interno es correcta.
              "); ?></p>
              <div class="btn-wrapper">
                <a href="" class="drl-btn"><?php getTranslation("Más información"); ?></a>
              </div>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1"><?php getTranslation("Enlazado externo"); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Comprueba (sin coste) los backlinks que apuntan a tu web o a la de tu competencia a través de nuestros colaboradores.
              "); ?></p>
              <div class="btn-wrapper">
                <a href="" class="drl-btn"><?php getTranslation("Más información"); ?></a>
              </div>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1"><?php getTranslation("Gestión de Enlazado Externo"); ?></p>
              <p class="drl-Text2"><?php getTranslation("
                Inserta manualmente los enlaces externos que apuntan a tu sitio web, trackea y haz seguimiento a esos enlaces.
              "); ?></p>
              <div class="btn-wrapper">
                <a href="" class="drl-btn"><?php getTranslation("Más información"); ?></a>
              </div>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
          </div>
        </div>
      </section>
      <section id="subscribe">
        <div class="wrapper">
          <div class="t-container">
            <h3 class="drl-Headline3"><?php getTranslation("
              Suscríbete a DinoRANK por 19,90 € al mes, precio/año.
              <br/>También puedes suscribirte meses sueltos por 25 € al mes.
            "); ?></h3>
            <div class="btn-wrapper">
              <a href="" class="drl-btn drl-btn-b"><?php getTranslation("Empieza ahora"); ?></a>
            </div>
          </div>
          <div class="img-wrapper">
            <img src="assets/images/dino_desktop_wid.png" alt="" />
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
  </body>
</html>
