<template>
	<div>
		<!-- Begin Site Title
		================================================== -->
		<div class="container">
			<div class="mainheading">
				<h1 class="sitetitle">{{title}}</h1>
				<p class="lead">
					 Technical ninja blogging
				</p>
			</div>
		</div>
		<!-- End Site Title
		================================================== -->
	</div>
</template>

<script> 
	export default{
		name: 'Breadcrub',
		props: {
			title: String,
		},

		created (){
			console.log(this.title)
		}
	}
</script>