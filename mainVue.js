new Vue({
  el: "#vueContainer",
  data: {
    albumsList: [],
  },

  mounted() {
    axios
      .get("http://localhost:8080/php-ajax-dischi/api/users.php")
      .then((resp) => {
        this.albumsList = resp.data;
        console.log(this.albumsList);
      });
  },
});
