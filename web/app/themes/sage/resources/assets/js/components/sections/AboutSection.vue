<template>
    <section class="about" id="about">
        <div class="about__texture"></div>
        <div class="about__content">
            <div class="about__content--text">
                <h3 class="about__heading">{{ fields.heading }}</h3>
                <div v-html="fields.content"></div>
            </div>
            <div class="about__content--image"
                 :style= "{
                    background: `url('${this.fields.image.url}') no-repeat center center`,
                    backgroundSize: 'cover'
                 }"
            ></div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'about-section',
        props: {
            about_fields: String
        },
        data() {
            return {
                fields: JSON.parse(this.about_fields)
            }
        }
    }
</script>
