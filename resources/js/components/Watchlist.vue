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
                       <tbody>
                            <tr v-for="user in users" :key="user.id">
                            <td>{{ user.url }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ user.email }}</td>
                            </tr>
                        </tbody>
                       <button id="search" @click='Remove_from_Watchlist()'>Add to Watchlist</button>
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
           
            }
        },
            

        mounted() {
            console.log('Component mounted.');

        },

        methods:{
            Remove_from_Watchlist(){

            }
        }
    }
</script>
