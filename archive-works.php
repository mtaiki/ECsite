<?php get_header(); ?>

<section class="page-cacestudy">
    
            <div class="container">
                <div class="page-casestudy-inner">
                    <ul class="page-casestudy-list">
                        <li class="list-item">
                            <a href="#business-1">ビジネス英語研修</a>
                        </li>
                        <li class="list-item">
                            <a href="#buisiness-2">異文化コミニュケーション</a>
                        </li>
                        <li class="list-item">
                            <a href="#buisiness-3">ビジネス留学プログラム</a>
                        </li>
                    </ul>
                    <div id="business-1" class="casestudy-content">
                        <h2 class="casestudy-content-title">
                            ビジネス英語研修<br>
                            <span>Business English Training</span>
                        </h2>
                        
                        <?php
                            $args = array(
                            'post_type' => 'works', // 投稿タイプを指定
                            'posts_per_page' => -1, // 表示する記事数
                            'taxonomy' => 'dep', //タクソノミー名を指定
                            'term' => 'business-english', //タームのスラッグを指
                            'order' => 'DESC',     
                            );
                            $the_query = new WP_Query( $args );
                        ?>
                        
                        <div class="casestudy-item-wrap">

                            <?php 
                            if ( $the_query->have_posts() ): 
                            while ( $the_query->have_posts() ): $the_query->the_post(); 
                            ?>

                            <div class="casestudy-item">
                                <div class="casestudy-head">
                                    <p class="casestudy-head-text">
                                        <?php echo $cfs->get('case-business-title'); ?>
                                    </p>
                                    <p class="casestudy-head-name">
                                        <?php the_title(); ?><span>様</span>
                                    </p>
                                    <div class="casestudy-item-logo">
                                        <img src="<?php echo $cfs->get('case-company-img'); ?>" alt="ロゴ画像">
                                    </div>
                                </div>
                                <div class="casestudy-body">
                                    <h3 class="casestudy-body-title">
                                        研修コース：
                                        <span class="case-name"><?php echo $cfs->get('case-training-course'); ?></span>
                                    </h3>
                                    <ul class="casestudy-body-list">
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                研修の目的
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-purpose'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                選んだ理由
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-reason'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                導入後の成果・効果
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-effect'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>

                        <a href="<?php echo esc_url( home_url( 'service' ) ); ?>#service-1" class="casestudy-content-btn">
                            <p class="btn-text">ビジネス英語研修の詳細</p>
                            <div class="btn-icon">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                            </div>
                        </a>
                    </div>

                    <div id="buisiness-2" class="casestudy-content">
                        <h2 class="casestudy-content-title">
                            異文化コミュニケーション<br>
                            <span>Cross-cultural communication</span>
                        </h2>

                        <?php
                            $args = array(
                            'post_type' => 'works', // 投稿タイプを指定
                            'posts_per_page' => -1, // 表示する記事数
                            'taxonomy' => 'dep', //タクソノミー名を指定
                            'term' => 'cross-culture', //タームのスラッグを指
                            'order' => 'DESC',     
                            );
                            $the_query = new WP_Query( $args );
                        ?>

                        <div class="casestudy-item-wrap">

                            <?
                            if ( $the_query->have_posts() ): 
                            while ( $the_query->have_posts() ): $the_query->the_post(); 
                            ?>

                            <div class="casestudy-item">
                                <div class="casestudy-head">
                                    <p class="casestudy-head-text">
                                        <?php echo $cfs->get('case-business-title'); ?>
                                    </p>
                                    <p class="casestudy-head-name">
                                        <?php the_title(); ?><span>様</span>
                                    </p>
                                    <div class="casestudy-item-logo">
                                        <img src="<?php echo $cfs->get('case-company-img'); ?>" alt="ロゴ画像">
                                    </div>
                                </div>
                                <div class="casestudy-body">
                                    <h3 class="casestudy-body-title">
                                        研修コース：
                                        <span class="case-name"><?php echo $cfs->get('case-training-course'); ?></span>
                                    </h3>
                                    <ul class="casestudy-body-list">
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                研修の目的
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-purpose'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                選んだ理由
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-reason'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                導入後の成果・効果
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-effect'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>

                        <a href="<?php echo esc_url( home_url( 'service' ) ); ?>#service-2" class="casestudy-content-btn">
                            <p class="btn-text">異文化コミュニケーションの詳細</p>
                            <div class="btn-icon">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                            </div>
                        </a>
                    </div>
                    <div id="buisiness-3" class="casestudy-content">
                        <h2 class="casestudy-content-title">
                            ビジネス留学プログラム<br>
                            <span>Business study abroad program</span>
                        </h2>

                        <?php
                            $args = array(
                            'post_type' => 'works', // 投稿タイプを指定
                            'posts_per_page' => -1, // 表示する記事数
                            'taxonomy' => 'dep', //タクソノミー名を指定
                            'term' => 'business-program', //タームのスラッグを指
                            'order' => 'DESC',     
                            );
                            $the_query = new WP_Query( $args );
                        ?>

                        <div class="casestudy-item-wrap">

                            <?
                            if ( $the_query->have_posts() ): 
                            while ( $the_query->have_posts() ): $the_query->the_post(); 
                            ?>

                            <div class="casestudy-item">
                                <div class="casestudy-head">
                                    <p class="casestudy-head-text">
                                        <?php echo $cfs->get('case-business-title'); ?>
                                    </p>
                                    <p class="casestudy-head-name">
                                        <?php the_title(); ?><span>様</span>
                                    </p>
                                    <div class="casestudy-item-logo">
                                        <img src="<?php echo $cfs->get('case-company-img'); ?>" alt="ロゴ画像">
                                    </div>
                                </div>
                                <div class="casestudy-body">
                                    <h3 class="casestudy-body-title">
                                        研修コース：
                                        <span class="case-name"><?php echo $cfs->get('case-training-course'); ?></span>
                                    </h3>
                                    <ul class="casestudy-body-list">
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                研修の目的
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-purpose'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                選んだ理由
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-reason'); ?>
                                            </p>
                                        </li>
                                        <li class="casestudy-list-item">
                                            <h4 class="list-item-title">
                                                導入後の成果・効果
                                            </h4>
                                            <p class="list-text">
                                                <?php echo $cfs->get('case-training-effect'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>

                        <a href="<?php echo esc_url( home_url( 'service' ) ); ?>#service-3" class="casestudy-content-btn">
                            <p class="btn-text">ビジネス留学プログラム</p>
                            <div class="btn-icon">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>