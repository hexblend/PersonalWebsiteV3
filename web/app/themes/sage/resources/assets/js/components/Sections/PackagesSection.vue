<template>
    <section class="packages" id="packages" v-if="fields.show_section['value'] === 'Yes'">
        <h3 class="packages__heading">{{ fields.title }}</h3>
        <p class="packages__subheading">{{ fields.subtitle }}</p>
        <div class="packages__wrapper">
            <single-package
                v-for="(spackage, index) in packages"
                :key="index"
                :spackage="spackage"
            ></single-package>
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
                fields: JSON.parse(this.packages_fields),
                packages: JSON.parse(this.allpackages)
            }
        },
        props: {
            packages_fields: String,
            allpackages: String
        }
    }
</script>
