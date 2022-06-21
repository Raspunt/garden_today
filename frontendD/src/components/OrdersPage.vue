
<template>

<div class="container_">

    
    <div class="leftSidebar">
        <h3>Лист заказов:</h3>

        <div class="list_Orders">

            <div 
            class="orderBtn"  
            v-for="item in ordersList" :key="item">
                
                <p class="ShowInfoc" @click="ShowInfobtn(item.id)">
                    Заказ - {{ item.id }}
                </p>

                <p @click="DeleteBtn(item.id)">
                    <i  class="removeBtn fa-solid fa-xmark"></i>
                </p>

            
            </div>
        </div>
    </div>


    <div v-if="showInfo" class="center_box" >

    <div class="product_lists"
        v-for="product of product_list"
        :key="product.id">
        
        
        <p class="product_item">{{ product[0].title  }}</p>
        <p class="product_item">{{ product[0].disc  }}</p>
        <p class="product_item">{{ product[0].price }} рублей</p>
    
    </div>


    </div>

</div>
</template>




<script>
    import axios from 'axios'
    
    export default {
        name:"OrdersPage",

        data(){
            return {
                ordersList:[],
                product_list:[],
                showInfo:false
            }
        },
        methods:{
            
            ShowInfobtn(id){
                this.showInfo = true

                let product_ids = this.ordersList.find(el => el.id == id).products_id

                let numberPattern = /\d+/g;

                product_ids = product_ids.match( numberPattern )
                
                product_ids.forEach((el)=>{
             
                       let url = `${process.env.VUE_APP_SERVER_URL}/SearchProductById`
                        const _this = this;
                        this.product_list = []

                        let form_data = new FormData();
                        form_data.append( 'id', el);
                
                        axios.post(url,form_data)
                        .then(function (response) {
                            console.log(response.data,"Это");
                            _this.product_list.push(response.data)
                        })
                        .catch(function (error) {
                            console.log(error);
                        });


             
             
                })
            },

            DeleteBtn(id){

                console.log("Delete button");


                let url = `${process.env.VUE_APP_SERVER_URL}/removeOrder`
                const _this = this;

                let form_data = new FormData();
                form_data.append( 'id', id);
        
                axios.post(url,form_data)
                .then(function (response) {
                    alert("Пользователь удален");
                    _this.ordersList = response.data
                })
                .catch(function (error) {
                    console.log(error);
                });

            }

          


        },  

        created(){


            let url = `${process.env.VUE_APP_SERVER_URL}/JsonOrders`
            const _this = this;

          
            axios.post(url)
            .then(function (response) {
                console.log(response.data);
                _this.ordersList = response.data
            })
            .catch(function (error) {
                console.log(error);
            });

            

        }
    }


</script>


<style>


    .container_{
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .leftSidebar{
        display: flex;
        flex-direction: column;
        height:100vh;
        width: 300px;
        background-color: cornflowerblue;
    }

    .list_Orders{
        display: flex;
        flex-direction: column;
    }

    .orderBtn{
        display: flex;
        flex-direction: row;
        justify-items: center;
        align-items: center;
        background-color: white;
        margin: 10px;
        justify-content: space-around;
        border-radius: 5rem;
    }

    .center_box{
        margin-top: 40px;
        margin-left: 100px;
        margin-right: 100px;
        margin-bottom: 40px;

        background-color: #1E7333;
        width: 100%;
        height: 100;
        border-radius: 5rem;
    }

    .product_lists{
        display: flex;
        margin: 20px;
        padding: 10px;
    }

    .product_item{
        padding: 10px;
        background-color: white;
        border-radius: 5rem;
        width: auto;
    }

    .removeBtn{
        background-color: red;
        padding:10px;
        border-radius: 100%;
        transition: 0.5s;
    }

    .removeBtn:hover{
        background-color:yellow ;

    }

    .ShowInfoc:hover{
        background-color: #1E7333;
        color: white;
        transform: 1S;
    }
    

</style>