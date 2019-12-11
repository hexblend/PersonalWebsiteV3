<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <landing-section
        video="<?= App\asset_path('video/sea.mp4'); ?>"
        landing_fields='<?php echo json_encode($landing_fields); ?>'
    ></landing-section>

    <div class="wrapper-small">
        
        <projects-section
            work_fields='<?php echo json_encode($work_fields); ?>'
            allProjects='<?php echo json_encode($projects); ?>'
        ></projects-section>

        
        <testimonials-section
            testimonials_fields='<?php echo json_encode($testimonials_fields); ?>'
            allTestimonials='<?php echo json_encode($testimonials); ?>'
        ></testimonials-section>
    </div>

    
    <about-section
        about_fields='<?php echo json_encode($about_fields); ?>'
    ></about-section>

    <div class="wrapper-large">
        
        <packages-section
            packages_fields='<?php echo json_encode($packages_fields); ?>'
            allPackages='<?php echo json_encode($packages); ?>'
        ></packages-section>

        
        <contact-section
            contact_fields='<?php echo json_encode($contact_fields); ?>'
            allLinks='<?php echo json_encode($social_media_links); ?>'
        ></contact-section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>