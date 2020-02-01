<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article>
    <?php
        the_title();
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">'. __('Pages:', 'twentyseventeen'), 'after' => '</div>',
        ));
    ?>
</article>