<template>
    <section class="packages" id="packages">
        <h3 class="packages__heading">Let's collaborate!</h3>
        <p class="packages__subheading">Have an idea for a project? Check out my services and get in touch</p>
        <div class="packages__wrapper">
            <single-package></single-package>
        </div>
    </section>
</template>

<script>
    import SinglePackage from "../SinglePackage";
    export default {
        name: 'packages-section',
        components: {SinglePackage},
    }
</script>
