<template>
    <div class="container-fluid">
        <div class="">
            <div class="base-width">
                <div class="card" style="overflow-y: scroll;">
                    <div >Watchlist</div>
                        <div class="card-wrapper" >
                            <ul class="pagination">

                                <div id="card" class="card card-flip text-center " style="width: 18rem; height:18rem;" v-for="movie in movies" v-bind:key="movie.id" >
                                        <div class="card-front">
                                            <div class="card-up">
                                                <img :src=movie.poster style="width: 18rem; height:18rem;">
                                            </div>
                                        </div>
                                        <div class="card-back">
                                            <div class="card-body">
                                               <b style="font-size:3vw" > {{ movie.title }}</b>
                                                <br>
                                                {{ movie.plot }}
                                                <br>
                                                Rated : {{ movie.rating }}
                                                <br>
                                                <button id="search" @click='Remove_from_Watchlist(movie)'>Remove from watchlist</button>
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
            }
        }
    }
</script>

<style>
  @import '../../css/app.css';
</style>
