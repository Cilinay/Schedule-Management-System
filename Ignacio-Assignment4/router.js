import { createRouter, createWebHistory } from 'vue-router';
import GuessingGame from './views/GuessingGame.vue';
import Mechanics from './views/Mechanics.vue';
import Leaderboard from './views/Leaderboard.vue';

const routes = [
{ path: '/' , component: GuessingGame },
{ path: '/mechanics', component: Mechanics },
{ path: '/leaderboard', component: Leaderboard }
]
export default createRouter({
history: createWebHistory(),
routes
})