<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $developp = new WP_Query( array(
    'post_type' => 'developp',
    'orderby' => 'modified',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>
<?php $class = 2?>
<!--START-->
<?php if ($developp->have_posts()) : ?>
    <h2 class="elem1">To develop</h2>
    <?php while ($developp->have_posts()) : $developp->the_post(); ?>
    <div class="elem<?php echo $class ?>">
        <?php the_post_thumbnail();?>
        <div class='titre'><?php the_title();?></div>
    <?php $class++ ?>
<!--END-->
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
