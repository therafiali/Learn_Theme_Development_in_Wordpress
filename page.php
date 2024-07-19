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





<br/>
<h2>Here is Description</h2>
<p><?php the_excerpt() ?> </p>
<?php the_content(); ?>
</br>
<div>
    <h1>Category</h1>
</div>
<?php 
$newCat = get_terms(['taxonomy'=>'news_category','hide_empty'=>false,'orderby'=>'name','order'=>'ASC','number'=>3,'parent'=>0,]);
foreach ($newCat as $newCatData) {
   $meta_image = get_wp_term_image($newCatData->term_id); 
    ?>
    <div>
      <?php if($meta_image!=""){?>

      <img src="<?php print_r($meta_image); ?>" alt=""> <?php } ?>
      <a href="<?php echo get_category_link($newCatData->term_id); ?>">

        <p><?php echo $newCatData->name; ?></p>
      </a>
    </div>
    <?php 
      $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy'=>'news_category',
                'field'=>'term_id',
                'terms'=>$newCatData->term_id
            ),
        ),);
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


<?php
}
?>
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