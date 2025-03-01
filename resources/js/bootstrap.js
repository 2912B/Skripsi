window._ = require("lodash");

try {
    require("bootstrap");
} catch (e) {}

// Load Axios for HTTP requests
window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
