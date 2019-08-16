<template>
    <div class="project-preview" :style="[this.project.preview_image ? dynamicBG : '']">
        <div class="project-preview__info">
            <h5 class="project-preview__info--name">{{ project.name }}</h5>
            <p class="project-preview__info--description">{{ project.description }}</p>
            <a :href="project.permalink" class="project-preview__info--permalink">See project</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'project-preview',
        data() {
            return {
                dynamicBG: {
                    background: `url('${this.project.preview_image.url}') no-repeat center center`,
                    backgroundSize: 'cover'
                }
            }
        },
        props: {
            project: Object
        }
    }
</script>
