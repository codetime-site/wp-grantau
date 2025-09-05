<?php get_header(); ?>
<main role="main">
    <div class="container">
        <h1>page.php</h1>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            <?php endwhile; else: ?>
            <p><?php esc_html_e('Извините, записей не найдено.'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>