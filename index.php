<?php get_header() ?>


<br />


<?php
while (have_posts()) {
    the_post();
    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')
?>
    <div>
        <img src="<?php echo $imagepath[0] ?>" alt="">
        <h2><?php the_title() ?></h2>
        <p><?php echo get_the_date() ?> </p>
        <p><?php the_excerpt() ?> </p>
        <a href="<?php the_permalink(); ?>">Read more</a>

    </div>
<?php } ?>

<?php echo wp_pagenavi() ?>

<?php get_footer() ?>