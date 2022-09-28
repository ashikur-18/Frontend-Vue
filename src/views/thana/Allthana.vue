<template>
    <div class="container mt-5">
         <div class="row justify-content-center">
             <div class="col-md-12">
                 <div class="card">
                    <div class="card-header d flex justify-content-between align-items-center">
                        <router-link :to="{name:'addthana'}" class="btn btn-success">
                        Add Thana
                    </router-link>
                    </div>
                     <div class="card-body">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th style="width:100px">ID</th>
                                     <th>Division Name</th>
                                     <th>District Name</th>
                                     <th>Thana Name</th>
                                     <th style="width:170">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                <tr v-for="(thana,index) in allthana" :key="index">
                                    <td>{{index+1}}</td>
                                    <td>{{thana.divison.name}}</td>
                                    <td>{{thana.district.name}}</td>
                                    <td>{{thana.name}}</td>
                                    <td>
                                        <router-link  :to="{name:'editthana', params:{id: thana.id}}"
                                            class="btn btn-primary">
                                            Edit
                                        </router-link>
                                        <button @click="deleteThana(thana.id)" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                             </tbody>
                            
                         </table>
                     </div>
                 </div>
             </div>
         </div>
    </div>
 </template>
 
 <script>
import axios from 'axios';

 export default {
        name:'FrontendCrudallDistrit',
        data(){
            return{
               allthana:[]
            }
        },
        methods:{
            showThana(){
                axios.get('http://127.0.0.1:8000/api/thana')
                .then(response => {
                    this.allthana = response.data.data
                    console.log(response.data.data)
                });
            },

            deleteDistict(id){
                axios.delete(`http://127.0.0.1:8000/api/thana/${id}`).then(response =>{
                    alert(response.data.data)
                    console.log(response)
                    this.showThana()
                })
            }
        },
        created(){
           this.showThana()
        }
 }
 </script>
 
 <style>
 p{
    text-align: center;
    margin: 0 auto;
 }
 </style>