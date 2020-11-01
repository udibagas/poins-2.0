<template>
	<el-card>
		<el-row>
			<el-col :span="12">
				<h1 class="text-primary" style="margin-top: 10px">MANAGE USER</h1>
			</el-col>

			<el-col :span="12">
				<el-form inline @submit.native.prevent style="text-align: right">
					<el-form-item>
						<el-button
							type="primary"
							size="mini"
							icon="el-icon-plus"
						></el-button>
					</el-form-item>
					<el-form-item>
						<el-input
							prefix-icon="el-icon-search"
							v-model="keyword"
							placeholder="Search"
							size="small"
							clearable
							@change="
								() => {
									this.pagination.current_page = 1
									fetchData()
								}
							"
						></el-input>
					</el-form-item>
				</el-form>
			</el-col>
		</el-row>

		<el-table
			height="calc(100vh - 240px)"
			stripe
			v-loading="loading"
			:data="tableData"
			@sort-change="sortChange"
			@filter-change="filterChange"
			:default-sort="{ prop: 'name', order: 'ascending' }"
		>
			<el-table-column
				type="index"
				label="#"
				:index="pagination.from"
			></el-table-column>

			<el-table-column
				prop="name"
				label="Name"
				min-width="150"
				sortable="custom"
			></el-table-column>

			<el-table-column
				prop="email"
				label="Email"
				min-width="200"
				sortable="custom"
			></el-table-column>

			<el-table-column prop="customer" label="Customer"></el-table-column>

			<el-table-column prop="contractor" label="Contractor"></el-table-column>

			<el-table-column
				label="Super Admin"
				header-align="center"
				align="center"
				column-key="super_admin"
				min-width="150"
				:filters="yesNoFilter"
			>
				<template slot-scope="scope">
					<i
						:class="
							scope.row.super_admin
								? 'el-icon-check text-success'
								: 'el-icon-close text-danger'
						"
					></i>
				</template>
			</el-table-column>

			<el-table-column
				label="Active"
				header-align="center"
				align="center"
				column-key="active"
				:filters="yesNoFilter"
			>
				<template slot-scope="scope">
					<i
						:class="
							scope.row.active
								? 'el-icon-check text-success'
								: 'el-icon-close text-danger'
						"
					></i>
				</template>
			</el-table-column>

			<el-table-column
				fixed="right"
				width="60"
				header-align="center"
				align="center"
			>
				<template slot="header">
					<el-button
						type="text"
						icon="el-icon-refresh"
						@click="refresh"
					></el-button>
				</template>

				<template slot-scope="scope">
					<el-dropdown>
						<span class="el-dropdown-link">
							<i class="el-icon-more"></i>
						</span>
						<el-dropdown-menu slot="dropdown">
							<el-dropdown-item
								icon="el-icon-edit"
								@click.native.prevent="editData(scope.row)"
								>Edit</el-dropdown-item
							>
							<el-dropdown-item
								icon="el-icon-delete"
								@click.native.prevent="deleteData(scope.row.id)"
								>Delete</el-dropdown-item
							>
						</el-dropdown-menu>
					</el-dropdown>
				</template>
			</el-table-column>
		</el-table>

		<br />

		<el-row>
			<el-col :span="20">
				<el-pagination
					background
					layout="total, sizes, prev, pager, next"
					:current-page="pagination.current_page"
					@current-change="currentChange"
					@size-change="sizeChange"
					:page-size="Number(pagination.per_page)"
					:page-sizes="pageSizes"
					:total="pagination.total"
				></el-pagination>
			</el-col>
			<el-col :span="4" class="text-right">
				<small>
					Showing {{ pagination.from }} - {{ pagination.to }} of
					{{ pagination.total }}
				</small>
			</el-col>
		</el-row>
	</el-card>
</template>

<script>
import table from '~/mixins/table'

export default {
	mixins: [table],
	data() {
		return {
			url: '/api/user',
		}
	},
	methods: {},
	mounted() {
		this.fetchData()
	},
}
</script>
