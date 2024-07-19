<?php 
get_header()

//Template Name:Courses

?>
<h1>Our Courses</h1>


<?php 
if(have_rows('course_details',123)){
    while(have_rows('course_details',123)){
        the_row();
        ?>
        <div> <?php echo get_sub_field('course_name',123) ?> </div>
   <?php } }

?>

<?php get_footer();?>