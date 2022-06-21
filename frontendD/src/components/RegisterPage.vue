
<template>

    <div class="container mt-5 p-5 conBackground">

    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input v-model="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  username">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">email</label>
        <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  email">
    </div>




    <div class="form-group">
        <label for="exampleInputEmail1">password</label>
        <input v-model="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
    </div>


     <div class="form-group">
        <label for="exampleInputEmail1">confirm password</label>
        <input  v-model="confirmPassword" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password">
    </div>

    <button @click="SendRegister()" type="button" class="btn btn-success">Зарегистрироваться</button>


    </div>

</template>




<script>

import axios from 'axios'

export default{

  data(){

    return {
        username:"",
        email:"",
        password:"",
        confirmPassword:""
    }
  },
  props:{
    CartProductId:Array
  },


  
  methods:{

    SendRegister(){


        if (this.password != this.confirmPassword ){
            alert("Пароли не совпадают");
        }else{
            
            let url = `${process.env.VUE_APP_SERVER_URL}/CreateUser`

            let form_data = new FormData();
            form_data.append('username',this.username)
            form_data.append('email',this.username)
            form_data.append('password',this.username)
            

            axios.post(url,form_data)
            .then(function (response) {
                console.log(response.data);

                window.location = "/Login"
                alert('пользователь успешно создан')

            })
            .catch(function (error) {
                console.log(error);
            });
    }
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