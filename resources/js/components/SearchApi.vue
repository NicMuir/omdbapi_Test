<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seach </div>

                    <div class="card-body">
                       <input v-model="message" />
                       <button id="search" @click='getMovie()'>Search</button>
                    </div>

                    <div class="card-wrapper">
                        <div id="Movie_Display" class="card" style="display:none">
                            <!-- <div class="card-header">Dashboard</div> -->
                            <div  class="card-body" >
                                <img :src=data.poster>
                                <br>
                            Title:
                            {{data.title}}
                            <br>
                            Plot:
                            {{data.plot}}
                            <br>
                            Ratings:
                            {{data.ratings}}
                        <button id="search" @click='AddWatchlist()'>Add to Watchlist</button>
                            </div>
                            
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{

            url:'http://www.omdbapi.com/',
            apikey:'apikey=f90f861c',
            message:"", 
            data:{},
            movie:{},
            }
        },


        mounted() {
            console.log('Component mounted.');

        },

        methods:{
            getMovie(){
                
                axios.post('api/MovieToDB', {Title: this.message }).then(responce => {
                    
                    this.data = responce.data;
                    console.log(this.data.ratings);
                    });

                document.getElementById("Movie_Display").style.display = "block";
                return
                },

            AddWatchlist(){
                axios.post('api/addMovie', this.data).then(responce => {console.log(responce)});
                window.location.reload()
                
            }
        }
    }
</script>
<style>
  @import '../../css/app.css';
</style>
