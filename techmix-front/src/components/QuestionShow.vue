<template>
<div class="question-show">
<div>
<h2>{{question.question}}</h2>
<p>{{question.question_detail}}</p>
</div>
</div>
</template>
<script type="text/javascript">
import axios from 'axios';

export default {
  name: 'QuestionShow',
  props:['question'],

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
</style>