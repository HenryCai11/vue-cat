<template>
  <el-container id="con">
  <!--头部导航栏及登陆按钮-->
  <el-header>
  <el-row>
  <el-col :span="16">
  <!--导航栏-->
  <nav-menu></nav-menu>
  </el-col>
  <!-- 文本上传 -->
  <el-col :span="4">
    <nav-upload></nav-upload>
  </el-col>
  <!-- 登陆注册 -->
  <el-col :span="4">
    <nav-login></nav-login>
  </el-col>
  </el-row>
  </el-header>
  </el-container>
</template>

<script>
import NavMenu from './src/NavMenu';
import NavUpload from './src/NavUpload';
import NavLogin from './src/NavLogin';

export default {
  name: "NavHeader",
  components: {
    NavMenu,
    NavUpload,
    NavLogin
  }
}
</script>

<style scoped>
.el-header{
  padding: 0;
  background-color: #545c64;
  text-align: center;
  line-height: 60px;
}

</style>