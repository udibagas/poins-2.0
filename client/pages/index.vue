<template>
	<div class="text-center" style="height: calc(100vh - 145px)">
		<h1>Welcome to POINS!</h1>
		<h4>Port Operation Integrated System</h4>

		<div style="width: 800px; margin: 0 auto">
			<el-row :gutter="20">
				<el-col :span="8">
					<el-card> PLANT </el-card>
				</el-col>
				<el-col :span="8">
					<el-card> SM </el-card>
				</el-col>
				<el-col :span="8">
					<el-card> OPERATION </el-card>
				</el-col>
			</el-row>

			<br />

			<el-row :gutter="20">
				<el-col :span="8">
					<el-card> HCGS </el-card>
				</el-col>
				<el-col :span="8">
					<el-card> SHE </el-card>
				</el-col>
				<el-col :span="8">
					<el-card> FAT </el-card>
				</el-col>
			</el-row>
		</div>
	</div>
</template>

<script>
export default {}
</script>
