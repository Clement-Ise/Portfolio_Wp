<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta
      name="description"
      content="Clément ISELIN, a junior Front-End developer from FRANCE. I currently learn code at SEM NUMERICA in MONTBELIARD."
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clément ISELIN | About me</title>
    <?php wp_head();?>
  </head>
  <body>
    <header class="header header_height">
      <div class="grid">
        <div class="nav_menu_top">
          <?php wp_nav_menu( 'theme location', 'menu_principal') ?>
        </div>
      </div>
      <div  class="grid"></div>
        <div class="contain-paragraphe _para_about">
          <img class="me" src="" />
          <p class='paragraphe_about'>
            Hello ! My name is
            <span class="item" data-image="http://localhost:8888/portefolio_wp/wp-content/themes/monjolitheme/dist/img/IMG_0806.jpeg">Clément Iselin</span
            >. I am 25 y.o. Front-end devoper based in Montbeliard.
          </p>
          <p class='paragraphe_about'>
            I am a student from SEM NUMERICA. To the firs time of my life i can
            explain my potential in my work.
          </p>
          <p class='paragraphe_about'>
            Today, i am looking for a internship to finish my formation that 2
            month or more, in face-to-face or remotely.
          </p>
          <p class='paragraphe_about'>
            When i am not typing lines of code, i am riding my bike on the street.
          </p>
        </div>
      </div>
    </header>
    <main class="main_about">
      <div class="position_tech grid _top">
        <h1 class="elem1 h1_tech">tech that i use</h1>
      </div>
      <article class="position_tech grid _top2">
        <?php get_template_part('loop-create'); ?>
      </article>
      <article class="position_tech grid">
        <?php get_template_part('loop-develop');?>
      </article>
      <article class="position_tech grid">
        <?php get_template_part('loop-productive');?>
      </article>
      <article class="position_tech grid _bottom">
        <?php get_template_part('loop-collaborate');?>
      </article>
    </main>
    <footer class="footer_back grid __footer">
      <div class="footer__1">
        <a href="mailto:clement.iselin@gmail.com" class="footer_col_about footerstring foot"
          >CONTACT</a
        >
      </div>
      <div class="footer__2">
        <a href="https://github.com/Clement-Ise" class="footer_col_about footerstring foot"
          >GITHUB</a
        >
      </div>
      <div class="footer__3">
        <a
          href="https://www.linkedin.com/in/clément-iselin/"
          class="footer_col_about footerstring foot"
          >LINKEDIN</a
        >
      </div>
      <p class="footer_cop_about">© Clément ISELIN <span id="year"></span></p>
    </footer>
    <?php wp_footer();?>
  </body>
</html>
