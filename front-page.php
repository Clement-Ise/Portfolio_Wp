<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta
      name="description"
      content="Clément ISELIN, a junior Front-End developer from FRANCE. I currently learn code at SEM NUMERICA in MONTBELIARD."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clément ISELIN | Accueil</title>
    <?php wp_head();?>
  </head>
  <body>
    <header class="grid __marger">
      <div class="title-h1">
        <h1>Front-End Creative Developer</h1>
      </div>
      <div class="title-FirstName">
        <h2>Clément</h2>
      </div>
      <div class="title-Name">
        <h2>ISELIN</h2>
      </div>
      <div class="line-1">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="1"
          viewBox="0 0 100% 1px"
        >
          <line
            class="lines_head"
            id="Ligne_10"
            data-name="Ligne 10"
            x2="100%"
            transform="translate(0 0.5)"
            fill="none"
            stroke="#ffe654"
            stroke-width="1"
          />
        </svg>
      </div>
      <div class="line-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="1"
          viewBox="0 0 100% 1px"
        >
          <line
            class="lines_head"
            id="Ligne_10"
            data-name="Ligne 10"
            x2="100%"
            transform="translate(0 0.5)"
            fill="none"
            stroke="#ffe654"
            stroke-width="1"
          />
        </svg>
      </div>
      <div class="line-3">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="1"
          viewBox="0 0 100% 1"
        >
          <line
            class="lines_head"
            id="Ligne_8"
            data-name="Ligne 8"
            x2="100%"
            transform="translate(0 0.5)"
            fill="none"
            stroke="#ffe654"
            stroke-width="1"
          />
        </svg>
      </div>
      <div class="line-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="1"
          viewBox="0 0 100% 1"
        >
          <line
            class="lines_head"
            id="Ligne_7"
            data-name="Ligne 7"
            x2="100%"
            transform="translate(0 0.5)"
            fill="none"
            stroke="#ffe654"
            stroke-width="1"
          />
        </svg>
      </div>
    </header>
    <main class="main">
      <div class="grid">
        <div class="nav_menu_top">
          <?php wp_nav_menu( 'theme location', 'menu_principal') ?>
        </div>
        <div class="paragraphe">
          <p class="p_general main_p">
            I’am Clément, a junior Front-End developer from FRANCE. I am
            currently learning code at
            <a href="https://numericabfc.com" class="substring .substring_opt1"
              >SEM NUMERICA</a
            >
            in MONTBELIARD.
          </p>
        </div>
      </div>
      <div>
      <?php get_template_part('loop-projet'); ?>
      </div>
    </main>
    <footer class="grid __marger">
      <div class="footer__1">
        <a
          href="mailto:clement.iselin@gmail.com"
          class="footer_col_work footerstring footerstring_2"
          >CONTACT</a
        >
      </div>
      <div class="footer__2">
        <a
          href="https://github.com/Clement-Ise"
          class="footer_col_work footerstring footerstring_2"
          >GITHUB</a
        >
      </div>
      <div class="footer__3">
        <a
          href="https://www.linkedin.com/in/clément-iselin/"
          class="footer_col_work footerstring footerstring_2"
          >LINKEDIN</a
        >
      </div>
      <p class="footer_cop_work">© Clément ISELIN <span id="year"> </span></p>
    </footer>
    <?php wp_footer();?>
  </body>
</html>