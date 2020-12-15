<?php get_header();?>
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
<?php get_footer();?>