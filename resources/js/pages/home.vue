<template>
    <div>
        <Breadcrub title="Home page"/>
        <featurePosts :posts="posts"/>
    </div>
</template>

<script>
    import Breadcrub from './../components/breadcrumb.vue'
    import featurePosts from './../components/featurePosts.vue'
    import axios from 'axios'

    export default{
        name: 'Home',
        components: {
            Breadcrub,
            featurePosts,
        },

        data (){
            return {
                posts: [],
            }
        },
        created(){
            this.init()
        },
        methods: {
            async init(){

                axios.get('api/posts?postItem=10').then(res => {
                    this.posts = res.data.data
                    console.log(res.data.data)
                })
            }
        },
    }
</script>