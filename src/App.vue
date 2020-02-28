<template>
  <div id="app">
    <nav-header></nav-header>
  </div>
</template>

<script>
import NavHeader from "./components/navheader/src/NavHeader"

export default {
  name: 'app',
  components: {
    NavHeader
  }
}
</script>

<style>
*{
  padding: 0;
  margin: 0;
}
</style>
