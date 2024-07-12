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
