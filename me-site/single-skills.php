<?php
/*
Template Name: skills Post
Template Post Type:  post, skills
*/

?>



<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package me_site
 */

get_header();
?>
    <div class="page-wrap top-page portfolio-work">

        <main id="primary" class="site-main">

            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'me-site') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'me-site') . '</span> <span class="nav-title">%title</span>',
                    )
                );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div>


    <div class="container">
        <div class="portfolio-tag portfolio-tag__start">
            work
        </div>

        <div class="portfolio-work__inner padding-inner">
            <ul class="portfolio-work__list">


                <?php
                $posts = get_posts(array(
                    'numberposts' => 3,
                    'category_name' => 'work',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts

                         as $post) {
                    setup_postdata($post);
                    ?>


                    <li class="portfolio-work__item">
                        <a class="portfolio-work__link" href="<?php
                        the_field('work_link')
                        ?>" target="_blanc">
                            <img class="portfolio-work__img" src="<?php
                            the_field('work_img')
                            ?>" alt="tehno">
                            <div class="portfolio-work__wrapper">
                                <div class="portfolio-work__item-title">open</div>
                                <div class="portfolio-work__technologies">
                                    <div class="portfolio-work__technologies-list">
                                        <div class="portfolio-work__technologies-item">
                                            <?php
                                            // переменные
                                            $field = get_field_object('technologies');
                                            $technologies = $field['value'];
                                            // проверка
                                            if ($technologies): ?>
                                                <?php foreach ($technologies as $item): ?>
                                                    <div class="portfolio-work__technologies-item">
                                                        <img alt="" class="portfolio-work__technologies-img"
                                                             src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/<?php echo $field['choices'][$item]; ?>.png">
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </li>

                    <?php


                }

                wp_reset_postdata(); // сброс
                ?>


            </ul>
        </div>

        <div class="portfolio-tag portfolio-tag__end">
            work
        </div>
    </div>
    </div>




<?php
get_footer();

