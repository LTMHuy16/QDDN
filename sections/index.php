<?php if (have_rows('main_flexible_content')): ?>
    <?php while (have_rows('main_flexible_content')) : the_row(); ?>
        <?php 
            switch (get_row_layout()) {
                case "logo_partner":
                    include(get_theme_file_path('sections/logo-partner.php'));
                    break;
                case "image_and_text":
                    include(get_theme_file_path('sections/image-and-text.php'));
                    break;
                case "services":
                    include(get_theme_file_path('sections/services.php'));
                    break;
                case "info_2":
                    include(get_theme_file_path('sections/info-2.php'));
                    break;
                case "parallax":
                    include(get_theme_file_path('sections/parallax.php'));
                    break;
                case "testimonial":
                    include(get_theme_file_path('sections/testimonial.php'));
                    break;
                case "team":
                    include(get_theme_file_path('sections/team.php'));
                    break;
                case "subcribe":
                    include(get_theme_file_path('sections/subcribe.php'));
                    break;
                default:
                    return;
            }
        ?>
    <?php endwhile; ?> 
<?php endif; ?>

