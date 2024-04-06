<?php

$cricket_tournament_post_args = array(
    'posts_per_page'    => get_theme_mod( 'cricket_tournament_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$cricket_tournament_number_of_post_columns = get_theme_mod('cricket_tournament_related_post_per_columns', 3);

$cricket_tournament_col_lg_post_class = 'col-lg-' . (12 / $cricket_tournament_number_of_post_columns);

$related = wp_get_post_terms( get_the_ID(), 'category' );
$cricket_tournament_ids = array();
foreach( $related as $term ) {
    $cricket_tournament_ids[] = $term->term_id;
}

$cricket_tournament_post_args['category__in'] = $cricket_tournament_ids; 

$related_posts = new WP_Query( $cricket_tournament_post_args );

if ( $related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php echo esc_html(get_theme_mod('cricket_tournament_related_post_heading',__('Related Posts','cricket-tournament')));?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="<?php echo esc_attr($cricket_tournament_col_lg_post_class); ?> col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content text-center">
                                    <h4 class="text-center py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    <div class="box-info">
                                        <?php $blog_archive_ordering = get_theme_mod('blog_meta_order', array('date', 'author', 'comment', 'category'));
                                        foreach ($blog_archive_ordering as $blog_data_order) : 
                                            if ('date' === $blog_data_order) : ?>
                                              <i class="far fa-calendar-alt mb-1"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
                                            <?php elseif ('author' === $blog_data_order) : ?>
                                              <i class="fas fa-user mb-1"></i><span class="entry-author"><?php the_author(); ?></span>
                                            <?php elseif ('comment' === $blog_data_order) : ?>
                                              <i class="fas fa-comments mb-1"></i><span class="entry-comments"><?php comments_number(__('0 Comments', 'cricket-tournament'), __('0 Comments', 'cricket-tournament'), __('% Comments', 'cricket-tournament')); ?></span>
                                            <?php elseif ('category' === $blog_data_order) :?>
                                                        <i class="fas fa-list mb-1"></i><span class="entry-category"><?php cricket_tournament_display_post_category_count(); ?></span>
                                            <?php endif;
                                        endforeach; ?>
                                    </div>
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('cricket_tournament_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('cricket_tournament_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn text-center mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'cricket-tournament' ); ?>"><?php echo esc_html(get_theme_mod('cricket_tournament_read_more_text',__('Read More','cricket-tournament')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();