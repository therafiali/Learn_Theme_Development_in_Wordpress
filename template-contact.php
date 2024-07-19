<?php 
get_header()

//Template Name:Contactus

?>
<h1>costom template</h1>
<div>
    <p>Phone</p>
    <?php the_field('contact_number',14); ?>
</div>
<div>
    <p>Email</p>
    <?php the_field('email',14); ?>
</div>

<?php get_footer() ?>