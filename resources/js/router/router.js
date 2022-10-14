import { createWebHashHistory, createRouter } from 'vue-router'
import Home from './../pages/home.vue'
import Posts from './..//pages/posts.vue'
import SinglePost from './../components/singlePost.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },

    {
        path: '/posts',
        name: 'Posts',
        component: Posts,
    },

    {
        path: '/single-post/:id',
        name: 'singlePost',
        component: SinglePost,
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router;