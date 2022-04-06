<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo wp_get_document_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

    <header class="header" id="js-header">
        <div class="header-inner">
            <div class="header-logo-wrap">
                <a href="/top/" class="header-logo">
                    <h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/logo01.png" alt="Global standard">
                    </h1>
                </a>
            </div>
            <nav class="global-nav" id="js-header-nav">
                <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'global',
                        'container' => false,
                    )
                );
                ?>
                <div class="header-btn-wrap">
                    <a href="/download/" class="download btn-link">資料ダウンロード</a>
                    <a href="/contact/" class="contact btn-link">お問い合わせ</a>
                </div>
            </nav>
            <div class="burger-btn" id="js-header-btn">
                <span class="bars">
                    <span class="bar bar-top"></span>
                    <span class="bar bar-mid"></span>
                    <span class="bar bar-bottom"></span>
                </span>
            </div>
            <div id="js-burger-musk"></div>
        </div>
    </header>

    <main>

    <?php if(is_front_page()): //トップページにのみ表示 ?>

        <section class="mv">
            <div class="mv-inner">
                <ul class="slider">
                    <li>
                        <img class="mv-img-pc" src="<?php echo get_template_directory_uri(); ?>/image/mv.png" alt="背景画像">
                        <img class="mv-img-sm" src="<?php echo get_template_directory_uri(); ?>/image/mv-sm-1.png" alt="背景画像">
                    </li>
                    <li>
                        <img class="mv-img-pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-1.png" alt="背景画像">
                        <img class="mv-img-sm" src="<?php echo get_template_directory_uri(); ?>/image/mv-sm-2.png" alt="背景画像">
                    </li>
                    <li>
                        <img class="mv-img-pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-2.png" alt="背景画像">
                        <img class="mv-img-sm" src="<?php echo get_template_directory_uri(); ?>/image/mv-sm-3.png" alt="背景画像">
                    </li>
                </ul>
                <div class="mv-content">
                    <h1 class="mv-title-wrap">
                        <div class="mv-title-1">
                            <p class="mv-title">YOU CAN</p>
                            <p class="mv-title">CHANGE</p>
                        </div>
                        <p class="mv-title-2">THE WORLD</p>
                    </h1>
                    <p class="mv-text">世界で活躍できるグローバルな人材を育てる</p>
                </div>
            </div>
        </section>

        <?php elseif ( is_page( 'about' ) ): //about固定ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-company_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-company_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">ABOUT US</p><br>
                    <p class="title-jp">当社について</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_page( 'service' ) ): //service固定ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-service_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-service_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">SERVICE</p><br>
                    <p class="title-jp">サービス</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_page( 'download' ) ): //download固定ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-download_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-download_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">DOWNLOAD</p><br>
                    <p class="title-jp">資料ダウンロード</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_page( 'download/thanks' ) ): //download完了ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-download_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-download_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">DOWNLOAD</p><br>
                    <p class="title-jp">資料ダウンロード</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_page( 'contact' ) ): //contact固定ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-contact_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-contact_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">CONTACT</p><br>
                    <p class="title-jp">お問い合わせ</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_page( 'contact/thanks' ) ): //contact送信完了ページに表示 ?>

        <div class="page-head">
            <div class="page-head-bg">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-contact_pc.png" alt="アイキャッチ画像">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-contact_sp.png" alt="アイキャッチ画像">
            </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">CONTACT</p><br>
                    <p class="title-jp">お問い合わせ</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_post_type_archive( "works" ) ): //カスタム投稿のアーカイブページにのみ表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-company_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-company_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">CASESTUDY</p><br>
                    <p class="title-jp">導入事例</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_archive() ): //アーカイブページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-news_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-news_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">NEWS</p><br>
                    <p class="title-jp">ニュース</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php elseif ( is_single() ): //投稿ページに表示 ?>

        <div class="page-head">
        <div class="page-head-bg">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/mv-news_pc.png" alt="アイキャッチ画像">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/mv-news_sp.png" alt="アイキャッチ画像">
        </div>
            <div class="head-inner">
                <h2 class="page-title">
                    <p class="title">NEWS</p><br>
                    <p class="title-jp">ニュース</p>
                </h2>
            </div>
        </div>
        <div class="home">
            <div class="container">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
            </div>
        </div>

        <?php endif; ?>
        

        
        