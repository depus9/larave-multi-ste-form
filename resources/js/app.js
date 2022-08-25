import "./bootstrap";
window.Vue = require("vue").default;

//Vue Router Initiate
import VueRouter from "vue-router";
Vue.use(VueRouter);

//Vuetify Plugin Initiate
import Vuetify from "vuetify";
Vue.use(Vuetify);

//Validation Plugin Initiate
import Vuelidate from "vuelidate";
Vue.use(Vuelidate);

Vue.component(
  "MultiStepForm",
  require("./components/Company/MultiStepForm.vue").default
);

const app = new Vue({
  vuetify: new Vuetify(),
  el: "#app",
});
