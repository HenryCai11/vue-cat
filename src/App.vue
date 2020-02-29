<template>
  <div id="app">
    <nav-header></nav-header>
    <body-boxes></body-boxes>
  </div>
</template>

<script>
import NavHeader from "./components/navheader"
import BodyBoxes from "./components/bodyboxes"

export default {
  name: 'app',
  components: {
    NavHeader,
    BodyBoxes
  }
}
</script>

<style>
*{
  padding: 0;
  margin: 0;
}
</style>
