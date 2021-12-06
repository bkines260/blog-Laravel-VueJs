import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Post from '../components/Posts.vue';
import PostDetails from '../components/PostDetails.vue';

const GetPostDetails = {
    props: ['slug']
}

const routes=[
    {path:'/', component:Post,name:'posts'},
    {path:'/post/:slug',component:PostDetails,name:'GetPostDetails',props: true }
];

const router = new VueRouter({
    routes,hashbang:false,mode:'history'
});
export default router ;
