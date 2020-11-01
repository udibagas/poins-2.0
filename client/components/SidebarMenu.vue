<template>
	<el-menu
		router
		:collapse="collapse"
		text-color="#a6a5a5"
		active-text-color="#fff"
		unique-opened
	>
		<el-image
			style="margin-top: 20px; margin-bottom: 20px"
			src="/logo.png"
		></el-image>
		<template v-for="(m, i) in menus">
			<el-menu-item
				v-if="m.children == undefined"
				:index="m.path.toString()"
				:key="i"
			>
				<i :class="m.icon"></i>
				<span slot="title">{{ m.label }}</span>
			</el-menu-item>
			<el-submenu v-else :index="m.path" :key="i">
				<template slot="title">
					<i :class="m.icon"></i>
					<span>{{ m.label }}</span>
				</template>
				<template v-for="(sm, j) in m.children">
					<el-menu-item
						v-if="sm.children == undefined"
						:index="sm.path"
						:key="j"
					>
						<template slot="title">
							<i :class="sm.icon"></i>
							<span>{{ sm.label }}</span>
						</template>
					</el-menu-item>
					<el-submenu v-else :index="sm.path" :key="j">
						<template slot="title">
							<i :class="sm.icon"></i>
							<span>{{ sm.label }}</span>
						</template>
						<el-menu-item
							v-for="(ssm, k) in sm.children"
							:index="ssm.path"
							:key="k"
						>
							<template slot="title">
								<i :class="ssm.icon"></i>
								<span>{{ ssm.label }}</span>
							</template>
						</el-menu-item>
					</el-submenu>
				</template>
			</el-submenu>
		</template>
	</el-menu>
</template>

<script>
export default {
	props: ['collapse'],
	data: () => {
		return {
			menus: [],
		}
	},
	methods: {
		async getMenu() {
			const { data } = await this.$axios.get('/api/sidebarMenu')
			this.menus = data
		},
	},
	created() {
		this.getMenu()
	},
}
</script>

<style>
.el-menu {
	border-right: none;
	background-color: #1d1d1d;
}

.el-menu-item .is-active {
	background-color: aquamarine;
}
</style>
