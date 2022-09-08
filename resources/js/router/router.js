import { createWebHashHistory, createRouter } from 'vue-router'
import Home from './../pages/home.vue'
import Posts from './..//pages/posts.vue'

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
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router;