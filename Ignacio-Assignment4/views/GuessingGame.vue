<template>
    <div class="p-6 text-center max-w-xl mx-auto">
      <h1 class="text-2xl font-bold mb-4">🎯 Number Guessing Game</h1>
      
      <select v-model="difficulty" @change="setDifficulty" class="p-2 border mb-4 rounded">
        <option value="easy">Easy (1–50)</option>
        <option value="medium">Medium (1–100)</option>
        <option value="hard">Hard (1–200)</option>
      </select>
  
      <input 
        type="number" 
        v-model.number="userGuess" 
        class="p-2 border rounded w-1/2 mb-2" 
        placeholder="Enter guess" 
      />
  
      <button @click="checkGuess" class="bg-blue-600 text-white px-4 py-2 rounded">
        Submit
      </button>
  
      <p class="mt-3 text-lg">{{ message }}</p>
  
      <p v-if="isCorrect" class="text-green-600">✅ Guessed in {{ attempts }} tries!</p>
      <p v-if="highScore" class="text-sm text-gray-600">🏆 Best Score: {{ highScore }} attempts</p>
  
      <button 
        v-if="isCorrect" 
        @click="resetGame" 
        class="mt-4 bg-gray-700 text-white px-4 py-2 rounded"
      >
        Play Again
      </button>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  
  const difficulty = ref('medium')
  const maxNumber = ref(100)
  const userGuess = ref('')
  const randomNumber = ref(generateRandomNumber())
  const message = ref('')
  const attempts = ref(0)
  const isCorrect = ref(false)
  const highScore = ref(localStorage.getItem('highScore') || null)
  
  function generateRandomNumber() {
    return Math.floor(Math.random() * maxNumber.value) + 1
  }
  
  function setDifficulty() {
    maxNumber.value = difficulty.value === 'easy' ? 50 : difficulty.value === 'hard' ? 200 : 100
    resetGame()
  }
  
  function checkGuess() {
    attempts.value++
    
    if (userGuess.value < randomNumber.value) {
      message.value = 'Too low!'
    } else if (userGuess.value > randomNumber.value) {
      message.value = 'Too high!'
    } else {
      message.value = 'Correct!'
      isCorrect.value = true
  
      const newScore = {
        date: new Date().toLocaleString(),
        attempts: attempts.value,
        difficulty: difficulty.value
      }
      saveScore(newScore)
  
      if (!highScore.value || attempts.value < parseInt(highScore.value)) {
        highScore.value = attempts.value
        localStorage.setItem('highScore', highScore.value)
      }
    }
  }
  
  function saveScore(score) {
    let scores = JSON.parse(localStorage.getItem('leaderboard')) || []
    scores.push(score)
    localStorage.setItem('leaderboard', JSON.stringify(scores))
  }
  
  function resetGame() {
    userGuess.value = ''
    message.value = ''
    attempts.value = 0
    isCorrect.value = false
    randomNumber.value = generateRandomNumber()
  }
  </script>
  