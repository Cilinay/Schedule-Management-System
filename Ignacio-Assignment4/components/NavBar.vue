<template>
    <header class="bg-indigo-700 text-white p-4 shadow-md">
      <div class="flex justify-between max-w-6xl mx-auto">
        <h1 class="text-xl font-bold">🎮 Guessing Game</h1>
        <nav class="flex items-center gap-3">
          <router-link to="/">Start Game</router-link>
          <span>|</span>
          <router-link to="/mechanics">Game Mechanics</router-link>
          <span>|</span>
          <router-link to="/leaderboard">Leaderboard</router-link>
          <span>|</span>
          <button @click="$emit('toggleDark')">🌙 Toggle</button>
        </nav>
      </div>
    </header>
</template>
  
