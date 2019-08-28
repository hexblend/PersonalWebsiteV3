<template>
    <section id="contact" class="contact">
        <h3 class="contact__heading">{{ fields.title }}</h3>
        <p class="contact__subheading">{{ fields.subtitle }}</p>

        <div class="contact__information">
            <div class="contact__information--form" v-html="fields.form"></div>
            <div class="contact__information--links">
                <h3 class="contact__information--links__heading">{{ fields.social_media_title }}</h3>

                <div class="contact__information--links__row">
                    <p class="contact__information--links__row--service">Twitter:</p>
                    <a class="contact__information--links__row--link" href="http://twitter.com/vladbbr">twitter.com/vladbbr</a>
                </div>

                <div class="contact__information--links__row">
                    <p class="contact__information--links__row--service">LinkedIn:</p>
                    <a class="contact__information--links__row--link" href="http://twitter.com/vladbbr">linkedin.com/in/vladbbr</a>
                </div>

                <div class="contact__information--links__row">
                    <p class="contact__information--links__row--service">Github:</p>
                    <a class="contact__information--links__row--link" href="http://twitter.com/vladbbr">github.com/vladbbr</a>
                </div>

                <div class="contact__information--links__row">
                    <p class="contact__information--links__row--service">Email:</p>
                    <a class="contact__information--links__row--link" href="http://twitter.com/vladbbr">vladbbr1@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'contact-section',
        props: {
            contact_fields: String
        },
        data(){
            return {
                fields: JSON.parse(this.contact_fields)
            }
        },
        mounted(){
            console.log(this.fields);
        }
    }
</script>
