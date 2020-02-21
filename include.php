<?php 
    require get_parent_theme_file_path('/inc/admin/customize.php');

    //
    require get_parent_theme_file_path('/inc/widget/footer-widget.php');


    //
    require get_parent_theme_file_path('/inc/setup/include_styles.php');
    require get_parent_theme_file_path('/inc/setup/include_scripts.php');

    require get_parent_theme_file_path('/inc/setup/register.php');

    require get_parent_theme_file_path('/inc/filter/menu-filters.php');

    // Used templates
        // template
    require get_parent_theme_file_path('/inc/walker/bootstrap-navigation-walker-generic.php');

        // base
    require get_parent_theme_file_path('/inc/walker/bootstrap-navigation-walker.php');

        // Implementations
    require get_parent_theme_file_path('/inc/walker/bootstrap-navigation-header-walker.php');
    require get_parent_theme_file_path('/inc/walker/bootstrap-navigation-social-walker.php');
    require get_parent_theme_file_path('/inc/walker/bootstrap-navigation-footer-walker.php');
?>