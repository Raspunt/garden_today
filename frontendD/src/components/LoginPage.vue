
<template>

    <div class="container mt-5 p-5 conBackground">

    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input v-model="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  username">
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">password</label>
        <input v-model="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
    </div>

    <button @click="SendLogin()" type="button" class="btn btn-success m-3">Войти</button>

    <button @click="RegisterPageRegirect()" type="button" class="btn btn btn-primary">Зарегистрироваться</button>



    </div>

</template>




<script>

import axios from 'axios'

export default{

  data(){

    return {
        username:"",
        password:"",
    }
  },
  props:{
    CartProductId:Array
  },


  
  methods:{

    SendLogin(){


        let url = `${process.env.VUE_APP_SERVER_URL}/IsUserAuthenticated`
  
        let form_data = new FormData();
        form_data.append('username',this.username)
        form_data.append('password',this.username)
        

        axios.post(url,form_data)
        .then(function (response) {
            console.log(response.data);

            if (response.data === ""){
                alert("Такого пользователя нету , проверте пароль или имя");
            }else {
                localStorage.setItem("user",'1')
                window.location = '/'
            }


        })
        .catch(function (error) {
            console.log(error);
        });

    },
    RegisterPageRegirect(){
        window.location = "/Register"
    } 

  },
  



}


</script>


<style>


.conBackground{

    background-color: white;
    border-radius: 5rem;
}



</style>