import { createRouter, createWebHistory } from 'vue-router'
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    //division
    {
      path: '/',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/all-division',
      name: 'alldivision',
      component: () => import('../views/division/AllDivision.vue')
    },
    {
      path: '/add-division',
      name: 'adddivision',
      component: () => import('../views/division/addDivision.vue')
    },
    {
      path: '/edit-division/:id',
      name: 'editdivision',
      component: () => import('../views/division/editDivision.vue')
    },

    // district 

    {
      path: '/all-district',
      name: 'alldistrict',
      component: () => import('../views/district/AllDistrict.vue')
    },
    {
      path: '/add-distict',
      name: 'adddistict',
      component: () => import('../views/district/addDistict.vue')
    },
    {
      path: '/edit-distict/:id',
      name: 'editdistict',
      component: () => import('../views/district/editDistict.vue')
    },
    //thana
    {
      path: '/all-thana',
      name: 'allthana',
      component: () => import('../views/thana/Allthana.vue')
    },
    {
      path: '/add-thana',
      name: 'addthana',
      component: () => import('../views/thana/addthana.vue')
    },
    {
      path: '/add-thana/:id',
      name: 'editthana',
      component: () => import('../views/thana/editthana.vue')
    }
  ]
})

export default router
