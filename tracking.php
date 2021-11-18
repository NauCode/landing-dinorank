<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTranslation("Tracking de Posiciones"); ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" />

    <link rel="stylesheet" href="https://dinorank.com/css/estiloscss2.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/spacers.css" />
    <link rel="stylesheet" href="css/buttons.css" />
    <link rel="stylesheet" href="css/components/headers.css" />
    <link rel="stylesheet" href="css/components/footer.css" />
    <link rel="stylesheet" href="css/pages/tracking.css" />
    <link rel="stylesheet" href="css/desktop/tracking.css">
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
            Controla el movimiento y la posición de tus keywords en los
            resultados de búsqueda de Google
          "); ?></h1>
          <p class="drl-Text2">
            Obtén una gráfica completa del movimiento de tus competidores para
            una keyword, con el tracking de posiciones de DinoRANK
          </p>
          <div class="btn-wrapper">
            <div style="position: relative;">
              <a id="cta-hero-btn" href="" class="drl-btn drl-btn-b cta"><?php getTranslation("SUSCríbete ahora"); ?></a>
            </div>
          </div>
          <div class="img-container">
            <img src="assets/images/dino_teacher.png" alt="" />
          </div>
        </div>
      </section>
      <section id="tracking-1">
        <div class="wrapper">
          <p class="drl-Text1">
            Es algo muy básico, pero
            <b>lo que no se mide no se puede mejorar</b>. Y menos en el ámbito
            SEO.
          </p>
          <p class="drl-Text1">
            ¿Cuántas veces te has acabado tu día con el subidón de haber
            mejorado la posición de tu web o la de tu cliente?
          </p>
          <p class="drl-Text1">
            Pero, cuando revisasas el proyecto, ha bajado 2 o 3 puestos... O
            peor. Ya no está en la primera página de las SERPS... Pánico,
            cabreo...
          </p>
          <p class="drl-Text1">
            Y es que Google es así. Y tu competencia se mueve con el mismo
            objetivo que tú, escalar posiciones.
          </p>
          <p class="drl-Text1">
            Por eso necesitas una herramienta que te ayude a detectar errores, a
            enterarte lo antes posible si ha pasado algo nuevo para
            <b>actuar rápido y ahorrar tiempo después</b>.
          </p>
        </div>
      </section>
      <section id="features">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("
            El Tracking de Posiciones monitoriza la posición de tu web en el
            ranking, te avisa si hay fluctuaciones y te dice cómo posicionan tus
            competidores en tiempo real
          "); ?></h2>
          <p class="drl-Caption2">Esto es lo que te ofrece:</p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/track_changes_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Trackea keywords por clúster y ordénalas por carpetas.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/assessment_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Gráfica de comportamiento y fluctuación de una keyword.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/donut_small_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Gráfica de todos tus competidores de las SERPS para una keyword.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/location_on_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Tracking geolocalizado y descarga de informes.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/view_day_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Muestra la posición real de tu web en las SERPS de Google.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img
                  src="assets/images/format_list_numbered_icon.png"
                  alt=""
                />
              </div>
              <p class="drl-Text2">
                Opción de trackear las URLs individuales de tu sitio web.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img
                  src="assets/images/check_circle_outline_icon.png"
                  alt=""
                />
              </div>
              <p class="drl-Text2">
                Hiperpreciso, basado en nuestro propio sistema de proxys.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/wb_sunny_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Sencillo de usar y de entender en el que no te perderás.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
          </div>
          <p class="drl-Caption1">
            Y todo esto con una usabilidad extremadamente fácil.
          </p>
        </div>
      </section>
      <section id="banner">
        <h3 class="drl-Headline3"><?php getTranslation("
          El tracking de posiciones es la función más potente de DinoRANK.
        "); ?></h3>
        <p class="drl-Headline3">
          Es mejor que cualquiera que hayas probado antes y está en español.
        </p>
      </section>
      <section id="how-it-works">
        <div class="wrapper">
          <h2 class="drl-Headline3"><?php getTranslation("Cómo funciona el Tracking de Posiciones"); ?></h2>
          <p class="drl-Caption1" id="title1">
            1. Gráfica de evolución de las palabras clave.
          </p>
          <div class="img-wrapper">
            <img src="assets/images/tp_tracking_graph.png" alt="" />
          </div>
          <ul>
            <li>
              <p class="drl-Text2">
                Te muestra
                <b
                  >cómo se mueven las palabras clave en los resultados de
                  búsqueda de Google.</b
                >
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Cada columna se corresponde con una página de resultados y la
                altura indica el número de keywords que tienes en esa página.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes retroceder semana a semana para comprobar su evolución.
              </p>
            </li>
          </ul>
          <p class="drl-Text2">
            Controla si hay movimientos bruscos para que analices las causas y
            lo puedas corregir rápido.
          </p>
          <p class="drl-Caption1" id="title2">
            2. Tabla de tracking de palabras clave.
          </p>
          <p class="drl-Text2">
            Las opciones que da esta parte de la herramienta son muchísimas y
            muy útiles.
          </p>
          <div class="img-wrapper">
            <img src="assets/images/tp_tracking_table.png" alt="" />
          </div>
          <ul>
            <li>
              <p class="drl-Text2">
                <b>Añades las keywords</b> que quieras controlar.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                La herramienta te indica si hay <b>canibalizaciones</b> para
                esas keywords.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Tienes un <b>calendario</b> para ver lo que ha sucedido en un
                periodo tiempo o ver si te ha afectado un update.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes destacar las keywords que más te interesa controlar.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Si tu proyecto es muy grande, hay un <b>buscador</b> para que
                encuentres cualquier palabra clave.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes copiar al portapapeles todas las palabras para hacer tus
                <b>informes.</b>
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                La tabla te indica
                <b>las keywords que suben y las que bajan.</b>
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes ver la situación real de la competencia de los
                <b>dominios con los que estás compitiendo</b> por palabras clave
                y llevártelos al módulo de Visibilidad para analizarlo con más
                detalle.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Tienes la opción de <b>descarga en archivo CSV</b> con todos los
                datos de la tabla y también <b>en PDF.</b>
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes <b>agrupar las palabras clave y</b> también por las
                <b>URLS</b>, para controlar que todas están posicionando por la
                keyword que tú quieres.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                El símbolo <b>flechas cruzadas</b>, indica la evolución,
                histórico de las URLs de tu competencia que posicionan por esa
                keyword.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                En la gráfica individual del movimiento de una keyword puedes
                añadir notas.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Te muestra la evolución de esa keyword tanto para
                <b>PC como para móvil.</b>
              </p>
            </li>
          </ul>
          <div class="img-wrapper">
            <img src="assets/images/tp_tracking_graph_2.png" alt="" />
          </div>
          <div class="img-wrapper">
            <img src="assets/images/tp_tracking_table_2.png" alt="" />
          </div>
          <ul>
            <li>
              <p class="drl-Text2">
                Indica el <b>volumen de búsquedas</b> de la posición actual, de
                día anterior, la comparativa de la mejor posición que se ha
                conseguido y la posición en la que estaba al comienzo del
                proyecto.
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Indica la <b>URL por la que posiciona cada palabra.</b>
              </p>
            </li>
            <li>
              <p class="drl-Text2">
                Puedes <b>definir alertas</b> para recibir avisos cuando haya
                movimientos en tu keywords para evitar sobresaltos y realizar
                las acciones que consideres.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section id="rivals">
        <h3 class="drl-Headline3"><?php getTranslation("
          Localiza a tus rivales en las SERPS.<br />Conoce que hacen para ver
          cómo puedes superarles.
        "); ?></h3>
      </section>
      <section id="key-info">
        <div class="wrapper">
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/timer_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                El Tracking de Posiciones es muy concreto y preciso para que
                ahorres tiempo en analizar los movimientos de tus keywords.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/star_icon.png" alt="" />
              </div>
              <p class="drl-Text2">
                Es más fácil de usar y es igual o más completo que otras
                alternativas. Además te da toda la información en español.
              </p>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
          </div>
        </div>
      </section>
      <section id="testimonials">
        <div class="wrapper">
          <h2 class="drl-Headline2"><?php getTranslation("Testimonios de usuarios de DinoRANK"); ?></h2>
          <p class="drl-Text2">
            Opiniones de clientes que usan DinoRANK en su día a día para mejorar
            su visibilidad.
          </p>
          <div class="content" id="masonry-effect">
            <!-- ITEM 1 -->
            <div class="item" id="testimonial1">
              <div class="comilla"></div>
              <p class="drl-Text2">
                Es imposible hacer SEO sin los datos que DinoRank proporciona.
              </p>
              <p class="drl-Text2">
                Ha optimizado mucho nuestro trabajo en la agencia, tanto a la
                hora de hacer SEO on Page, como para ver el progreso de nuestros
                clientes y el rendimiento de cada recurso.
              </p>
              <p class="drl-Text2">
                La mayor ventaja es poder ver todos los problemas de una página
                con un sencillo análisis. También nos ayuda a hacer seguimiento
                del posicionamiento de las palabras clave y a conocer con
                detalle el CPC y la competencia de cada palabra clave.
              </p>
              <div class="profile">
                <div class="image-container">
                  <img src="assets/images/people/maria_ponsada.png" alt="" />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6">María Ponsada</p>
                  <p class="drl-Caption3">CEO Seoriginalsweb.com</p>
                </div>
              </div>
            </div>
            <!-- END ITEM 1 -->
            <!-- ITEM 2 -->
            <div class="item" id="testimonial2">
              <div class="comilla"></div>
              <p class="drl-Text2">
                La gran virtud de DinoRANK es que es una herramienta SEO muy
                económica pero también muy completa.
              </p>
              <p class="drl-Text2">
                Cuando inicias un proyecto intentas contener los gastos usando
                mil y una herramientas gratuitas para analizar las métricas de
                tu web. Con DinoRANK, no tengo que saltar de herramienta en
                herramienta.
              </p>
              <p class="drl-Text2">
                Su Keyword research ha cambiado mi manera de afrontar la
                redacción de los posts. La cantidad de palabras clave derivadas
                y la rapidez con las que se logran, me enamoró desde el primer
                momento.
              </p>
              <p class="drl-Text2">
                La funcionalidad que más me ha sorprendido es el Tracking de
                posiciones. Es muy útil para controlar la evolución de mis
                keywords y ver cómo reacciona la competencia.
              </p>
              <div class="profile">
                <div class="image-container">
                  <img
                    src="assets/images/people/francisco_marhuenda_sala.png"
                    alt=""
                  />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6">Francisco Marhuenda Sala</p>
                  <p class="drl-Caption3">Webmaster laguíadelchollo.com</p>
                </div>
              </div>
            </div>
            <!-- END ITEM 2 -->
            <div class="column-items" id="ts-column-1">
              <!-- ITEM 1 -->
              <div class="item" id="testimonial1">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  Es imposible hacer SEO sin los datos que DinoRank proporciona.
                </p>
                <p class="drl-Text2">
                  Ha optimizado mucho nuestro trabajo en la agencia, tanto a la
                  hora de hacer SEO on Page, como para ver el progreso de
                  nuestros clientes y el rendimiento de cada recurso.
                </p>
                <p class="drl-Text2">
                  La mayor ventaja es poder ver todos los problemas de una
                  página con un sencillo análisis. También nos ayuda a hacer
                  seguimiento del posicionamiento de las palabras clave y a
                  conocer con detalle el CPC y la competencia de cada palabra
                  clave.
                </p>
                <div class="profile">
                  <div class="image-container">
                    <img src="assets/images/people/maria_ponsada.png" alt="" />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6">María Ponsada</p>
                    <p class="drl-Caption3">CEO Seoriginalsweb.com</p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 1 -->
              <!-- ITEM 4 -->
              <div class="item" id="testimonial4">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  Mi proyecto ha crecido en tráfico, autoridad y posicionamiento
                  en palabras clave superimportantes para mi negocio. A pesar de
                  haber trabajado con otras, la magia de WDF*DF y prominencia
                  para saber, en un solo vistazo, lo que deben tener mis
                  artículos a nivel de estructura es brutal y no necesito tener
                  profundos conocimientos SEO.
                </p>
                <p class="drl-Text2">
                  Al principio dudé por ser menos conocida que Semrush o Ahrefs
                  pero he conseguido rankear en los primeros lugares de Google
                  para KW con intencionalidades de búsqueda muy competidas.
                </p>
                <p class="drl-Text2">
                  DinoRANK es intuitiva. Te dice en un solo vistazo la
                  estructura que deberían tener tus artículos para posicionar
                  por encima de la competencia.
                </p>
              </div>
              <!-- END ITEM 4 -->
            </div>
            <!-- ITEM 3 -->
            <div class="item" id="testimonial3">
              <div class="comilla"></div>
              <p class="drl-Text2">
                Gracias a DinoRANK, he aprendido a distribuir el PageRank y los
                niveles de clicks para dar fuerza a las partes que más me
                interesan de mi página web. Antes no sabía lo importante que es
                la distribución de un buen interlinking dentro de mis proyectos.
              </p>
              <p class="drl-Text2">
                Reviso continuamente el tracking de posiciones para ver como
                aumenta la visibilidad de mi web gracias al balance de mejora
                que he implementado con esta Suite. He aumentado el
                posicionamiento de mi página web para las palabras clave más
                fuertes y más importantes de mis proyectos.
              </p>
              <p class="drl-Text2">
                DinoRANK me ha ayudado de forma muy visual e intuitiva a
                desarrollar una mejora del SEO On Page de mi web, a enriquecer
                los textos gracias al estudio de la competencia y hacer una
                auditoría de 0 a 100 que nada tiene que envidiar a Crawlers y/o
                herramientas SEO de precios bastante más elevados.
              </p>
              <div class="profile">
                <div class="image-container">
                  <img src="assets/images/people/sergio_cordero.png" alt="" />
                </div>
                <div class="profile-data">
                  <p class="drl-Headline6">Sergio Cordero</p>
                  <p class="drl-Caption3">sergiocordero.net</p>
                </div>
              </div>
            </div>
            <!-- END ITEM 3 -->
            <!-- ITEM 4 -->
            <div class="item" id="testimonial4">
              <div class="comilla"></div>
              <p class="drl-Text2">
                Mi proyecto ha crecido en tráfico, autoridad y posicionamiento
                en palabras clave superimportantes para mi negocio. A pesar de
                haber trabajado con otras, la magia de WDF*DF y prominencia para
                saber, en un solo vistazo, lo que deben tener mis artículos a
                nivel de estructura es brutal y no necesito tener profundos
                conocimientos SEO.
              </p>
              <p class="drl-Text2">
                Al principio dudé por ser menos conocida que Semrush o Ahrefs
                pero he conseguido rankear en los primeros lugares de Google
                para KW con intencionalidades de búsqueda muy competidas.
              </p>
              <p class="drl-Text2">
                DinoRANK es intuitiva. Te dice en un solo vistazo la estructura
                que deberían tener tus artículos para posicionar por encima de
                la competencia.
              </p>
            </div>
            <!-- END ITEM 4 -->
            <div id="ts-column-2" class="column-items">
              <!-- ITEM 2 -->
              <div class="item" id="testimonial2">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  La gran virtud de DinoRANK es que es una herramienta SEO muy
                  económica pero también muy completa.
                </p>
                <p class="drl-Text2">
                  Cuando inicias un proyecto intentas contener los gastos usando
                  mil y una herramientas gratuitas para analizar las métricas de
                  tu web. Con DinoRANK, no tengo que saltar de herramienta en
                  herramienta.
                </p>
                <p class="drl-Text2">
                  Su Keyword research ha cambiado mi manera de afrontar la
                  redacción de los posts. La cantidad de palabras clave
                  derivadas y la rapidez con las que se logran, me enamoró desde
                  el primer momento.
                </p>
                <p class="drl-Text2">
                  La funcionalidad que más me ha sorprendido es el Tracking de
                  posiciones. Es muy útil para controlar la evolución de mis
                  keywords y ver cómo reacciona la competencia.
                </p>
                <div class="profile">
                  <div class="image-container">
                    <img
                      src="assets/images/people/francisco_marhuenda_sala.png"
                      alt=""
                    />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6">Francisco Marhuenda Sala</p>
                    <p class="drl-Caption3">Webmaster laguíadelchollo.com</p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 2 -->
              <!-- ITEM 5 -->
              <div class="item" id="testimonial5">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  Tengo varios proyectos, y me ha sido muchísimo más fácil
                  encontrar nuevas keywords para posicionar y saber por las que
                  ya estaba posicionando.
                </p>
                <p class="drl-Text2">
                  Hago keyword research para mis proyectos y de mis clientas
                  casi a diario. La auditoría la uso muchísimo tanto para
                  posibles clientes, como para controlar mis proyectos. Y la
                  función de visibilidad es genial. Poder ver keywords de otras
                  webs sin tener acceso a su search console. Mi web principal
                  está subiendo visitas y me estoy posicionando en keywords muy
                  interesantes. He comenzado un proyecto poco y ya está
                  consiguiendo tráfico orgánico interesante, sin haber invertido
                  en linkbuilding, solo con optimización de contenidos.
                </p>
                <p class="drl-Text2">
                  Con DinoRANK es muy fácil hacer keyword research, la auditoría
                  completa del sitio y la visibilidad.
                </p>
              </div>
              <!-- END ITEM 5 -->
            </div>
            <!-- ITEM 5 -->
            <div class="item" id="testimonial5">
              <div class="comilla"></div>
              <p class="drl-Text2">
                Tengo varios proyectos, y me ha sido muchísimo más fácil
                encontrar nuevas keywords para posicionar y saber por las que ya
                estaba posicionando.
              </p>
              <p class="drl-Text2">
                Hago keyword research para mis proyectos y de mis clientas casi
                a diario. La auditoría la uso muchísimo tanto para posibles
                clientes, como para controlar mis proyectos. Y la función de
                visibilidad es genial. Poder ver keywords de otras webs sin
                tener acceso a su search console. Mi web principal está subiendo
                visitas y me estoy posicionando en keywords muy interesantes. He
                comenzado un proyecto poco y ya está consiguiendo tráfico
                orgánico interesante, sin haber invertido en linkbuilding, solo
                con optimización de contenidos.
              </p>
              <p class="drl-Text2">
                Con DinoRANK es muy fácil hacer keyword research, la auditoría
                completa del sitio y la visibilidad.
              </p>
            </div>
            <!-- END ITEM 5 -->
            <!-- ITEM 6 -->
            <div class="item" id="testimonial6">
              <div class="comilla"></div>
              <p class="drl-Text2">
                Probé DinoRANK para 3 de mis páginas web, dos de ellas son
                nichos y una, mi proyecto principal.
              </p>
              <p class="drl-Text2">
                No esperaba que por ese precio me diera tanto. Al principio dudé
                de si sería buena, pero tras probar Semrush, Ahrefs,
                Ubersuggest, ninguna me ha enamorado como Dinorank.
              </p>
              <p class="drl-Text2">
                La uso a diario para hacer seguimiento de las keywords. La
                función de prominencia semántica ha sido un gran sorpresa, me ha
                permitido escalar posiciones muy rápido y me ha generado un
                incremento en los ingresos de la WEB.
              </p>
              <p class="drl-Text2">
                Ver a golpe de click toda la estructura y fuerza interna de la
                página, poder realizar de manera sencilla una auditoría de SEO
                on Page o detectar canibalizaciones... me parece brutal.
              </p>
              <p class="drl-Text2">
                Además, es la primera suite SEO todo en uno que he probado que
                te hace sentir en su comunidad y partícipe del proyecto, y lo
                valoro mucho.
              </p>
              <p class="drl-Text2">
                Probé un mes y tengo claro que ya no me voy de Dinorank. Es una
                herramienta sencilla, completa, a bajo coste y que te hace
                llevar tu proyecto a dónde quieras, facilitándote la vida.
              </p>
            </div>
            <!-- END ITEM 6 -->
            <div id="ts-column-3" class="column-items">
              <!-- ITEM 3 -->
              <div class="item" id="testimonial3">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  Gracias a DinoRANK, he aprendido a distribuir el PageRank y
                  los niveles de clicks para dar fuerza a las partes que más me
                  interesan de mi página web. Antes no sabía lo importante que
                  es la distribución de un buen interlinking dentro de mis
                  proyectos.
                </p>
                <p class="drl-Text2">
                  Reviso continuamente el tracking de posiciones para ver como
                  aumenta la visibilidad de mi web gracias al balance de mejora
                  que he implementado con esta Suite. He aumentado el
                  posicionamiento de mi página web para las palabras clave más
                  fuertes y más importantes de mis proyectos.
                </p>
                <p class="drl-Text2">
                  DinoRANK me ha ayudado de forma muy visual e intuitiva a
                  desarrollar una mejora del SEO On Page de mi web, a enriquecer
                  los textos gracias al estudio de la competencia y hacer una
                  auditoría de 0 a 100 que nada tiene que envidiar a Crawlers
                  y/o herramientas SEO de precios bastante más elevados.
                </p>
                <div class="profile">
                  <div class="image-container">
                    <img src="assets/images/people/sergio_cordero.png" alt="" />
                  </div>
                  <div class="profile-data">
                    <p class="drl-Headline6">Sergio Cordero</p>
                    <p class="drl-Caption3">sergiocordero.net</p>
                  </div>
                </div>
              </div>
              <!-- END ITEM 3 -->
              <!-- ITEM 6 -->
              <div class="item" id="testimonial6">
                <div class="comilla"></div>
                <p class="drl-Text2">
                  Probé DinoRANK para 3 de mis páginas web, dos de ellas son
                  nichos y una, mi proyecto principal.
                </p>
                <p class="drl-Text2">
                  No esperaba que por ese precio me diera tanto. Al principio
                  dudé de si sería buena, pero tras probar Semrush, Ahrefs,
                  Ubersuggest, ninguna me ha enamorado como Dinorank.
                </p>
                <p class="drl-Text2">
                  La uso a diario para hacer seguimiento de las keywords. La
                  función de prominencia semántica ha sido un gran sorpresa, me
                  ha permitido escalar posiciones muy rápido y me ha generado un
                  incremento en los ingresos de la WEB.
                </p>
                <p class="drl-Text2">
                  Ver a golpe de click toda la estructura y fuerza interna de la
                  página, poder realizar de manera sencilla una auditoría de SEO
                  on Page o detectar canibalizaciones... me parece brutal.
                </p>
                <p class="drl-Text2">
                  Además, es la primera suite SEO todo en uno que he probado que
                  te hace sentir en su comunidad y partícipe del proyecto, y lo
                  valoro mucho.
                </p>
                <p class="drl-Text2">
                  Probé un mes y tengo claro que ya no me voy de Dinorank. Es
                  una herramienta sencilla, completa, a bajo coste y que te hace
                  llevar tu proyecto a dónde quieras, facilitándote la vida.
                </p>
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
          <p id="subtitle" class="drl-Text2">
            Sácale más partido a la información que te da el Tracking de
            Posiciones, combinando su uso con otras funcionalidades de DinoRANK.
          </p>
          <div class="container">
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1">Gestión de enlazado externo</p>
              <p class="drl-Text2">
                Introdúcelos manualmente y realiza seguimiento de los enlaces
                que estás trabajando.
              </p>
              <div class="btn-wrapper">
                <a href="" class="drl-btn"><?php getTranslation("Más información"); ?></a>
              </div>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1">Visibilidad</p>
              <p class="drl-Text2">
                Introduce tu dominio o de la competencia y conoce el tráfico
                estimado y las palabras clave para las que posiciona.
              </p>
              <div class="btn-wrapper">
                <a href="" class="drl-btn"><?php getTranslation("Más información"); ?></a>
              </div>
              <div class="figure"></div>
            </div>
            <!-- END ITEM -->
            <!-- ITEM -->
            <div class="item">
              <p class="drl-Caption1">Keyword Research</p>
              <p class="drl-Text2">
                Busca las palabras clave que quieres posicionar y analiza lo que
                está haciendo tu competencia para tomar decisiones.
              </p>
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
              Suscríbete a DinoRANK por 19,90 €/mes (precio anual), o por 25
              €/mes, si te suscribes meses sueltos
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
          <p class="drl-Caption2">Hecho con 💚 desde Madrid para el mundo</p>
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
