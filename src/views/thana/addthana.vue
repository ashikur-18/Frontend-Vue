<template>
    <div class="container">
      <form @submit.prevent="addFormThana()">
            <div class="form-gruop">
              <label>Thana Name</label>
              <input type="text" v-model="addThana.name" placeholder="Thana here"  class="form-control">
              <!-- <p v-if="error.name">{{error.name}}</p> -->
            </div>
            <br>

            <div class="form-gruop">
                <label>All Division</label>
                <select v-model="addThana.division_id" class="form-control">
                    <option v-for="division in Alldivision" 
                        :key="division.id" 
                        :value="division.id" >
                        {{ division.name }}
                   </option>
                </select>
            </div>
            <div class="form-gruop">
                <label>All District</label>
                <select v-model="addThana.district_id" class="form-control">
                    <option v-for="district in Alldistrict" 
                        :key="district.id" 
                        :value="district.id" >
                        {{ district.name }}
                   </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Add Distict</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    name:'FrontendCrudAllDivision',

          data(){
              return{
                 Alldivision:[],
                 Alldistrict:[],
                 addThana:{
                    name:'',
                    district_id:'',
                    division_id:''
                   }
                } 
              },
         
          methods:{
            addFormThana(){
                axios.post('http://127.0.0.1:8000/api/thana/', this.addThana).then(response =>{
                  alert('created Successfully')
                  console.log(response.data);
                    this.$router.push('/all-thana')
                   
                });
            },
          },
          mounted(){
              axios.get('http://127.0.0.1:8000/api/distict/').then(response => {
                  this.Alldistrict = response.data.data
                  console.log(response.data.data)
              });
              axios.get('http://127.0.0.1:8000/api/division/').then(response => {
                  this.Alldivision = response.data.data
                  console.log(response.data.data)
              });
              this.addFormThana()
          },
  }
   </script> 
   
   <style scoped>
     button.btn.btn-success {
      margin-top: 10px;
  }
   </style>