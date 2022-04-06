<?php 
/**
 * 
 * Template Name: page-contact
 * 
 */
?>

<?php get_header(); ?>

        <section class="page-contact">
            <div class="container">
                <div class="page-contact-inner">
                    <p class="page-contact-text">
                        <?php echo $cfs->get('contact-textarea'); ?>
                    </p>
                    <h2 class="page-contact-title">
                        <?php echo $cfs->get('contact-title'); ?>
                    </h2>
                    <!-- 送信完了メッセージ -->
                    <p class="contact-thanks-text">
                        <?php echo $cfs->get('contact-thanks-textarea'); ?>
                    </p>
                    <p class="contact-thanks-icon">
                        <?php echo $cfs->get('contact-thanks-icon'); ?>
                        <?php echo $cfs->get('contact-thanks-link'); ?>
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>