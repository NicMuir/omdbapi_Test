<template>
    <div class="container-fluid">
        <div class="">
            <div class="base-width">
                <div style="margin-top:10px;">Watchlist</div>
                <div class="card" style="overflow-y: scroll;">
                        <div class="card-wrapper"  >
                            <ul class="pagination">
                                <div id="card" class="card card-flip text-center movie-cards" v-for="movie in movies" v-bind:key="movie.id" >
                                        <div class="card-front">
                                            <div class="card-up">
                                                <img :src=movie.poster style="width: 14rem; height:18rem;">
                                            </div>
                                        </div>
                                        <div class="card-back" style="overflow-x: scroll;">
                                            <div class="card-body">
                                               <b style="font-size:1vw" > {{ movie.title }}</b>
                                                <br>
                                                {{ movie.plot }}
                                                <br>
                                                Rated : {{ movie.rating }}
                                                <br>
                                                Year: <br>
                                                {{ movie.year}}
                                                <button id="search" @click='Remove_from_Watchlist(movie); say("Removed")'>Remove from watchlist</button>
                                            </div>
                                        </div>
                                </div>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props:['movies'],

        data(){
            return{
                
            }
        },
            

        mounted() {
            console.log('Component mounted.');
            /**
             * get all entries in movie_user table for specific user
             * use these entries and get the movies from the movie tables with the movie_id
             * display
             * profit ...
             */
        },

        methods:{
            Remove_from_Watchlist(movie){
                axios.post('api/removeMovie', movie).then(responce => {console.log(responce)});
                window.location.reload()
                alert(movie.title + " Removed from Watchlist");
            }
        }
    }
</script>

<style>
  @import '../../css/app.css';
</style>
