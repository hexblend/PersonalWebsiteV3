<template>
    <section class="landing" id="landing">
        <div class="landing__video-container">
            <video autoplay muted loop class="landing__video-container--video">
                <source :src="video" type="video/mp4">
            </video>
        </div>
        <div class="landing__video-gradient"></div>
        <div class="landing__central-elements">
            <div class="landing__central-elements--logo"></div>
            <h1 v-if="name" class="landing__central-elements--title">{{ name }}</h1>
            <h2 v-if="slug" class="landing__central-elements--slug">
                {{ slug }}
                <vue-typer
                        :text='[slug_ending_1, slug_ending_2, slug_ending_3]'
                        initial-action='erasing'
                        :pre-erase-delay='2500'
                        :erase-delay='100'
                        :pre-type-delay='100'
                        :type-delay='100'
                        erase-style='backspace'
                ></vue-typer>
            </h2>
            <a v-if="button_text" class="landing__central-elements--button btn btn-ghost" href="#about">{{button_text}}</a>
        </div>
        <p v-if="bottom_text" class="landing__footer">{{bottom_text}}️</p>
    </section>
</template>

<script>
    import { VueTyper } from 'vue-typer'
    export default {
        name: 'landing-section',
        data() {
            return {
                endings: [this.slug_ending_1, this.slug_ending_2, this.slug_ending_3]
            }
        },
        props: {
            'video': String,
            'name': String,
            'slug': String,
            'slug_ending_1': String,
            'slug_ending_2': String,
            'slug_ending_3': String,
            'button_text': String,
            'bottom_text': String
        },
        components: {
            VueTyper
        }
    }
</script>

