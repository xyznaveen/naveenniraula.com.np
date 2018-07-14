<template>
    <!-- NAVIGATION MENU -->
	<nav class="nav top-nav">
		<ul class="top-nav-container">
			<li><router-link to="/">Home</router-link></li><!--
			--><li><router-link to="/projects">Projects</router-link></li><!--
			--><li><router-link to="/stack">Stack</router-link></li><!--
			--><li><router-link to="/contact">Contact</router-link></li>
		</ul>
	</nav>
</template>

<script>
export default {
    name: 'NavigationMenu'
}
</script>
