<section class="contact">
            <div class="contact-inner">
                <div class="download item">
                    <h2 class="section-title">
                        <p class="title">DOWNLOAD<p>
                        <p class="title-jp">資料ダウンロード</p>
                    </h2>
                    <a href="<?php echo esc_url( home_url( 'download' ) ); ?>" class="contact-btn">
                        <p class="btn-text">View more</p>
                        <div class="btn-icon">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right01.png" alt="アイコン画像">
                            <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-blue.png" alt="アイコン画像">
                        </div>
                    </a>
                </div>
                <div class="contact-item item">
                    <h2 class="section-title">
                        <p class="title">CONTACT<p>
                        <p class="title-jp">お問い合わせ</p>
                    </h2>
                    <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="contact-btn">
                        <p class="btn-text">View more</p>
                        <div class="btn-icon">
                            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right01.png" alt="アイコン画像">
                            <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-blue.png" alt="アイコン画像">
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </main>                                      

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-logo">
                <a href="<?php echo esc_url( home_url( 'top' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/footer-logo.png" alt="Global standard">
                </a>
            </div>
            <div class="footer-text">
                <p class="address">
                    〒550-1000　大阪市西区土佐堀9-5-5
                </p>
                <p class="tel">
                    TEL　06-123-4567
                </p>
                <p class="fax">
                    FAX　06-123-4568
                </p>
            </div>
            <p class="copylight">
                <small>©︎2021 Global Standard. All Rights Reserved.</small>
            </p>
        </div>
    </footer>
    <a href="#" class="scroll-top" id="page-top">
        <img src="<?php echo get_template_directory_uri(); ?>/image/scroll-icon.png" alt="">
    </a>

    <?php wp_footer() ?>
</body>
</html>