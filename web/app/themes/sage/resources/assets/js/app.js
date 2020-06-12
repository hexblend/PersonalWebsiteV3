// Import IE polyfill for Vue
import "babel-polyfill";

// Require bootstrapped js
require("./bootstrap");

// Require Axios
window.axios = require("axios");

// Require Jquery
window.$ = require("jquery");
window.JQuery = require("jquery");

// Require Animate on Scroll
import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

// Require Vue
window.Vue = require("vue");

// Require Vue-smooth-scroll
import vueSmoothScroll from "vue2-smooth-scroll";
Vue.use(vueSmoothScroll);

import Navbar from "./components/Navbar";
import LandingSection from "./components/sections/LandingSection";
import ProjectsSection from "./components/sections/ProjectsSection";
import TestimonialsSection from "./components/sections/TestimonialsSection";
import AboutSection from "./components/sections/AboutSection";
import PackagesSection from "./components/sections/PackagesSection";
import ContactSection from "./components/sections/ContactSection";

const app = new Vue({
    el: "#app",
    components: {
        Navbar,
        LandingSection,
        ProjectsSection,
        TestimonialsSection,
        AboutSection,
        PackagesSection,
        ContactSection
    }
});
