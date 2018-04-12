import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import QuestionsList from '@/components/QuestionsList'


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'questions',
      component: QuestionsList
    }
  ]
})
