<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $projet = new WP_Query( array(
    'post_type' => 'projet',
    'orderby' => 'modified',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>
    <?php  $article = 1;?>
    <?php  $img = 1;?>
    <?php if ($projet->have_posts()) : ?>
    <?php while ($projet->have_posts()) : $projet->the_post(); ?>
    <div class="grid _project-start">
        <div class="article__1 <?php if (($article==1) || ($article == 3)){echo 'inverse_ar';}?>">
              <h3>
                  <?php the_title(); ?>
              </h3>
              <p class="p_general">
                  <?php the_content(); ?>
              </p>
        </div>
        <div class="_img <?php if (($img==1) || ($img == 3)){echo 'inverse_img';}?>">
        <a href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail();?>
        </a>
        </div>
        <?php $article++;?>
        <?php $img++;?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
