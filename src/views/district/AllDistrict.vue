<template>
    <div class="container mt-5">
         <div class="row justify-content-center">
             <div class="col-md-12">
                 <div class="card">
                    <div class="card-header d flex justify-content-between align-items-center">
                        <router-link :to="{name:'adddistict'}" class="btn btn-success">
                        Add District
                    </router-link>
                    </div>
                     <div class="card-body">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th style="width:100px">ID</th>
                                     <th>Division Name</th>
                                     <th>Distict Name</th>
                                     <th style="width:170">Action</th>
                                 </tr>
                             </thead>
                             <tbody v-if="allDistrit.length">
                                <tr v-for="(distict,index) in allDistrit" :key="index">
                                    <td>{{index+1}}</td>
                                    <td>{{distict.division.name}}</td>
                                    <td>{{distict.name}}</td>
                                    <td>
                                        <router-link  :to="{name:'editdistict', params:{id: distict.id}}"
                                            class="btn btn-primary">
                                            Edit
                                        </router-link>

                                            <button @click="deleteDistict(distict.id)" class="btn btn-danger">
                                            Delete
                                        </button> 
                                    </td>
                                </tr>
                             </tbody>
                             <div v-else>
                                <p>No data</p>
                             </div>
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
               allDistrit:[]
            }
        },
        methods:{
            showDistrict(){
                axios.get('http://127.0.0.1:8000/api/distict').then(response =>{
                this.allDistrit = response.data.data
                console.log(response.data.data)
            })
            },

            deleteDistict(id){
                axios.delete(`http://127.0.0.1:8000/api/distict/${id}`).then(response =>{
                    alert(response.data.data)
                    console.log(response)
                    this.showDistrict()
                })
            }
        },
        mounted(){
           this.showDistrict()
        },
 }
 </script>
 
 <style>
 p{
    text-align: center;
    margin: 0 auto;
 }
 </style>