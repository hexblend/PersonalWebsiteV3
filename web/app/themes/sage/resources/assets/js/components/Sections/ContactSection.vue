<template>
    <section id="contact" class="contact">
        <h3 class="contact__heading">{{ fields.title }}</h3>
        <p class="contact__subheading">{{ fields.subtitle }}</p>

        <div class="contact__information">
            <div class="contact__information--form" v-html="fields.form"></div>
            <div class="contact__information--links">
                <h3 class="contact__information--links__heading">{{ fields.social_media_title }}</h3>
                <div v-for="(link, index) in links" :key="index" class="contact__information--links__row">
                    <p class="contact__information--links__row--service">{{ link.title + ':' }}</p>
                    <a v-if="link.URL" class="contact__information--links__row--link" :href="link.URL">{{ link.link_body }}</a>
                    <a v-else-if="link.phone" class="contact__information--links__row--link" :href="'tel:' + link.phone">{{ link.link_body }}</a>
                    <a v-else="link.email" class="contact__information--links__row--link" :href="'mailto:' + link.email">{{ link.link_body }}</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'contact-section',
        props: {
            contact_fields: String,
            alllinks: String
        },
        data(){
            return {
                fields: JSON.parse(this.contact_fields),
                links: JSON.parse(this.alllinks),
            }
        }
    }
</script>
