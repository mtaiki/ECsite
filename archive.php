<?php get_header(); ?>
        <section class="page-news">
            <div class="container">
                <div class="page-news-inner">
                    <div class="page-news-content">
                        <h2 class="news-content-title">
                            NEWS
                        </h2>
                        <?php
                        //記事があればentriesブロック以下を表示
                        if ( have_posts() ) :
                        ?>

                        <div class="news-item-wrap">

                            <?php
                            //記事数ぶんループ
                            while ( have_posts() ) :
                            the_post();
                            ?>

                            <a href="<?php the_permalink(); ?>" class="news-item-link">
                                <div class="news-item">
                                    <div class="news-item-img-wrap">
                                        <div class="news-item-img">
                                        <?php 
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="news-item-content">
                                        <div class="news-item-data">
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
                                            <time class="news-item-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                        </div>
                                        <h3 class="news-item-title">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </div>
                            </a>

                            <?php
                            endwhile;
                            ?>

                        </div>

                        <?php endif; ?>
                        
                        <?php if ( paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
                        <div class="pagenation">
                            <?php
                                $args = array(
                                    'prev_text' => __(''),
                                    'next_text' => __(''),
                                    'mid_size'  => 5
                                );

                                echo paginate_links($args);
                            ?>
                        </div>
                        <?php endif; ?>

                    </div>

                    <!-- サイドバー -->
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>