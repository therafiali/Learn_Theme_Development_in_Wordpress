<?php get_header();
$catData = get_queried_object();
?>

<h1><?php echo $catData->name; ?></h1>

<?php 
      $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy'=>'news_category',
                'field'=>'term_id',
                'terms'=>$catData->term_id
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
        <?php the_field('date',get_the_id()); ?>
        </div>
      <?php }
    ?>


<?php get_footer() ?>