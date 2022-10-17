
<?php get_header(); ?>
    
    <nav class="menu">
        <?php 
            wp_nav_menu(
                array(
                    'menu' => 'menu_glowne'
                )
            )
        ?>
    </nav>

<?php get_footer(); ?>