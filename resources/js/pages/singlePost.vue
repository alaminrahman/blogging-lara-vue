<template>
    <div>
        <Breadcrub title="Single Posts Page"/>
        <SinglePost />
    </div>
</template>

<script>
    import Breadcrub from './../components/breadcrumb.vue'
    import SinglePost from './../components/singlePost.vue'

    export default{
        name: 'singlePost',
        components: {
            Breadcrub,
            SinglePost,
        },
    }
</script>