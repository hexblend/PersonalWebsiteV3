<template>
    <section class="projects" id="projects">
        <h3 class="projects__heading mb-4">Some of my work</h3>
        <div class="projects__previews-wrapper">
                <project-preview v-for="(project, index) in projects" :key="index"></project-preview>
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
                projects: [
                    { title: 'Project 1' },
                    { title: 'Project 2' },
                    { title: 'Project 3' },
                    { title: 'Project 4' },
                ]
            }
        }
    }
</script>
