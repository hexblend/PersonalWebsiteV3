<?php $__env->startSection('content'); ?>
    <div class="singleProject__banner" style="background-image: url('<?php echo e(get_field("project_banner_image")["url"]); ?>')">
        <div class="singleProject__banner--content mx-auto">
            <h2 class="singleProject__banner--title"><?php echo e(get_the_title()); ?> </h2>
            <p class="singleProject__banner--smallDesc"><?php echo e(get_field("project_small_description")); ?></p>
        </div>
    </div>
    
    <div class="singleProject__content mx-auto">
        <?php echo get_field("project_case_study"); ?>

    </div>
    
    <div class="singleProject__contact">
        <contact-section
            contact_fields='<?php echo json_encode($contact_fields); ?>'
            allLinks='<?php echo json_encode($social_media_links); ?>'
        ></contact-section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>