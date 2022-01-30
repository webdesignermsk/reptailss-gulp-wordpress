<?php
/*
Template Name: skills
*/

?>

<?php
get_header();
?>


<div class="page-wrap top-page portfolio-skills" id="skills">


    <div class="container">
        <div class="portfolio-tag portfolio-tag__start">
            skills
        </div>
        <div class="portfolio-skills__inner padding-inner">
            <ul class="portfolio-skills__list">


                <?php

                $posts = get_posts(array(
                    'numberposts' => -1,
                    'category_name' => 'skills',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts

                         as $post) {
                    setup_postdata($post);
                    ?>


                    <li class="portfolio-skills__item">
                        <div class="portfolio-skills__name"><?php
                            the_title();
                            ?></div>
                        <div class="portfolio-skills__info">
                            <div class="portfolio-skills__elips  <?php
                            $field = get_field('skills_star');
                            if ($field == 'one') {
                                ?>
                     active
                        <?php
                            } else if ($field == 'two') {
                                ?>
                     active
                        <?php
                            }
                            else if ($field == 'three') {
                                ?>
                     active
                        <?php
                            }
                            else if ($field == 'fo') {
                                ?>
                     active
                        <?php
                            }

                            ?>"></div>
                            <div class="portfolio-skills__elips  <?php
                            $field = get_field('skills_star');
                            if ($field == 'two') {
                                ?>
                     active
                        <?php
                            }
                            else if ($field == 'three') {
                                ?>
                     active
                        <?php
                            }
                            else if ($field == 'fo') {
                                ?>
                     active
                        <?php
                            }
                            ?>">
                            </div>
                            <div class=" portfolio-skills__elips  <?php
                            $field = get_field('skills_star');
                            if ($field == 'three') {
                                ?>
                     active
                        <?php
                            }
                            else if ($field == 'fo') {
                                ?>
                     active
                        <?php
                            }
                            ?> ">
                            </div>
                            <div class="portfolio-skills__elips
                        <?php
                            $field = get_field('skills_star');
                            if ($field == 'fo') {
                                ?>
                     active
                        <?php
                            }
                            ?>
                        ">
                            </div>
                        </div>
                    </li>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </ul>
        </div>

        <div class="portfolio-tag portfolio-tag__end">
            skills
        </div>
    </div>

</div>


<?php
get_footer();
?>
