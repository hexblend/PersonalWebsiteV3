// Import IE polyfill for Vue
import "babel-polyfill"

// Require bootstrapped js
require("./bootstrap")

// Require Vue
window.Vue = require("vue")

import HelloWorld from "./components/HelloWorld"

const app = new Vue({
    el: "#app",
    components: {
        HelloWorld
    }
})
