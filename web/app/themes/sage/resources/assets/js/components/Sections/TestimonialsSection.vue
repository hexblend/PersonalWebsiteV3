<template>
    <section class="testimonials" id="testimonials">
        <div class="testimonials__heading mb-5">
            <h3 class="testimonials__heading--text">
                Word of mouth
            </h3>
        </div>

        <div class="testimonials__carousel">
            <carousel
                    :per-page="1"
                    :autoplay="true"
                    :autoplayTimeout="2000"
                    paginationColor="#a5a5a5"
                    paginationActiveColor="#474747"
            >
                <slide v-for="(testimonial, index) in testimonials" :key="index">
                    <blockquote class="testimonial__carousel--blockquote">
                        <p class="testimonial__carousel--startingQuotes">“</p>
                        <p class="testimonial__carousel--quote">{{ String(testimonial.quote) }}</p>
                        <footer class="testimonial__carousel--author">
                            {{ testimonial.author }}
                            <br>
                            <cite class="testimonial__carousel--position">
                                {{ testimonial.author_position }}
                            </cite>
                        </footer>
                        <p class="testimonial__carousel--endingQuotes">”</p>
                    </blockquote>
                </slide>
            </carousel>
        </div>
    </section>
</template>

<script>
    import {Carousel, Slide} from 'vue-carousel';
    export default {
        name: 'testimonial-section',
        components: {
            Carousel,
            Slide
        },
        data() {
          return {
              testimonials: JSON.parse(this.alltestimonials)
          }
        },
        props: {
            alltestimonials: String
        },
        mounted() {
            console.log(this.alltestimonials);
        }
    }
</script>
