<template>
    <div class="container mt-5">
         <div class="row justify-content-center">
             <div class="col-md-12">
                 <div class="card">
                    <div class="card-header d flex justify-content-between align-items-center">
                    <router-link :to="{name:'adddivision'}" class="btn btn-success">
                        Add Division
                    </router-link>
                    </div>
                     <div class="card-body">
                         <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:100px">ID</th>
                                    <th style="width:100px">Division Name</th>
                                    <th style="width:56px">Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                <tr v-for="(division,index) in  AllDivisions" :key="index">
                                    <td>{{index+1}}</td>
                                    <td>{{division.name}}</td>
                                    <td>
                                        <router-link  :to="{name:'editdivision', params:{id: division.id}}"
                                         class="btn btn-primary">
                                            Edit
                                        </router-link>

                            <button @click="deleteDiviosn(division.id)" class="btn btn-danger">
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
        name:'FrontendCrudAllDivision',
        data(){
            return{
                AllDivisions:[]
            }
        },
        methods:{
            alldivision(){
                axios.get('http://127.0.0.1:8000/api/division/').then(response =>{
                    this.AllDivisions = response.data.data
                    console.log(response)
                })
            },
     
            deleteDiviosn(id){
             axios.delete(`http://127.0.0.1:8000/api/division/${id}`).then(response => {
                   alert(response.data.message)
                   console.log(response)
                   this.alldivision()
            });   
          }
        },
        mounted(){
            this.alldivision()
        }
 }
 </script>
 
 <style>
 
 </style>