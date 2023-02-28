<?php
$kidba_blog_btn_switch = get_theme_mod( 'kidba_blog_btn_switch', true );
$kidba_blog_author = get_theme_mod( 'kidba_blog_author', true );
$kidba_blog_date = get_theme_mod( 'kidba_blog_date', true );
$kidba_blog_comments = get_theme_mod( 'kidba_blog_comments', true );
$kidba_blog_btn = get_theme_mod( 'kidba_blog_btn', __('READ MORE', 'kidba') );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog mb-50'); ?>>
    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) :?>
        <div class="blog-image w_100">
            <?php  
                $att=get_post_thumbnail_id();
                $image_src = wp_get_attachment_image_src( $att, 'full' );
                $image_src = $image_src[0]; 
            ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_src); ?>" alt="<?php the_title_attribute(); ?>"></a>
        </div>
    <?php endif; ?>
    <div class="single-blog-txt p-40 px-45">
        <div class="single-blog-info d-flex flex-wrap align-items-center">
            <?php if(!empty($kidba_blog_date)) : ?>
                <span class="d-flex align-items-center lh-0 mb-20"><span class="fz-14 mr-10"><i class="icofont-calendar"></i></span><?php echo get_the_date(); ?></span>
            <?php endif; ?>
            <?php if(!empty($kidba_blog_author)) : ?>
                <span class="d-flex align-items-center lh-0 mb-20"><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><span class="fz-14 mr-10"><i class="icofont-user-alt-7"></i></span><?php print get_the_author();?></a></span>
            <?php endif; ?>
            <?php if(!empty($kidba_blog_comments)) : ?>
                <a href="<?php comments_link();?>"><span class="d-flex align-items-center lh-0 mb-20"><span class="fz-14 mr-10"><i class="icofont-speech-comments"></i></span><?php comments_number();?></span></a>
            <?php endif; ?>
        </div>
        <h3 class="blog-page-blog-title mb-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="single-blog-p"><?php echo get_the_excerpt(); ?></p>
        <?php if(!empty($kidba_blog_btn_switch)) : ?>
        <?php if(!empty($kidba_blog_btn)) : ?>
        <div class="blog_button mt-30">
            <a href="<?php the_permalink(); ?>" class="def-btn"><?php echo esc_html($kidba_blog_btn); ?></a>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</article>