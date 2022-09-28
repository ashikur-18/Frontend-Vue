<template>
    <div class="container">
      <form @submit.prevent="fromSubmit()">
          <div class="form-gruop">
              <label>Add Division</label>
              <input type="text"  placeholder="Division here" v-model="divisionFrom.name" class="form-control" @keypress="change">
              
              <p v-if="error.name">{{error.name}}</p>
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
                  error:[],
                  divisionFrom:{
                  name:''
                  } 
              }
          },
          mounted(){
              axios.get('http://127.0.0.1:8000/api/division/'+this.$route.params.id).then(response =>{
                this.divisionFrom.name = response.data.data.name
              })
          },
          methods:{
             fromSubmit(){
                    axios.put('http://127.0.0.1:8000/api/division/'+ this.$route.params.id,this.divisionFrom).then(response =>{
                        console.log(response)
                        this.$router.push('/all-division')
                    })
             },
        
          }
   }
   </script>
   
   <style scoped>
    
   </style>