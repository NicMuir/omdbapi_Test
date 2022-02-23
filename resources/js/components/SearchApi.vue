<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                       <input v-model="message" />
                       <button id="search" @click='getMovie()'>Search</button>
                    </div>

                
                    <div id="Movie_Display" class="card" style="display:none">
                        <!-- <div class="card-header">Dashboard</div> -->
                        <div  class="card-body" >
                       Title:
                        {{data.Title}}
                        <br>
                        Plot:
                        {{data.Plot}}
                        <br>
                       <button id="search" @click='AddWatchlist()'>Add to Watchlist</button>
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
            //url:'http://www.omdbapi.com/?apikey=[${process.env.VUE_APP_APIKEY}]'
            url:'http://www.omdbapi.com/',
            apikey:'apikey=f90f861c',
            message:"", 
            data:{},
            
            }
        },
//http://www.omdbapi.com/?apikey=f90f861c&?t=Time
            

        mounted() {
            console.log('Component mounted.');

        },

        methods:{
            getMovie(){
                console.log
                fetch(this.url+"?t="+this.message+"&"+this.apikey)
                .then(response => response.json())
                .then(json => {
                    console.log(json);
                   
                    this.data =  json;

                    console.log(this.data.imdbID);
                   }

                );
                document.getElementById("Movie_Display").style.display = "block";
                return
                },

            AddWatchlist(){
                fetch('api/addMovie', {
                        method: 'post',
                        body: JSON.stringify(this.user),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => res.json())

            }
        }
    }
</script>
