<?php $catimage = get_field('add_cat_image'); ?>
<?php $catgender = get_field('add_cat_gender'); ?>

<div class="wrapper-cats col-md-6 col-lg-12" id="cat-cards" >
    <div class="container">
        <div class="row">

            <h1 class="col-12"><?php the_title(); ?></h1>
            <img src="<?php echo($catimage) ?>" alt="">
    
            <h4><?php _e( 'Gender:', 'understrap') ?> <?php echo ($catgender->name) ?></h4>

    <?php the_excerpt(); ?>
    
    </div>
    </div>
    
    <?php $link = get_post_meta($post->ID, 'Link');
    
    
    if($link) : ?>
    <a href="<?php echo $link[0]; ?>">Link to this project</a>
    <?php endif  ?>
    
</div>