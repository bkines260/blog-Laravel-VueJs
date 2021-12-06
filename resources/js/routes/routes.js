import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Post from '../components/Posts.vue';
import PostDetails from '../components/PostDetails.vue';
import CategoryPosts from '../components/CategoryPosts.vue';



const routes=[
    {path:'/', component:Post,name:'posts'},
    {path:'/post/:slug',component:PostDetails,name:'GetPostDetails',props:true},
    {path:'/category/:slug/posts',component:CategoryPosts,name:'CategoryPosts',props:true}

];

const router = new VueRouter({
    routes,hashbang:false,mode:'history'
});
export default router ;
