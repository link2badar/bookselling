// require('./bootstrap');
// import { createApp } from 'vue'; //createapp to mount #app
// import App  from './components/groups/GroupIndex.vue';
// import School  from './components/Schools/SchoolIndex.vue';
//
// //
// // const routes = {
// //   '/groups': App,
// //   '/schools': School
// // }
//
// createApp(App).mount("#school");
//

require('./bootstrap');
import { createApp } from 'vue'
import App from './App.vue'
import router from './routes'

createApp(App).use(router).mount('#app')
