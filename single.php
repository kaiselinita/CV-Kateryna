<?php get_header(); ?>


<main>
    <?php if(have_posts()); ?>
    <div class="cover">
        <?php the_post_thumbnail(); ?>
</div>

<?php while(have_posts()): the_post(); ?>
<h1><?php the_title(); ?></h1>
<p>
    <?php the_content(); ?>
</p>
<?php endwhile; ?>

<?php else: ?>
    I don't have article
    