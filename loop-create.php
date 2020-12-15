<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $creation = new WP_Query( array(
    'post_type' => 'creation',
    'orderby' => 'modified',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>
<?php $class = 2?>
<!--START-->
<?php if ($creation->have_posts()) : ?>
    <h2 class="elem1">To create</h2>
    <?php while ($creation->have_posts()) : $creation->the_post(); ?>
    <div class="elem<?php echo $class ?>">
        <?php the_post_thumbnail();?>
        <div class='titre'><?php the_title();?></div>
    <?php $class++ ?>
<!--END-->
    </div>''
    <?php endwhile; ?>
    <?php endif; ?>
