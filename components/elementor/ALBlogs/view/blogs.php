<?php
$settings = $this->get_settings_for_display();

$args = [
    'posts_per_page' => $settings['posts_per_page'],
];

$query = new WP_Query($args);
if ($query->have_posts()):
?>
<div class="al-posts-wrapper <?= $this->get_unique_selector() ?>">
    <div class="al-posts">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="al-post">
                <div class="al-post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="al-post-content">
                    <h3 class="al-post-content-heading"><?= get_the_title() ?></h3>
                    <div class="al-post-content-description">
                        <?= get_the_excerpt() ?>
                    </div>
                </div>
                <div class="al-post-button-container">
                    <a href="<?= get_the_permalink() ?>">Read More</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="al-posts-pagination">
        <?php
        $big = 999999999;
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $query->max_num_pages
        ) );
        ?>
    </div>
</div>
<?php
    wp_reset_postdata();
endif;
?>
