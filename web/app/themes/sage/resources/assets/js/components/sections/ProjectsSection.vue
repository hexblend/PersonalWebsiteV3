<template>
    <section class="projects" id="projects">
        <h3 class="projects__heading">{{ fields.title }}</h3>
        <div class="projects__previews-wrapper">
            <big-project-preview
                v-for="(project, index) in bigProjects"
                :key="index"
                :project="project"
                data-aos="zoom-in"
            ></big-project-preview>
            <project-preview
                v-for="(project, index) in smallProjects"
                :key="index"
                :project="project"
                data-aos="zoom-in"
            ></project-preview>
        </div>
    </section>
</template>

<script>
import ProjectPreview from "../ProjectPreview";
import BigProjectPreview from "../BigProjectPreview";
export default {
    name: "projects-section",
    components: { ProjectPreview, BigProjectPreview },
    data() {
        return {
            fields: JSON.parse(this.work_fields),
            projects: JSON.parse(this.allprojects)
        };
    },
    props: {
        allprojects: String,
        work_fields: String
    },
    computed: {
        smallProjects: function() {
            return this.projects.slice(2, this.projects.length);
        },
        bigProjects: function() {
            return this.projects.slice(0, 2);
        }
    }
};
</script>
