<?php get_header();?>

        <section class="about">
            <div class="about-bg"></div>
            <div class="container">
                <div class="about-inner">

                <?php 
                $about_page = get_page_by_path( 'about' );
                $post = $about_page;
                setup_postdata( $post );
                ?>

                    <div class="about-head">
                        <h2 class="section-title">
                            <p class="title"><?php the_title(); ?></p>
                            <p class="title-jp"><?php the_subtitle(); ?></p>
                        </h2>
                        <a href="<?php echo esc_url( home_url( 'about' ) ); ?>" class="about-btn btn">
                            <p class="btn-text">View more</p>
                            <div class="btn-border"></div>
                            <div class="btn-circle"></div>
                        </a>
                    </div>
                    <div class="about-body">
                        <p class="about-body-text">
                            <!-- 固定ページの抜粋文の出力 -->
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <div class="about-body-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/img-company.png" alt="会議画像">
                        </div>
                        <a href="<?php echo esc_url( home_url( 'about' ) ); ?>" class="about-btn-sm btn">
                            <p class="btn-text">View more</p>
                            <div class="btn-border"></div>
                            <div class="btn-circle"></div>
                        </a>
                    </div>

                <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

        <section class="service">
            <div class="container">
                <div class="service-inner">

                    <?php 
                    $service_page = get_page_by_path( 'service' );
                    $post = $service_page;
                    setup_postdata( $post );
                    ?>

                    <div class="service-head">
                        <h2 class="section-title">
                            <p class="title">SERVICE</p>
                            <p class="title-jp">サービス</p>
                        </h2>
                        <a href="<?php echo esc_url( home_url( 'service' ) ); ?>" class="service-btn btn">
                            <p class="btn-text">View more</p>
                            <div class="btn-border"></div>
                            <div class="btn-circle"></div>
                        </a>
                    </div>
                    <div class="service-item-wrap">
                        <div class="service-item">
                            <div class="service-item-content">
                                <div class="service-item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/number01.png" alt="番号1">
                                </div>
                                <div class="service-item-img">
                                    <img src="<?php echo $cfs->get('top-service1-img'); ?>" alt="画像">
                                </div>
                                <h3 class="service-item-title">
                                    <span>ビジネス英語研修</span>
                                </h3>
                            </div>
                            <p class="service-item-text">
                                <?php echo $cfs->get('top-service1-textarea'); ?>
                            </p>
                        </div>
                        <div class="service-item">
                            <div class="service-item-content">
                                <div class="service-item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/number02.png" alt="番号1">
                                </div>
                                <div class="service-item-img">
                                    <img src="<?php echo $cfs->get('top-service2-img'); ?>" alt="画像">
                                </div>
                                <h3 class="service-item-title">
                                    <span>異文化</span>
                                    <span>コミュニケーション研修</span>
                                </h3>
                            </div>
                            <p class="service-item-text">
                                <?php echo $cfs->get('top-service2-textarea'); ?>
                            </p>
                        </div>
                        <div class="service-item">
                            <div class="service-item-content">
                                <div class="service-item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/number03.png" alt="番号1">
                                </div>
                                <div class="service-item-img">
                                    <img src="<?php echo $cfs->get('top-service3-img'); ?>" alt="画像">
                                </div>
                                <h3 class="service-item-title">
                                    <span>ビジネス留学</span>
                                    <span>サポートプログラム</span>
                                </h3>
                            </div>
                            <p class="service-item-text">
                                <?php echo $cfs->get('top-service3-textarea'); ?>
                            </p>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( home_url( 'service' ) ); ?>" class="service-btn-sm btn">
                        <p class="btn-text">View more</p>
                        <div class="btn-border"></div>
                        <div class="btn-circle"></div>
                    </a>
                    
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </section>

        <section class="casestudy">
            <div class="container">
                <div class="casestudy-inner">
                    <div class="casestudy-head">
                        <h2 class="section-title">
                            <p class="title">CASE STUDY</p>
                            <p class="title-jp">導入事例</p>
                        </h2>
                        <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="casestudy-btn btn">
                            <p class="btn-text">View more</p>
                            <div class="btn-border"></div>
                            <div class="btn-circle"></div>
                        </a>
                    </div>

                    <!-- カスタム投稿の一覧表示 -->
                    <?php
                        $args = array(
                        'post_type' => 'works', // 投稿タイプを指定
                        'posts_per_page' => 6, // 表示する記事数
                        'order' => 'DESC',     
                        );
                        $the_query = new WP_Query( $args );
                    ?>

                    <div class="casestudy-item-wrap">

                        <?php 
                            if ( $the_query->have_posts() ): 
                            while ( $the_query->have_posts() ): $the_query->the_post(); 
                        ?>

                        <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="casestudy-item">
                            <div class="casestudy-item-img">
                                <img src="<?php echo $cfs->get('case-company-img'); ?>" alt="画像">
                            </div>
                            <h3 class="casestudy-item-title">
                                <?php the_title(); ?>　様
                            </h3>
                            <div class="casestudy-item-link">
                                <p class="casestudy-item-text">
                                    <?php echo $cfs->get('case-training-course'); ?>
                                </p>
                                <div class="casestudy-item-icon">
                                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/arrow-icon.png" alt="アイコン">
                                    <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/arrow-icon-active.png" alt="アイコン">
                                </div>
                            </div>
                        </a>

                        <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>

                    </div>
                    <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="casestudy-btn-sm btn">
                        <p class="btn-text">View more</p>
                        <div class="btn-border"></div>
                        <div class="btn-circle"></div>
                    </a>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container">
                <div class="news-inner">
                    <div class="news-head">
                        <h2 class="section-title">
                            <p class="title">NEWS</p>
                            <p class="title-jp">新着情報</p>
                        </h2>
                        <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="news-btn btn">
                            <p class="btn-text">View more</p>
                            <div class="btn-border"></div>
                            <div class="btn-circle"></div>
                        </a>
                    </div>
                    <div class="news-item-wrap">

                        <?php
                            $args = array (
                                'post_type' => 'post', // 投稿タイプ
                                'posts_per_page' => 3, // 取得する投稿数
                            );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ):
                            setup_postdata($post); //　グローバル変数$postを書き換え
                        ?>

                        <a href="<?php the_permalink(); ?>" class="news-item">
                            <div class="news-info">
                                <div class="label-wrap">
                                    <label class="news-label">
                                        <!-- カテゴリー名の表示 -->
                                        <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                                    </label>
                                    <p class="new-text">
                                        <?php
                                            $last_post_ids = array();
                                            //New!を付ける最新記事の件数
                                            $lastposts = get_posts('posts_per_page=2');
                                            foreach($lastposts as $lastpost) {
                                            $last_post_ids[] = $lastpost->ID;
                                            }
                                        ?>
                                        <?php 
                                            if ( in_array( $post->ID, $last_post_ids ) ):
                                            echo '<span>NEW</span>';
                                            endif;
                                        ?>
                                    </p>
                                </div>
                                <time class="news-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                            </div>
                            <h3 class="news-title">
                                <?php the_title(); ?>
                            </h3>
                        </a>

                        <?php
                            endforeach;
                            wp_reset_postdata(); // $postをグローバル変数に戻す
                        ?>
                    </div>
                    <a href="<?php echo esc_url( home_url( 'news' ) ); ?>" class="news-btn-sm btn">
                        <p class="btn-text">View more</p>
                        <div class="btn-border"></div>
                        <div class="btn-circle"></div>
                    </a>
                </div>
            </div>
        </section>


<?php get_footer(); ?>