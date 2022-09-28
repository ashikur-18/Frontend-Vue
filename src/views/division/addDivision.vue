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
            
        },
        methods:{
           fromSubmit(){

          // if(this.divisionFrom.name == ''){
          //   // this.error['name'] = 'Name field is required'
          // }else{

            axios.post('http://127.0.0.1:8000/api/division/',this.divisionFrom).then(response =>{
              console.log(response)
              alert(response.data.message)
              this.$router.push('/all-division')
            }).catch(error => {
                  this.error['name'] = error.response.data.errors.name
            });

          // }
           },
           change(){
             this.error['name'] = null
           }
        }
 }
 </script>
 
 <style scoped>
   button.btn.btn-success {
    margin-top: 10px;
}
 </style>