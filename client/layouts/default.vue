<template>
	<el-container>
		<el-aside :width="collapse ? 'auto' : '280px'">
			<SidebarMenu :collapse="collapse" />
		</el-aside>
		<el-container>
			<el-header style="display: flex">
				<div style="margin-right: 20px">
					<i
						:class="
							collapse
								? 'el-icon-s-unfold text-primary'
								: 'el-icon-s-fold text-primary'
						"
						@click="collapse = !collapse"
						style="cursor: pointer"
					></i>
				</div>
				<el-breadcrumb
					separator-class="el-icon-arrow-right"
					style="line-height: 60px; flex-grow: 1"
				>
					<el-breadcrumb-item :to="{ path: '/' }">
						<i class="el-icon-s-home"></i> Home
					</el-breadcrumb-item>
					<el-breadcrumb-item>Administration</el-breadcrumb-item>
					<el-breadcrumb-item>User</el-breadcrumb-item>
				</el-breadcrumb>
				<div class="text-right">
					<el-dropdown>
						<span class="el-dropdown-link">
							<el-avatar :size="40" style="margin-top: 10px">
								{{ initial }}
							</el-avatar>
						</span>
						<el-dropdown-menu slot="dropdown">
							<el-dropdown-item
								icon="el-icon-user"
								@click.native.prevent="profile"
								>Profile</el-dropdown-item
							>
							<el-dropdown-item
								icon="el-icon-arrow-right"
								@click.native.prevent="logout"
								>Logout</el-dropdown-item
							>
						</el-dropdown-menu>
					</el-dropdown>
				</div>
			</el-header>
			<el-main>
				<Nuxt />
			</el-main>
		</el-container>
	</el-container>
</template>

<script>
export default {
	middleware: ['auth'],
	computed: {
		initial() {
			let initial = ''
			const name = this.$auth.user.name

			for (const i of name.split(' ')) {
				initial += i.split('')[0].toUpperCase()
				if (initial.length > 2) break
			}

			return initial
		},
	},
	data: () => {
		return {
			collapse: false,
		}
	},
	methods: {
		logout() {
			this.$auth.logout()
			this.$router.push('/login')
		},
		profile() {
			// TODO
		},
	},
}
</script>

<style>
.el-aside {
	height: 100vh;
	background-color: #1d1d1d;
}

.el-header {
	line-height: 60px;
	border-bottom: 1px solid #ddd;
}

.el-main {
	height: calc(100vh - 60px);
	background-color: #ebf4ff;
	padding: 10px;
}
</style>
