<template>
    <nav role="navigation" class="navbar" :style="[full_nav ? {justifyContent: 'space-between'} : '']">
        <a class="navbar__brand" href="/#" v-if="full_nav" data-aos="fade-down">{{ brand_name }}</a>
        <!-- Nav links (from navbar.blade.php) -->
        <slot></slot>
    </nav>
</template>

<script>
    /* Todo:
    *  Redo the nav fully in Vue
    *  Get rid of Jquery for .active class
    * */
    export default {
        name: 'navbar',
        data() {
            return {
                brand_name: 'Vlad Bibire',
                full_nav: false
            }
        },
        methods: {
            handleScroll() {
                // Distance from top
                let scrollFromTop = $(window).scrollTop();
                scrollFromTop > 10 ? this.full_nav = true : this.full_nav = false;

                // Add bg when reach projects section
                let projectsPosition = $("#projects").offset().top;
                let scrollPosition = window.scrollY;
                if(projectsPosition - 150 < scrollPosition){
                    $(".navbar").css({background: "#0672a4", top: 0});
                } else {
                    $(".navbar").css({background: "transparent", top: '24px'});
                }
            },
            smoothScroll() {
                // Select all links with hashes
                $('a[href*="#"]').click(function(event) {
                    // On-page links
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname){
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        $('html, body').animate({
                            scrollTop: (target.offset().top) - 100
                        }, 800);
                    }
                });
            },
            addActiveClass() {
                // Add .active to wordpress nav links
                $('a[href*="#"]').click(function(event) {
                    if( $('a[href*="#"]').hasClass('active') ) {
                        $('a[href*="#"]').removeClass('active')
                    }
                    $(this).addClass('active');
                });
            }
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
            this.smoothScroll();
            this.addActiveClass();
        }
    }
</script>
