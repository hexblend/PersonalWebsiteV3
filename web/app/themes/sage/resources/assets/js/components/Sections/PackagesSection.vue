<template>
    <section class="packages" id="packages">
        <h3 class="packages__heading">{{ fields.title }}</h3>
        <p class="packages__subheading">{{ fields.subtitle }}</p>
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
        data(){
            return {
                fields: JSON.parse(this.packages_fields)
            }
        },
        props: {
            packages_fields: String
        }
    }
</script>
