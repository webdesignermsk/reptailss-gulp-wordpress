<?php
/*
Template Name: work
*/

?>

<?php
get_header();
?>

<div class="page-wrap top-page portfolio-work" id="work">


    <div class="container">
        <div class="portfolio-tag portfolio-tag__start">
            work
        </div>

        <div class="portfolio-work__inner padding-inner">
            <ul class="portfolio-work__list">


                <?php
                $posts = get_posts(array(
                    'numberposts' => -1,
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

?>




