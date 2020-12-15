<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $product = new WP_Query( array(
    'post_type' => 'product',
    'orderby' => 'modified',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>
<?php $class = 2?>
<!--START-->
<?php if ($product->have_posts()) : ?>
    <h2 class="elem1">To be productive</h2>
    <?php while ($product->have_posts()) : $product->the_post(); ?>
    <div class="elem<?php echo $class ?>">
        <?php the_post_thumbnail();?>
        <div class='titre'><?php the_title();?></div>
    <?php $class++ ?>
<!--END-->
    </div>''
    <?php endwhile; ?>
    <?php endif; ?>
