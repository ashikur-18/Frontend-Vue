<template>
   <div>
        <div class="container">
            <ul class="navbar-light bg-success nav justify-content-center">
                <li class="nav-item">
                   <router-link :to="{name:'alldivision'}">
                       Divisions
                   </router-link>
                </li>
                <li class="nav-item">
                   <router-link :to="{name:'alldistrict'}">
                        Districts
                   </router-link>
                </li>
                <li class="nav-item">
                   <router-link :to="{name:'allthana'}">
                      Thana
                   </router-link>
                </li>
            </ul>
        </div>
   </div>
</template>

<script>
export default {
        name:'fronendCrudApp',
        data(){
            return{

            };
        }
}
</script>

<style>
    .nav {
    gap:25px;
}
li.nav-item a {
    font-size: 27px;
    padding: 11px;
    color: #fff;
}
a.router-link-active.router-link-exact-active {
    color: black;
}
</style>