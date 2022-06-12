import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);




import welcome from "./components/pages/home.vue";

const routers = [
    {
        path: "/",
        component: welcome,
        name:welcome
    },
  
   

];


export default new VueRouter({
    routes: routers,
    mode: 'history'
});