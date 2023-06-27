<?php
/* Template Name: Custom blog
*/
?>
<?php get_header(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => -1,
    'paged' => $paged,
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'published',
);
$custom_query = new WP_Query( $args );
?>
<script>

</script>
<section>
    <div class="blog-main-page banner-title-bg">
        <div class="wrap">
            <div class="hero-heading">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>
<section class="spacing">
    <div class="wrap tabs-section">

        <div class="blog-category-box tabcontent" id="latest">
            <div class="blog-col">
                <?php if($custom_query->have_posts() ): while($custom_query->have_posts()) :  $custom_query->the_post();
                ?>
                <div class="col">
                    <div class="blog-boxes">
                        <div class="blog-box-bg">
                            <div class="blog-box-img">
                                <a href=<?php the_permalink();?>>
                                    <figure><img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" title="<?= get_the_title(); ?>"></figure></a>
                            </div>
                            <div class="blog-box-title">
                                <div class="blog-box-date">
                                    <h3><?php echo get_the_author(); ?></h3>
                                    <div class="blog-box-line"></div>
                                    <h3 class="date-time"><?php echo get_the_date(); ?></h3>
                                </div>
                                <a href=<?php the_permalink() ?> title="<?php the_title();?>">
                                <?php the_title();?></a>
                                <?php the_excerpt(25); ?>
                            </div>
                        </div>
                        <div class="blog-box-bottom">
                                <a href=<?php the_permalink() ?> title=" <?php the_title();?> ">Read more</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
