<template>
	<el-form style="margin-top: 40px">
		<el-form-item>
			<el-input
				prefix-icon="el-icon-user"
				v-model="loginForm.email"
				placeholder="Email"
			></el-input>
		</el-form-item>
		<el-form-item>
			<el-input
				type="password"
				prefix-icon="el-icon-key"
				v-model="loginForm.password"
				placeholder="Password"
			></el-input>
		</el-form-item>
		<el-form-item>
			<el-button type="primary" style="width: 100%" @click="login"
				>LOGIN</el-button
			>
		</el-form-item>
	</el-form>
</template>

<script>
export default {
	layout: 'login',
	data() {
		return {
			loginForm: {
				email: '',
				password: '',
				remember: true,
			},
		}
	},
	created() {
		this.$axios.$get('/sanctum/csrf-cookie')
	},
	methods: {
		login() {
			this.$auth
				.loginWith('local', {
					data: this.loginForm,
				})
				.then((r) => {
					this.$router.push(this.$route.query.redirect || '/')
				})
				.catch((e) => {
					if (e.response.status == 422) {
						const message = e.response.data.errors.email
							? e.response.data.errors.email[0]
							: e.response.data.errors.password[0]
						this.$message({
							message: message,
							type: 'error',
						})
					}
				})
		},
	},
}
</script>

<style>
</style>
