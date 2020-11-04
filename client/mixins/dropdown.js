export default {
  data() {
    return {
      // REGISTER ALL LIST HERE
      userList: [],
      locationList: []
    }
  },

  methods: {

    getList(url, keyword, listContainer) {
      this.$axios.get(url, { params: { keyword } }).then(r => {
        this[listContainer] = r.data.data
      }).catch(e => {
        this.$message({
          message: e.response.data.message,
          type: 'error'
        })
      })
    }

  }
}
