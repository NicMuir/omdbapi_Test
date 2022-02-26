<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                
                    <div id="Movie_Display" class="card">
                        <!-- <div class="card-header">Dashboard</div> -->
                        <div  class="card-body" >
                        <tr v-for="movie in movies" v-bind:key="movie.id">
                            <td>{{ movie.title }}</td>
                            <td>{{ movie.plot }}</td>
                        </tr>
                     
                        </div>
                        
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
            Remove_from_Watchlist(){

            }
        }
    }
</script>
