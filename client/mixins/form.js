export default {
  data() {
    return {
      loading: false,
      errors: {}
    }
  },

  methods: {

    store() {
      this.loading = true
      this.$axios.post(this.url, this.formModel).then(r => {
        this.$message({
          message: r.data.message,
          type: 'success'
        })
        this.closeForm()
        this.$emit('refresh')
      }).catch(e => {
        this.$message({
          message: e.response.data.message,
          type: 'error'
        })

        if (e.response.status == 422) {
          this.errors = e.response.data.errors
        }
      }).finally(() => this.loading = false)
    },

    update() {
      this.loading = true
      this.$axios.put(`${this.url}/${this.formModel.id}`, this.formModel).then(r => {
        this.$message({
          message: r.data.message,
          type: 'success'
        })
        this.closeForm()
        this.$emit('refresh')
      }).catch(e => {
        this.$message({
          message: e.response.data.message,
          type: 'error'
        })

        if (e.response.status == 422) {
          this.errors = e.response.data.errors
        }
      }).finally(() => this.loading = false)
    },

    closeForm() {
      this.errors = {}
      this.$emit('close')
    }

  }
}
