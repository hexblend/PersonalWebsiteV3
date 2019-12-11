<?php $__env->startSection('content'); ?>
    <landing-section video="<?= App\asset_path('video/sea.mp4'); ?>" landing_fields='<?php echo json_encode($landing_fields); ?>'></landing-section>
    <div class="wrapper">
        <projects-section allProjects='<?php echo json_encode($projects); ?>'></projects-section>
        <testimonials-section allTestimonials='<?php echo json_encode($testimonials); ?>'></testimonials-section>
    </div>
    <about-section about_fields='<?php echo json_encode($about_fields); ?>'></about-section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>