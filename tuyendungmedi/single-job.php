<?php
get_header();

$job_address = rwmb_meta('job-address') ? rwmb_meta('job-address') : '';
$job_money   = rwmb_meta('job-money') ? rwmb_meta('job-money') : '';
$job_number  = rwmb_meta('job-number') ? rwmb_meta('job-number') : '';
$job_date    = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
$job_content = rwmb_meta('job-content') ? rwmb_meta('job-content') : [];
$check_date  = compare_date($job_date);
?>
<main id="page-content" class="page-content single-job">
    <?php get_template_part('components/breadcrumb') ?>
    <div class="background-page">
        <div class="background-radient-top"></div>
        <div class="background-radient-bottom"></div>
        <div class="container">
            <div class="row boder-row">
                <div class="col-md-8">
                    <h1 class="page-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="box-info">
                        <div class="info-meta">
                            <p class="info-item item-flex">
                                <span class="item-child">
                                    <img class="item-img" src="<?php echo THEME_URI; ?>/images/map.svg" alt="">
                                    <?php echo $job_address; ?>
                                </span>
                                <span class="item-child">
                                    <img class="item-img" src="<?php echo THEME_URI; ?>/images/dollar-circle2.svg"
                                        alt="">Mức lương: <b>
                                        <?php echo $job_money; ?>
                                    </b>
                                </span>
                            </p>
                            <p class="info-item"><img class="item-img" src="<?php echo THEME_URI; ?>/images/user-01.svg"
                                    alt="">Số lượng ứng
                                tuyển: <b>
                                    <?php echo $job_number; ?>
                                </b></p>
                            <p class="info-item"><img class="item-img" src="<?php echo THEME_URI; ?>/images/clock2.svg"
                                    alt="">Ngày hết hạn:
                                <b class="<?php if (!$check_date)
                                    echo "text-danger"; ?>">
                                    <?php echo $job_date; ?>
                                </b>
                            </p>
                        </div>
                        <a href="#ung-tuyen" class="btn-bg smoothScroll">Ứng tuyển ngay</a>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <?php if (count($job_content) > 0): ?>
                                <div class="box-toc box-shadow">
                                    <ul class="list-title">
                                        <?php
                                        foreach ($job_content as $key => $value) {
                                            ?>
                                            <li class="item <?php if ($key < 1)
                                                echo "active"; ?>"><a class="smoothScroll"
                                                    href="#<?php echo format_title_content($value['job-content-title']); ?>">
                                                    <?php echo $value['job-content-title']; ?>
                                                </a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-9">
                            <div class="box-content box-shadow">
                                <div class="entry">
                                    <?php
                                    if (count($job_content) > 0):
                                        foreach ($job_content as $key => $value) {
                                            ?>
                                            <h2 id="<?php echo format_title_content($value['job-content-title']); ?>">
                                                <?php echo $value['job-content-title']; ?>
                                            </h2>
                                            <?php
                                            if ($value['show_type'] == 'content'):
                                                ?>
                                                <?php echo $value['job-content-desc']; ?>
                                                <?php
                                            else:
                                                if (count($value['job-content-image']) > 0) {
                                                    ?>
                                                    <div class="list-department-top slick-style">
                                                        <?php
                                                        foreach ($value['job-content-image'] as $key_img => $img) {
                                                            $url = wp_get_attachment_image_url($img, 'medium');
                                                            ?>
                                                            <div class="item">
                                                                <img src="<?php echo $url; ?>" alt="">
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="list-department-bottom slick-style">
                                                        <?php
                                                        foreach ($value['job-content-image'] as $key_img => $img) {
                                                            $url = wp_get_attachment_image_url($img, 'medium');
                                                            ?>
                                                            <div class="item">
                                                                <img src="<?php echo $url; ?>" alt="">
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php
                                                }
                                            endif;
                                        }
                                        ?>
                                    <?php endif; ?>
                                </div>
                                <form action="" class="form form-recruitment" id="ung-tuyen">
                                    <h3 class="form-title">Ứng Tuyển
                                        <span><img src="<?php echo THEME_URI; ?>/images/icon-form-line.png"
                                                alt="">Ngay</span>
                                    </h3>
                                    <div class="form-row">
                                        <div class="col-md-12 form-custom">
                                            <input type="text" name="fullname" class="form-control form-custom-item"
                                                placeholder="Họ tên" required>
                                        </div>
                                        <div class="col-md-12 form-custom">
                                            <input type="text" name="numberphone" class="form-control form-custom-item"
                                                placeholder="Số điện thoại" required>
                                        </div>
                                        <div class="col-md-12 form-custom">
                                            <input type="text" name="email" class="form-control form-custom-item"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-12 form-custom">
                                            <input type="text" class="form-control form-custom-item inputcv"
                                                placeholder="CV của bạn">
                                            <input type="file" name="cv" class="form-control form-custom-item uploadcv"
                                                accept="application/pdf" hidden>
                                            <input type="text" name="job" class="form-control form-custom-item"
                                                value="<?php the_title(); ?>" hidden>
                                            <img src="<?php echo THEME_URI; ?>/images/upload.svg" alt=""
                                                class="form-icon-upload">
                                        </div>
                                        <button class="btn form-btn">Gửi CV ngay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar('banner'); ?>
                <?php
                $args_top_job  = array(
                    'post_type'      => 'job',
                    'post_status'    => 'publish',
                    'posts_per_page' => 4,
                    'order'          => 'desc',
                    'post__not_in'   => array(get_the_ID()),
                    'meta_query'     => array(
                        array(
                            'key'     => 'job_top',
                            'value'   => 1,
                            'compare' => '=',
                        )
                    ),
                );
                $list_post_job = new WP_Query($args_top_job);
                if ($list_post_job->have_posts()):
                    ?>
                    <h2 class="side-title">Vị trí nổi bật</h2>
                    <div class="list-job-side">
                        <?php
                        while ($list_post_job->have_posts()):
                            $list_post_job->the_post();
                            $job_date = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
                            if (compare_date($job_date)) {
                                get_template_part('components/post_job');
                            }
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="prominent-location">
            <?php
            $args_job = array(
                'post_type'      => 'job',
                'post_status'    => 'publish',
                'posts_per_page' => 4,
                'order'          => 'desc',
                'post__not_in'   => array(get_the_ID()),
            );
            $list_job = new WP_Query($args_job);
            if ($list_job->have_posts()):
                ?>
                <h2 class="section-title text-center">Các job đang tuyển dụng tại Medinet</h2>
                <div class="row list-recruitment slick-style">
                    <?php
                    while ($list_job->have_posts()):
                        $list_job->the_post();
                        $job_date = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
                        if (compare_date($job_date)) {
                            ?>
                            <div class="col-md-3 item">
                                <?php get_template_part('components/post_job_big'); ?>
                            </div>
                            <?php
                        }
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
            endif;
            ?>
        </div>

    </div>
    </div>
    </div>
</main>
<?php
get_footer();