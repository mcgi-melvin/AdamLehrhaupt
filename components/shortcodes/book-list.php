<?php
$args = [
    'post_type' => 'book',
    'posts_per_page' => $atts['count'] ?? 10,
];
$query = new WP_Query( $args );
if( $query->have_posts() ) :
?>
<style>
    .book-container .book-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
        gap: 20px
    }
    .book-container .book-list .book-item {
        display: flex;
        flex-direction: column;
        background-color: var(--color-sea);
        border: 1px solid var(--color-navy);
        padding: 20px;
        border-radius: 20px;
        text-align: center;
        text-decoration: none;
        color: #fff;
    }
    .book-container .book-list .book-item .book-thumbnail {
        width: 200px;
        margin-left: auto;
        margin-right: auto;
    }
    .book-container .book-list .book-item h3 {
        color: #fff;
        font-size: 22px;
        font-style: italic;
        text-decoration: underline;
    }
</style>
<div class="book-container">
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
    <div class="book-pagination">

    </div>
    <div class="book-loader">

    </div>
</div>
<?php endif; ?>