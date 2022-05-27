<template>
  
  <header class="header">

    <img class="logo" src="../assets/logo_project2.png" alt="">
    <h1>Garden Today</h1>
    
  </header>

  <div class="header_bg">

    
    
    <div class="main_container">
      


      
      <div class="project_info_flex">
          
          <div class="info_obj info">
            <h1 class="info_text">{{ info_description }}</h1>
          </div>

        
        </div>

      </div>

  </div>
  

</template>

<script>
export default {
  name: 'MainPage',

  data(){
    return{
        info_description:"Иновационные услуги по выращиванию и удобрению Растений",
    }
  }
  
}
</script>

<style scoped>

  @import '../static/MainPage.css'

</style>
