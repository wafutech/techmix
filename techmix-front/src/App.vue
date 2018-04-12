<template>
  <div id="app">
  <CreateQuestion></CreateQuestion>
    <QuestionsList v-bind:questions="questions"></QuestionsList>
  </div>
</template>

<script>
import axios from 'axios';
import QuestionsList from './components/QuestionsList'
import CreateQuestion from './components/CreateQuestion'

export default {
  name: 'App',
  components:
  {
  QuestionsList,
  CreateQuestion
  },
  data(){
            return{
               
        questions:{}
               
         }
        },

    mounted: function()
  {
 var  _this = this;
  axios.get('http://localhost/techmix/apiv1/questions').then(function(response)
  {
  _this.questions = response.data;
  console.log(_this.questions);
  });
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
