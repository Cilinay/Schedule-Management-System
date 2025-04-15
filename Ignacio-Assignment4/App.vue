<template>
  <div :class="darkMode ? 'dark' : ''">
    <NavBar @toggleDark="toggleDarkMode" />
    <router-view />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import NavBar from './components/NavBar.vue'

const darkMode = ref(localStorage.getItem('darkMode') === 'true')
const toggleDarkMode = () => (darkMode.value = !darkMode.value)
</script>

<style>
.dark {
  background-color: #121212;
  color: #ffffff;
}
.dark input,
.dark select,
.dark button {
  background-color: #333;
  color: white;
  border-color: #666;
}
</style>
