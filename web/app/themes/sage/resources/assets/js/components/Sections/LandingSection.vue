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
            <h1 class="landing__central-elements--title">Vlad Bibire</h1>
            <h2 class="landing__central-elements--slug">
                Passionate about creating
                <vue-typer
                        :text='["websites.","web apps.","web platforms."]'
                        initial-action='erasing'
                        :pre-erase-delay='2500'
                        :erase-delay='100'
                        :pre-type-delay='100'
                        :type-delay='100'
                        erase-style='backspace'
                ></vue-typer>
            </h2>
            <a class="landing__central-elements--button btn btn-ghost" href="#about">Meet me</a>
        </div>
        <p class="landing__footer">all made in Southampton with ❤️ and ☕️</p>
    </section>
</template>

<script>
    import { VueTyper } from 'vue-typer'
    export default {
        name: 'landing-section',
        props: {
            'video': String
        },
        components: {
            VueTyper
        }
    }
</script>

