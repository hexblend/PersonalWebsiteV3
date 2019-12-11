<nav role="navigation" aria-label="main navigation">
    <div>
        <a href="<?php echo e(home_url('/')); ?>">
            <?php echo e(get_bloginfo('name', 'display')); ?>

        </a>
    </div>
    <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']); ?>

    <?php endif; ?>
</nav>
