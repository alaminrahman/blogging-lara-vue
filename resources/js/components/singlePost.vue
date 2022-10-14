<template>
	<div class="container">
		<section class="featured-posts">
			<div class="section-title">
				<h2><span>{{ post.title }}</span></h2>
			</div>

			<div class="row">
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- begin post -->
					<div class="card" >

						<img v-if="post.thumbnail != NULL" class="card-img-top" width="" :src="post.thumbnail"  />

						<img v-else class="card-img-top" width="" src="frontend/assets/img/demopic/1.jpg" />

						<div class="card-body p-3">
							<small>Post At : {{ this.formatDate(post.created_at) }}</small>
							<hr>
							<p class="card-text">{{ post.description }}</p>
							
						</div>
					</div>					
					<!-- end post -->	
					
				</div><!--End col-->
			</div><!--End row-->

		</section>
	</div>
</template>

<script>
	import moment from 'moment'

	export default{
		name: 'featurePosts',
		data () {
			return {
				id: this.$route.params.id,
				post: []
			}
		},
        created(){
            this.init()
        },
        methods: {
            async init(){

                axios.get('api/posts/'+this.id).then(res => {
                    this.post = res.data.data
                })
            }, 
			formatDate(value){
				if (value) {
					var date = moment(String(value)).format(`MMM Do YY`)
					return date;
				}
			}
        },
	}
</script>