<?php get_header() ?>
<?php the_post() ?>

<?php the_title(); ?>
<br/>
<?php the_post_thumbnail('medium'); ?>
<p>
    thumbnail path
</p>
<?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
print_r($imagepath)
?>
<br/>
<h2>Here is Description</h2>
<?php the_content(); ?>

<?php get_footer() ?>