<template>
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-md">
      <h2 class="text-2xl font-bold mb-4 text-center">🏆 Leaderboard</h2>
      
      <table class="w-full border-collapse table-auto">
        <thead>
          <tr class="bg-gray-100">
            <th class="p-2 border">#</th>
            <th class="p-2 border">Date</th>
            <th class="p-2 border">Difficulty</th>
            <th class="p-2 border">Attempts</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(entry, index) in scores" :key="index">
            <td class="p-2 border text-center">{{ index + 1 }}</td>
            <td class="p-2 border text-center">{{ entry.date }}</td>
            <td class="p-2 border text-center capitalize">{{ entry.difficulty }}</td>
            <td class="p-2 border text-center">{{ entry.attempts }}</td>
          </tr>
        </tbody>
      </table>
  
      <button 
        @click="clearScores" 
        class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
      >
        Clear Leaderboard
      </button>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue'
  
  const scores = ref([])
  
  onMounted(() => {
    const stored = localStorage.getItem('leaderboard')
    if (stored) {
      scores.value = JSON.parse(stored)
    }
  })
  
  function clearScores() {
    localStorage.removeItem('leaderboard')
    scores.value = []
  }
  </script>
  