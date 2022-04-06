<?php 
/**
 * 
 * Template Name: page-service
 * 
 */
?>

<?php get_header(); ?>

        <section class="page-service-detail">
            <div class="container">
                <div class="service-detail-inner">
                    <h2 class="service-detail-title">
                    <?php echo $cfs->get('service-title'); ?>
                    </h2>
                    <div id="service-1" class="service-detail-item-wrap">
                        <div class="service-detail-content">
                            <div class="service-detail-number">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/number01.png" alt="01">
                            </div>
                            <h3 class="detail-content-title">
                                <p class="title">ビジネス英語研修</p>
                                <p class="title-en">Business English Training</p>
                            </h3>
                            <p class="detail-content-text">
                                <?php echo $cfs->get('service1-textarea'); ?>
                            </p>
                            <dl class="detail-content-table">
                                <dt class="table-dt">対象</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service1-target'); ?>
                                </dd>
                                <dt class="table-dt">費用</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service1-cost'); ?>
                                </dd>
                            </dl>
                            <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="service-detail-item-btn">
                                <p class="btn-text">お申し込みはこちら</p>
                                <div class="btn-icon">
                                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                    <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                                </div>
                            </a>
                        </div>
                        <div class="detail-item-img">
                            <img src="<?php echo $cfs->get('service1-img'); ?>" alt="画像">
                        </div>
                    </div>
                    <div id="service-2" class="service-detail-item-wrap">
                        <div class="service-detail-content">
                            <div class="service-detail-number">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/number02.png" alt="02">
                            </div>
                            <h3 class="detail-content-title">
                                <p class="title">
                                    異文化<br>
                                    コミュニケーション
                                </p>
                                <p class="title-en">Cross-cultural communication</p>
                            </h3>
                            <p class="detail-content-text">
                                <?php echo $cfs->get('service2-textarea'); ?>
                            </p>
                            <dl class="detail-content-table">
                                <dt class="table-dt">対象</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service2-target'); ?>
                                </dd>
                                <dt class="table-dt">費用</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service2-cost'); ?>
                                </dd>
                            </dl>
                            <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="service-detail-item-btn">
                                <p class="btn-text">お申し込みはこちら</p>
                                <div class="btn-icon">
                                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                    <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                                </div>
                            </a>
                        </div>
                        <div class="detail-item-img">
                            <img src="<?php echo $cfs->get('service2-img'); ?>" alt="画像">
                        </div>
                    </div>
                    <div id="service-3" class="service-detail-item-wrap">
                        <div class="service-detail-content">
                            <div class="service-detail-number">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/number03.png" alt="03">
                            </div>
                            <h3 class="detail-content-title">
                                <p class="title">
                                    ビジネス留学<br>
                                    プログラム
                                </p>
                                <p class="title-en">Business study abroad program</p>
                            </h3>
                            <p class="detail-content-text">
                                <?php echo $cfs->get('service3-textarea'); ?>
                            </p>
                            <dl class="detail-content-table">
                                <dt class="table-dt">対象</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service3-target'); ?>
                                </dd>
                                <dt class="table-dt">費用</dt>
                                <dd class="table-dd">
                                    <?php echo $cfs->get('service3-cost'); ?>
                                </dd>
                            </dl>
                            <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="service-detail-item-btn">
                                <p class="btn-text">お申し込みはこちら</p>
                                <div class="btn-icon">
                                    <img class="icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-right04.png" alt="アイコン画像">
                                    <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/image/icon-arrow-white.png" alt="アイコン画像">
                                </div>
                            </a>
                        </div>
                        <div class="detail-item-img">
                            <img src="<?php echo $cfs->get('service3-img'); ?>" alt="画像">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-service-flow">
            <div class="container">
                <div class="service-flow-inner">
                    <h2 class="service-flow-title">
                        導入の流れ
                    </h2>
                    <div class="flow-item-wrap">

                    <?php $fields04 = CFS()->get( 'flow_loop' );
                        if ($fields04):
                        foreach ( $fields04 as $fields ):
                    ?>

                        <div class="flow-item">
                            <div class="flow-item-number">
                                <p>
                                    STEP
                                    <span><?php echo $fields['flow-item-no']; ?></span>
                                </p>
                            </div>
                            <div class="flow-item-content">
                                <p class="flow-item-title">
                                    <?php echo $fields['flow-item-title']; ?>
                                </p>
                                <p class="flow-item-text">
                                    <?php echo $fields['flow-item-textarea']; ?>
                                </p>
                            </div>
                        </div>

                        <?php 
                            endforeach;
                            endif;
                        ?><!-- ループ終わり -->

                    </div>
                </div>
            </div>
        </section>

        <section class="page-service-qa">
            <div class="container">
                <h2 class="service-qa-title">
                    よくある質問
                </h2>
                <dl class="qa-inner">

                <?php $fields05 = CFS()->get( 'qa_loop' );
                    if ($fields05):
                    foreach ( $fields05 as $fields ):
                ?>

                    <div class="qa-item">
                        <dt class="qa-item-head" id="accordion-head">
                            <p class="qa-item-head-text">
                                <?php echo $fields['qa-head']; ?>
                            </p>
                            <div class="qa-item-icon"></div>
                        </dt>
                        <dd class="qa-item-body">
                            <p class="qa-item-body-text">
                                <?php echo $fields['qa-body']; ?>
                            </p>
                        </dd>
                    </div>

                <?php 
                    endforeach;
                    endif;
                ?><!-- ループ終わり -->

                </dl>
            </div>
        </section>

<?php get_footer(); ?>