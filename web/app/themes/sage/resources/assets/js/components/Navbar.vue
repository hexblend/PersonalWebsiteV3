<template>
    <nav role="navigation" class="navbar">
        <ul class="navbar__links">
            <li v-for="link in links">
                <a
                    :href="link.link"
                    @mouseover="link.active = true"
                    @mouseleave="link.active = false"
                    :style="!link.active ? 'padding-left: 16px;' : ''"
                    :class="changeTextColor"
                    >{{ link.active ? link.label : link.placeholder }}</a
                >
            </li>
        </ul>
        <!-- <p class="navbar__persentege" :class="changeTextColor">
            {{ scrolled }}%
        </p> -->
    </nav>
</template>

<script>
export default {
    name: "navbar",
    data() {
        return {
            scrolled: 0,
            links: [
                {
                    link: "/#home",
                    label: "Home",
                    placeholder: "·",
                    active: false
                },
                {
                    link: "/#projects",
                    label: "Projects",
                    placeholder: "·",
                    active: false
                },
                {
                    link: "/#testimonials",
                    label: "Testimonials",
                    placeholder: "·",
                    active: false
                },
                {
                    link: "/#about",
                    label: "About",
                    placeholder: "·",
                    active: false
                },
                {
                    link: "/#contact",
                    label: "Contact",
                    placeholder: "·",
                    active: false
                }
            ]
        };
    },
    computed: {
        changeTextColor() {
            if (this.scrolled >= 0 && this.scrolled < 13) {
                return "changeWhite";
            } else if (this.scrolled > 13 && this.scrolled < 63) {
                return "changeBlue";
            } else if (this.scrolled > 63 && this.scrolled < 84) {
                return "changeWhite";
            } else {
                return "changeBlue";
            }
        }
    },
    methods: {
        getDocHeight() {
            let D = document;
            return Math.max(
                D.body.scrollHeight,
                D.documentElement.scrollHeight,
                D.body.offsetHeight,
                D.documentElement.offsetHeight,
                D.body.clientHeight,
                D.documentElement.clientHeight
            );
        },
        handleScroll() {
            let winheight = window.innerHeight;
            let scrollTop = window.pageYOffset;
            let docheight = this.getDocHeight();
            let trackLength = docheight - winheight;
            let prc = Math.floor((scrollTop / trackLength) * 100);
            this.scrolled = prc;

            if (this.scrolled >= 0 && this.scrolled < 13) {
                this.links[0].active = true;
                this.links[1].active = false;
                this.links[2].active = false;
                this.links[3].active = false;
                this.links[4].active = false;
            } else if (this.scrolled > 13 && this.scrolled < 50) {
                this.links[0].active = false;
                this.links[1].active = true;
                this.links[2].active = false;
                this.links[3].active = false;
                this.links[4].active = false;
            } else if (this.scrolled > 50 && this.scrolled < 65) {
                this.links[0].active = false;
                this.links[1].active = false;
                this.links[2].active = true;
                this.links[3].active = false;
                this.links[4].active = false;
            } else if (this.scrolled > 65 && this.scrolled < 80) {
                this.links[0].active = false;
                this.links[1].active = false;
                this.links[2].active = false;
                this.links[3].active = true;
                this.links[4].active = false;
            } else if (this.scrolled > 80) {
                this.links[0].active = false;
                this.links[1].active = false;
                this.links[2].active = false;
                this.links[3].active = false;
                this.links[4].active = true;
            }
        }
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.handleScroll);
    }
};
</script>
