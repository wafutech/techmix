<template>
<div>
<QuestionShow v-for="question in questions" v-bind:question="question" v-bind:key="question.id"></QuestionShow>
</div>
</template>
<script type="text/javascript">
import axios from 'axios';
import QuestionShow from './QuestionShow';

export default {
  name: 'QuestionsList',
  props:['questions'],
  components:
  {
  QuestionShow
  }
}
</script>
<style type="text/css">
</style>