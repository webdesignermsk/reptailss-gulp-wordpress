<?php
/*
Template Name: about
*/

?>
<?php get_header()

?>



<div class="page-wrap top-page  portfolio-about">

    <div class="container">
        <div class="portfolio-tag   portfolio-tag__start ">
            about me
        </div>
        <div class="portfolio-about__inner padding-inner pt-110">
            <div class="portfolio-about__photo">
                <div class="portfolio-about__photo-text text-1"><?php
                    the_field('about_text')
                    ?>
                </div>
                <img alt="" class="portfolio-about__photo-img" src="<?php
                    the_field('about_img')
                ?>
">
            </div>


            <!--<div class="portfolio-about__slider">-->
            <!--<div class="portfolio-about__slider-item">-->
            <!--<img alt="" class="portfolio-about__slider-img" src="">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="portfolio-about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque-->
            <!--consequatur doloremque laudantium accusamus, tempora culpa sit reprehenderit nisi nam ipsa?-->
            <!--</div>-->
        </div>

        <div class="portfolio-tag portfolio-tag__end">
            about me
        </div>
    </div>

</div>

<?php
get_footer();
?>