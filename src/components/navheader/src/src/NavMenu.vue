<!--导航栏-->
<template>
  <el-menu
    :default-active="2"
    class="el-menu-demo"
    mode="horizontal"
    background-color="#545c64"
    text-color="#fff"
    active-text-color="#ffd04b">
    <el-menu-item :index="1">主页</el-menu-item>
    <el-menu-item :index="2">翻译界面</el-menu-item>
    <el-submenu index="3">
      <template slot="title">语料资源</template>
      <el-menu-item index="3-1">术语管理</el-menu-item>
      <el-menu-item index="3-2">翻译记忆</el-menu-item>
    </el-submenu>
  </el-menu>
</template>

<script>
export default {
  name: 'NavMenu'
}
</script>

<style scoped>
.el-header{
  background-color: #545c64;
  text-align: center;
  line-height: 60px;
}
</style>
