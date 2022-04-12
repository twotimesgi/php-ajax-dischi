var app = new Vue({
    el: '#app',
    data: {
        res: null,
        genre_filter: "All",
        genres: []
    },
    mounted() {
        axios.request("http://localhost:8888/php-ajax-dischi/milestone2/dischi.php").then((response) => {
            this.res = response.data;
            this.res.forEach(element => {
                this.genres.push(element.genre);
            });
        });    
    },
    methods: {
        filter() {
            let query = "";
            if(this.genre_filter != "All") query = "?genre=" + this.genre_filter;

            axios.request("http://localhost:8888/php-ajax-dischi/milestone2/dischi.php"+query).then((response) => {
                this.res = response.data;
            });    
        },
    }
})