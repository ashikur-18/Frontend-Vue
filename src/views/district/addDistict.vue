<template>
    <div class="container">
      <form @submit.prevent="addFormDistict()">
            <div class="form-gruop">
              <label>Add District</label>
              <input type="text" v-model="addDistict.name" placeholder="District here"  class="form-control">
              <!-- <p v-if="error.name">{{error.name}}</p> -->
            </div>
            <br>
            <div class="form-gruop">
                <label>Add Division</label>
                <select v-model="addDistict.division_id" class="form-control">
                    <option v-for="divison in allDivision" 
                        :key="divison.id" 
                        :value="divison.id" >
                        {{ divison.name }}
                   </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Add Division</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    name:'FrontendCrudAllDivision',

          data(){
              return{
                 allDivision:[],
                 addDistict:{
                    name:'',
                    division_id:''
                   }
                } 
              },
          mounted(){
              axios.get('http://127.0.0.1:8000/api/division/').then(response => {
                  this.allDivision = response.data.data
                  console.log(response.data.data)
              })
          },
          methods:{
            addFormDistict(){
                axios.post('http://127.0.0.1:8000/api/distict/', this.addDistict).then(response =>{
                    console.log(response.data);
                    this.$router.push('/all-district')
                    alert('created Successfully')
                });
            }
   }
  }
   </script> 
   
   <style scoped>
     button.btn.btn-success {
      margin-top: 10px;
  }
   </style>