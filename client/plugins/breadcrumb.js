import Vue from 'vue'

const breadcrumbs = {
  install(Vue, options) {
    Vue.prototype.$breadcrumbs = options.breadcrumbs
  }
}

Vue.use(breadcrumbs)
