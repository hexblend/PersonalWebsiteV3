<template>
    <section class="projects" id="projects">
        <h3 class="projects__heading">Some of my work</h3>
        <div class="projects__previews-wrapper">
                <project-preview v-for="(project, index) in projects" :key="index" :project="project"></project-preview>
        </div>
    </section>
</template>

<script>
    import ProjectPreview from "../ProjectPreview";
    export default {
        name: 'projects-section',
        components: {ProjectPreview},
        data(){
            return {
                projects: JSON.parse(this.allprojects)
            }
        },
        props: {
            allprojects: String
        }
    }
</script>
