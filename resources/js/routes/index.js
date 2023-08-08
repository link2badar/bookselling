import { createWebHistory, createRouter } from "vue-router";
import Group from "../components/groups/GroupIndex.vue";
import School from "../components/schools/SchoolIndex.vue";

const routes = [
  {
    path: "/"+$_base+"/groups",
    name: "Groups",
    component: Group,
  },
  {
    path: "/"+$_base+"/schools",
    name: "Schools",
    component: School,
  },
];


const router = createRouter({
  history: createWebHistory(),
  routes,
});



export default router;
