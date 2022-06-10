const app = new Vue({
  el: "#app",
  data: {
    database: [],
    genre: "",
  },
  created() {
    axios
    .get("http://localhost/php-ajax-dischi/server.php?genre=")
    .then((resp) => {
      this.database = resp.data;
    });
  },
  methods: {
    newAPI() {
      axios
      .get("http://localhost/php-ajax-dischi/server.php?genre=" + this.genre)
      .then((resp) => {
        this.database = resp.data;
      });
    }
  },
});