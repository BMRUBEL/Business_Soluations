import { createRouter, createWebHistory } from "vue-router";
import App from '../components/website/App.vue'
import Home from '../components/website/Home.vue'
import About from '../components/website/About.vue'
import Contact from '../components/website/Contact.vue'
import Website from '../components/website/Website.vue'
import Serviceus from '../components/website/weblink/Serviceus.vue'
import Aboutus from '../components/website/weblink/Aboutus.vue'
import Contactus from '../components/website/weblink/Contactus.vue'
import Teamus from '../components/website/weblink/Teamus.vue'
import Portfolioinfo from '../components/website/weblink/Portfolioinfo.vue'
 
 
// Dash
import Dashboard from '../components/admin/Dashboard.vue'
import Login from '../components/admin/Login.vue'
import Service from '../components/admin/services/Service.vue'
import Add_service from '../components/admin/services/Add_service.vue'
import Edit_service from '../components/admin/services/Edit_service.vue'
import Tream from '../components/admin/teams/Tream.vue'
import Add_tream from '../components/admin/teams/Add_tream.vue'
import Edit_tream from '../components/admin/teams/Edit_tream.vue'
import Cont from '../components/admin/contacts/Cont.vue'
import Abo from '../components/admin/abouts/Abo.vue'
import Add_abo from '../components/admin/abouts/Add_abo.vue'
import Edit_abo from '../components/admin/abouts/Edit_abo.vue'
import store from "../store";

// import Contact from '../components/website/Contact.vue'

 


const routes=[
    {
        name:'app',
        path:'/app',
        component:App
    },
    {
        name:'home',
        path:'/web',
        component:Home
    },
    {
        name:'website',
        path:'/website',
        component:Website
    },
     {
        name:'about',
        path:'/abouts',
        component:About
    },
     {
        name:'aboutus',
        path:'/aboutus',
        component:Aboutus
    },
     {
        name:'serviceus',
        path:'/serviceus',
        component:Serviceus
    },
     {
        name:'contactus',
        path:'/contactus',
        component:Contactus
    },
     {
        name:'teamus',
        path:'/teamus',
        component:Teamus
    },
     
     {
        name:'portfolioinfo',
        path:'/portfolio',
        component:Portfolioinfo
    },
     
     {
        name:'contact',
        path:'/con',
        component:Contact
    },

    
    // Dashboard route
    {
        name:'login',
        path:'/',
        component:Login,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'dashboard',
        path:'/dashboard',
        component:Dashboard,
        meta:{
            meddleware:'auth'
        }
    },

    {
        name:'service',
        path:'/serv',
        component:Service,
    },
    {
        name:'add_service',
        path:'/addservice',
        component:Add_service,
    },
    {
        name:'edit_service',
        path:'/edit_service/:id',
        component:Edit_service,
    },
    {
        name:'tream',
        path:'/team',
        component:Tream,
    },
    {
        name:'add_tream',
        path:'/addteam',
        component:Add_tream,
    },
    {
        name:'edit_tream',
        path:'/edit_team/:id',
        component:Edit_tream,
    },
    {
        name:'cont',
        path:'/contact',
        component:Cont,
    },
    {
        name:'add_abo',
        path:'/addabou',
        component:Add_abo,
    },
    {
        name:'edit_abo',
        path:'/edit_abou/:id',
        component:Edit_abo,
    },
    {
        name:'abo',
        path:'/about',
        component:Abo,
    },
   
]


const router=createRouter({
    history:createWebHistory(),
    routes
})

router.beforeEach((to,from,next)=>{
    if(to.meta.middleware=='guest'){
        if(store.state.auth.auth){
            next({name:'dashboard'})
        }
        next()
    }else{
        if(store.state.auth.auth){
            next()
        }
        next({name:'login'})
    }
})
export default router;