<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<div class="container" style="padding:3rem 1.5rem;">
    <?php
    while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom:2rem;">
                <h1 style="color:#6B8E23;font-size:2.5rem;"><?php the_title(); ?></h1>
            </header>
            
            <div class="entry-content" style="line-height:1.8;">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</div>

<?php
get_footer();
