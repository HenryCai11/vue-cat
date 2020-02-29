<template>
  <el-table height="250px" border :data="mtSource">
    <el-table-column prop="mt_zh" label="原文" width="200px"></el-table-column>
    <el-table-column prop="mt_en" label="机器翻译" width="254px" fixed="right"></el-table-column>
  </el-table>
</template>

<script>
export default {
  name: "MtBox"
}
</script>

<style scoped>

</style>