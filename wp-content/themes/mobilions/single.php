<?php get_header(); ?>
    <section class="blog-detail-hero-banner">
        <div class="banner-title-bg">
            <div class="wrap">
                <div class="hero-heading">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="bold-top-info">
                    <ul class="date-box">
                        <li>
                            <div class="user-post">
                                <?php
                                global $post;
                                $get_author_id = get_the_author_meta('ID');
                                $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                echo '<img src="' . $get_author_gravatar . '" title="' . get_the_author_meta('nickname') . '"" alt="' . get_the_author_meta('nickname') . '" />';
                                ?>
                                <h3><?php echo get_the_author_posts_link(); ?>
                                </h3>
                            </div>
                        </li>
                        <li class="date">
                            <span>Last updated: <?php the_modified_date(); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="space">
        <div class="blog-deatil-box">
            <div class="wrap">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="blog-detail-data">
                        <div class="blog-content">
                            <div class="post-inner">
                                <div class="entry-content">
                                    <?php the_content();

                                    if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
                                        ?>
                                        <?php
                                        global $post;
                                        $get_author_id = get_the_author_meta('ID');
                                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 550));
                                    }
                                    ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>