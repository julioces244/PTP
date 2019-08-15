new Vue({
  el: '#app',
  data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('http://127.0.0.1:8000/api/user')
      .then(response => (this.info = response.data))
  }
})
