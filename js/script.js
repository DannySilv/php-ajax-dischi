const app = new Vue({
  el: "#app",
  data: {
    name: "olga",
    database: [],
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/server.php")
      .then((resp) => {
        this.database = resp.data;
      });
  },
});