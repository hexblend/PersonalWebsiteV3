<!doctype html>
<html class="bg-white antialiased" <?php language_attributes() ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php body_class() ?>>

    <div id="app" role="document">
        
        <?php echo $__env->yieldContent('content'); ?>
        
            
                
            
        
    </div>
<?php do_action('get_footer') ?>

<?php wp_footer() ?>
</body>
</html>
