// Import IE polyfill for Vue
import "babel-polyfill"

// Require bootstrapped js
require("./bootstrap")

// Require Vue
window.Vue = require("vue");

import LandingSection from "./components/sections/LandingSection"
import ProjectsSection from "./components/sections/ProjectsSection"
import TestimonialsSection from "./components/sections/TestimonialsSection"
import AboutSection from "./components/sections/AboutSection"
import PackagesSection from "./components/sections/PackagesSection"

const app = new Vue({
    el: "#app",
    components: {
        LandingSection,
        ProjectsSection,
        TestimonialsSection,
        AboutSection,
        PackagesSection
    }
})
