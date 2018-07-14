import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import FourOFour from '@/components/FourOFour'

import Stack from '@/components/Stack'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/stack',
      name: 'Stack',
      component: Stack
    },
    {
      path: '*',
      name: 'fourofour',
      component: FourOFour,
      meta: {
        title: '404: Error!'
      }
    }
  ]
})
