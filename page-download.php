<?php 
/**
 * 
 * Template Name: page-download
 * 
 */
?>

<?php get_header(); ?>

        <section class="page-download">
            <div class="container">
                <div class="page-download-inner">
                    <div class="page-download-contnet">
                        <h2 class="download-title">
                            世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。
                        </h2>
                        <div class="download-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/pamphlet.png" alt="パンフレット画像">
                        </div>
                        <p class="download-content-text">
                            急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>
                            ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br>
                            <br>
                            英語に苦手意識のある方でもご安心ください。<br>
                            ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>
                            まずはこちらの資料をごらんください。
                        </p>
                    </div>
                    <div class="download-form-wrap">
                        <h2 class="form-title">
                            <?php echo $cfs->get('download-title'); ?>
                            <?php echo $cfs->get('download-thanks-title'); ?>
                        </h2>
                        <!-- 送信完了メッセージ -->
                        <p class="download-text">
                            <?php echo $cfs->get('download-thanks-text'); ?>
                        </p>
                        <p class="download-thanks-icon">
                            <?php echo $cfs->get('download-thanks-icon'); ?>
                            <?php echo $cfs->get('download-thanks-link'); ?>
                        </p>
                        <p class="download-thanks-text">
                            <?php echo $cfs->get('download-thanks-textarea'); ?>
                        </p>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>