<template>
<div class="ask-question">
<h2>Ask Question</h2>

</div>
</template>
<script type="text/javascript">
import axios from 'axios';
export default {
  name: 'CreateQuestion',

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