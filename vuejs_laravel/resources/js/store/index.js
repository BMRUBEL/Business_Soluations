import axios from "axios";
import { createStore } from "vuex";
// import  createPresistedState  from "vuex-presistedstate";
import createPresistedState from 'vuex-persistedstate';
import router from "../router";

const auth={
    namespaced:true,
    state:{
        auth:false,
        user:{}
    },
    getters:{
       authenticated(state){
            return state.auth;
        }
    },
    mutations:{
         
        SET_AUTH(state,value){
            state.auth=value
        },
        SET_USER(state,value){
            state.user=value
            
        },
    },
    actions:{
         
        login({commit}){
            axios.get('/api/user')
            .then(({data})=>{
                console.log(data)
                commit('SET_USER',data)
            })
            commit('SET_AUTH',true)
            router.push({name:'dashboard'})
      },
      logout({commit}){
        commit('SET_AUTH',false)
        commit('SET_USER',{})
        router.push({name:'login'})
      }
    }
}

const store=createStore({
    plugins:[
        createPresistedState()
    ],
    modules:{
        auth
    }
})
export default store;