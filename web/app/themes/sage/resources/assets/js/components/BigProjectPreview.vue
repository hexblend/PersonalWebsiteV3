<template>
    <div style="width: 100%;">
        <div
            class="big-project-preview"
            :style="[this.project.banner ? dynamicBG : '']"
        >
            <div
                class="big-project_logo"
                :style="[this.project.logo ? dynamicLogo : '']"
            ></div>
            <div class="big-project-info">
                <p class="big-project-info--description">
                    {{ project.description }}
                </p>
                <a :href="project.permalink" class="big-project-info--permalink"
                    >See project</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "big-project-preview",
    data() {
        return {
            dynamicBG: {
                background: `url('${
                    this.project.banner.url
                }') no-repeat center center`,
                backgroundSize: "cover"
            },
            dynamicLogo: {
                background: `url('${
                    this.project.logo.url
                }') no-repeat center center`,
                backgroundSize: "cover"
            }
        };
    },
    props: {
        project: Object
    }
};
</script>
