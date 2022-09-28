<template>
  <div>
      <headerVue></headerVue>
        <div class="container">
            <router-view></router-view>
        </div>
  </div>
</template>

<script>
  import headerVue from '@/components/header.vue';
export default {
       name:'fronendCrudApp',
       components:{
          headerVue
       },
       data(){
           return{

           }
       }
}
</script>

<style>

</style>