<template>
    <!-- END OF NAV -->
	<nav class="header tbp">
		<ul>
			<h1 data-top="-100" v-html="owner.name"></h1>
		</ul>
	</nav>    
</template>

<script>
export default {
    data () {
        return {
            owner: {
                name: '{ <span class="anim">_</span> naveen <span class="anim">_</span> }'
            }
        }
    }
}
</script>

<style>

</style>
