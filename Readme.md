**WordPress Theme Development Basics Explained**

Sure, let's break down your WordPress theme development steps into simple terms! 🌟

1. **Create a Theme Folder:**
   - First, make a folder for your theme. Think of it as a container for all your theme files.

2. **Essential Files:**
   - Inside your theme folder, create these files:
     - `style.css`: This file holds theme information.
     - `index.php`: The main template file.
     - `functions.php`: Where you add custom functions.
     - `page.php`: For individual pages.
     - `header.php` and `footer.php`: Handle header and footer content.

3. **Theme Information:**
   - In `style.css`, define your theme details like name, author, and version.
   - Example:
     ```css
     /*
     Theme Name: Courses themes by Rafi Ali
     Theme URI: https://therafiali.vercel.app/
     Author: Rafi Ali
     Author URI: https://therafiali.vercel.app/
     Description: WordPress Theme for Courses Template.
     Version: 1.0
     */
     ```

4. **Add a Screenshot:**
   - Create a screenshot of your theme (1200x900 pixels) and include it in your theme folder.

5. **Activate Your Theme:**
   - Go to WordPress admin, navigate to Appearance > Themes, and activate your theme.

6. **Get Template Directory:**
   - To link external files (like CSS), use:
     ```php
     <?php echo get_template_directory_uri(); ?>/css/style.css
     ```

7. **Header and Footer:**
   - The header contains CSS, JS, and navigation.
   - Call the header using `<?php get_header(); ?>`.
   - The footer has closing items (like `</html>`).
   - Call the footer using `<?php get_footer(); ?>`.

8. **Functions.php:**
   - It's where you add custom functions or modify admin pages.

9. **Create Menus:**
   - In `functions.php`, register menus:
     ```php
     register_nav_menus(array(
         'main_menu' => __('Main Menu'),
         'footer_menu' => __('Footer Menu'),
     ));
     ```
   - Use `wp_nav_menu` to display menus in your theme.

10. **Thumbnail Images:**
    - Enable post thumbnails:
      ```php
      add_theme_support('post-thumbnails');
      ```
    - Display thumbnail:
      ```php
      <?php the_post_thumbnail(); ?>
      ```

11. **Custom Pages:**
    - Create a custom template (e.g., `custom.php`).
    - Add this code at the top:
      ```php
      <?php
      // Template Name: Contactus
      ?>
      ```
    - Create a page in WordPress admin and assign your custom template.

12. **Highlight Active Nav Menu:**
    - Use CSS to style active menu items:
      ```css
      .current_page_parent a, .current-menu-item a {
          background-color: red;
          color: #fff;
          padding: 10px;
      }
      ```

13. **Blog Posts:**
    - Create a separate template (e.g., `my-home.php`) for your homepage.
    - Use `index.php` for your blog.
    - Set this in WordPress admin.

14. **Pagination:**
    - Set blog post limits in Settings > Reading.
    - Install the "WP-PageNavi" plugin.
    - Add pagination with `<?php echo wp_pagenavi(); ?>`.

15. **Single Blog Detail:**
    - Create `single.php`.
    - Add a "Read more" button in `index.php`.
    - In `single.php`, display full blog details:
      ```php
      <?php
      get_header();
      the_post();
      ?>
      <h1><?php the_title(); ?></h1>
      <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
      <div>
          <div><?php the_author(); ?></div>
          <img src="<?php echo $imagepath[0]; ?>" alt="">
          <p><?php echo get_the_date(); ?></p>
          <?php the_content(); ?>
      </div>
      <?php get_footer(); ?>
      ```

16. **Add Comment form in Single Page:**
    - add this function in single.php `comment_form()  `.
    - add this class.
    css
    - style.css
    <!-- add this class -->
        .comment-form {
          paddding: 20px
        }
        .comment-form label{
          dispaly: block;
        }
        .comment-form textarea{
          width : 100%
          height: 80px
        }
        .comment-form input[type='text']{
          width : 100%
          height: 40px
        }        
      
    - add more custom classes if you want

17. **Display List of Comments and Form in Single Post:**
    - add this function in single.php `comments_template()  `.
    - add custom classes for styling.




