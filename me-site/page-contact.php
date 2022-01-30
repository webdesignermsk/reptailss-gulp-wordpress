
<?php
/*
Template Name: contact
*/

?>

<?php
get_header();
?>



<div class="page-wrap top-page portfolio-contact" id="contact">

    <div class="container">
        <div class="portfolio-tag portfolio-tag__start">
            contact
        </div>

        <div class="portfolio-contact__inner padding-inner">
            <div class="portfolio-contact__box">
                <form ACTION="telegram.php" class="portfolio-contact__form" method="POST">
                    <div class="portfolio-contact__form-title">
                        leave a message
                    </div>
                    <div class="portfolio-contact__inputs">
                        <label class="portfolio-contact__label">
                            <input class="portfolio-contact__input" name="user_name" placeholder="name" type="text">
                        </label>
                        <label class="portfolio-contact__label">
                            <input class="portfolio-contact__input" name="user_email" placeholder="email" type="text">
                        </label>
                        <label class="portfolio-contact__label">
                            <input class="portfolio-contact__input" name="user_telegram" placeholder="telegram"
                                   type="text">
                        </label>
                    </div>


                    <textarea class="portfolio-contact__textarea" name="user_message"
                              placeholder="Your message"></textarea>
                    <button class="portfolio-contact__btn" type="submit">send</button>
                </form>

            </div>
        </div>

        <div class="portfolio-tag portfolio-tag__end">
            contact
        </div>

    </div>
</div>

<?php
get_footer();
?>


