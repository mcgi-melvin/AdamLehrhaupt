<?php
$args = [
    'post_type' => 'book',
    'posts_per_page' => $atts['count'] ?? 10,
];
$query = new WP_Query( $args );
if( $query->have_posts() ) :
?>
<div class="book-list">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <a class="book-item" href="<?php the_permalink() ?>" aria-label="<?php the_title() ?>"  >
            <?php if( has_post_thumbnail() ): ?>
                <div class="book-thumbnail">
                    <?php the_post_thumbnail() ?>
                </div>
            <?php endif; ?>
            <div class="book-content">
                <h3><?php the_title() ?></h3>
                <div class="description">
                    <?php the_excerpt() ?>
                </div>
            </div>
        </a>
    <?php endwhile; ?>
</div>
<?php endif; ?>