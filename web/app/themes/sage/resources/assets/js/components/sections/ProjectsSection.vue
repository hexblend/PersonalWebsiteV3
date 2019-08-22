<template>
    <section class="projects" id="projects">
        <h3 class="projects__heading">{{ fields.title }}</h3>
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
                fields: JSON.parse(this.work_fields),
                projects: JSON.parse(this.allprojects)
            }
        },
        props: {
            allprojects: String,
            work_fields: String
        },
    }
</script>
