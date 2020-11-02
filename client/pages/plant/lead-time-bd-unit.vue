<template>
	<el-row :gutter="20">
		<el-col :span="8">
			<el-card :body-style="{ padding: '0px' }">
				<div class="text-primary" slot="header" style="font-weight: bold">
					REMARK UNIT BY TYPE
				</div>
				<el-table stripe border :data="unitByType">
					<el-table-column prop="type" label="TYPE"></el-table-column>
					<el-table-column
						width="70"
						prop="ready"
						label="READY"
						header-align="center"
						align="center"
					></el-table-column>
					<el-table-column
						width="70"
						prop="bd"
						label="B/D"
						header-align="center"
						align="center"
					></el-table-column>
				</el-table>
			</el-card>
		</el-col>
		<el-col :span="16"></el-col>
	</el-row>
</template>

<script>
export default {
	data() {
		return {
			unitByType: [
				{
					type: 'BAGAK',
					ready: 20,
					bd: 2,
				},
				{
					type: 'BARGE LOADER',
					ready: 3,
					bd: 1,
				},
				{
					type: 'ROAD MAINTENANCE',
					ready: 111,
					bd: 11,
				},
			],
		}
	},
}
</script>

<style>
</style>
