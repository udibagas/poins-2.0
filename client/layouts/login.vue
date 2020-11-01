<template>
	<div class="flex vh-100">
		<div class="flex-grow bg"></div>
		<div
			style="
				width: 300px;
				background-color: #1d1d1d;
				text-align: center;
				padding: 20px;
				color: #fff;
			"
		>
			<el-image src="/logo.png"></el-image>
			<h1 style="margin-bottom: 0; margin-top: 40px">POINS</h1>
			Port Operation Integrated System
			<Nuxt />
			&copy; {{ new Date().getFullYear() }} - KPP SPUT
		</div>
	</div>
</template>

<script>
export default {}
</script>

<style scoped>
.bg {
	background-image: url('/bg.jpeg');
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
