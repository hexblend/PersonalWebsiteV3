<time datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo e(get_the_date()); ?></time>
<p>
    <?php echo e(__('By', 'sage')); ?>

    <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author">
        <?php echo e(get_the_author()); ?>

    </a>
</p>