18. **Display Posts From Specific Category:**
    - Create `category.php`.
    - Create `categories using admin panel`.
    - go to menus and add categoes in menus if you want in navbar.
    - we will using this code in category.php

    ```php
      <?php get_header() ?> <?php
      while (have_posts()) {
          the_post();
          $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>
          <div>
              <img src="<?php echo $imagepath[0] ?>" alt="">
              <h2><?php the_title() ?></h2>
              <p><?php echo get_the_date() ?> </p>
              <p><?php the_excerpt() ?> </p>
              <a href="<?php the_permalink(); ?>">Read more</a> </div> <?php } ?>
        <?php echo wp_pagenavi() ?>
        <?php get_footer() ?>
    ```
    - add styling for navigation
    ```css
      /* navbar styling */
        .nav {
          display: flex;
          margin-top: 15px;
          }  
          .nav>li {
          list-style: none;
          margin: 0px 30px;
          position: relative;
          }  
          .sub-menu {
          position: absolute;
          width: fit-content;
          opacity: 0;
          top: 100%;
          background-color: #e74c3c;
          transition: 0.3s; /* Reduced transition time */
          }  
        .nav>li:hover .sub-menu {
          opacity: 1;
          }  
          .sub-menu li {
          list-style: none;
          padding: 10px;
          }
    ```
19. **Add or Edit Dynamic Sidebars:**
    - add this code in  `functions.php`
      ```php
        register_sidebar(
          array(
            'name' => 'Sidebar Location',
            'id' => 'sidebar'

          )
        );
      ```
    - create widget using admin panel
    - add this function in `index.php` :
    ```php
        dynamic_sidebar('sidebar');
    ```

18. **How to Add Sidebar File using : Get_Sidebar()**
    - create sidebar.php 
    - add this code in sidebar.php with your     custom classes for styling
    ```php
       dynamic_sidebar('sidebar');
    ```
    - and where need to show side bar use this function:
    
    ```php
    <?php get_sidebar() ?>
    ``` 

19. **Dynamic Page Title:** 
    - go to header.php 
    - add this code in title tag.
    ```php
    <title><?php bloginfo('name'); ?>
    <?php wp_title(); ?>
    <?php if (is_front_page()){
      echo " | "
    bloginfo('description');
    }  ?> </title>
    ``` 

20. **Custom Background:** 
    - add this code in `functions.php` 
    ```php
    add_theme_support('custom-background')
     
    - add this code in header.php 
    ```php
    <body <?php body_class(); ?> >
    ```
    - go to admin panel and set background.



19. **Create an Error 404 Page:**
    - create file  `404.php`
    ```php
          <?php
      get_header()
      ?>
      <div>
          Page Not Found;
          error 404
      </div>
      <?php
      get_footer()
      ?>
    ```

19. **Get Category Function:**
    - add this line where we want to show category
    - this line get all category data.
    ```php
    $cat=get_categories(array('taxonomy'=>'category'));
    ```
    - this code show all categories.
    ```php
    <?php
      foreach ($cat as $catValue) {
          ?>

        <a href="<?php echo get_category_link($catValue->term_id); ?>">
            <p><?php echo $catValue->name ?> (<?php echo $catValue->count ?>)</p>
        </a>
        <?php } ?>

        ?>
    ```
19. **Excerpt | Short Desrcription:**
    - add this line in `functions.php`
    ```php
    add_post_type_support('page','excerpt');
    ```
    - add short description using excerpt may be this feature hide.
    - add this code in `page.php `
    `   <p><?php the_excerpt() ?> </p>`


19. **Create Custom Post Type:**
    - Install this Plugin `Custom Post Type Maker` and activate this.
    - Create Post type using this plugin.
    - Enable or True `Pages`,`Hirerchical`, `Query Var`, `Exclude From    Search`,`Has Archive` and `Show UI` options.
    - Set Menu Position 10.
    - add icons or slug icon if you want.
    - enable in support (`Title, editor, excerpt, Featured Image`)
    - Then Published

19. **Wp-Query for Custom Post Type:**
    - use this where you want to show.
    ```php
    <?php 
      $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish',
      )
      $newsquery = new Wp_Query($wpnews);
      while($newsquery->have_posts()){
        $newsquery->the_post();
     
      $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
      
        ?>
        <div class='blog-item' >
        <img src="<?php echo $imagepath[0] ?>" />
        <h2><?php the_title(); ?></h2>
        <p><?php get_the_date(); ?></p>
        </div>
      }
    ?>
    ```

19. **Create Custom Taxonomy or Category for Custom Post Type:**
    - create category using plugin from admin panel.
    `Post Types > Taxonomies > Create New Taxonomy`    

