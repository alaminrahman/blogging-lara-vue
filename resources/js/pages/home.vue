<template>
    <div>
        <Breadcrub title="Home page"/>
        <featurePosts />
    </div>
</template>

<script>
    import Breadcrub from './../components/breadcrumb.vue'
    import featurePosts from './../components/featurePosts.vue'

    export default{
        name: 'Home',
        components: {
            Breadcrub,
            featurePosts,
        },
    }
</script>