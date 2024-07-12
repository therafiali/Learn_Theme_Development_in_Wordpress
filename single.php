<?php
get_header();
the_post();
?>

<h1><?php the_title() ?></h1>
<?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>
<div>
<div>

<?php the_author(); ?> 
</div>
    <img src="<?php echo $imagepath[0] ?>" alt="">
    <p><?php echo get_the_date() ?> </p>
    <?php the_content(); ?>
    <?php comments_template() ?>
</div>

<?php
get_footer();



?>