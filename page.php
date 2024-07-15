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
<p><?php the_excerpt() ?> </p>
<?php the_content(); ?>
</br>
<div>
    <h1>Latest News</h1>
</div>
<?php 
      $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish',
      );
      $newsquery = new Wp_Query($wpnews);
      while($newsquery->have_posts()){
        $newsquery->the_post();
     
      $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
      
        ?>
        <div class='blog-item' >
        <img src="<?php echo $image[0] ?>" />
        <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_date(); ?></p>
        <p><?php the_excerpt() ?> </p>
        </div>
      <?php }
    ?>
<?php get_footer() ?>