<template>
  <el-container>
    <el-main width="70%">
      <translation-box></translation-box>
    </el-main>
    <!--右侧边栏-->
    <el-aside width="30%">
      <!--面包屑，每一个标签对应一个table-->
      <tm-tables></tm-tables>
      <!--机翻小窗-->
      <mt-box></mt-box>
    </el-aside>
  </el-container>
</template>

<script>
import MtBox from "./src/MtBox";
import TmTables from "./src/TmTables";
import TranslationBox from "./src/TranslationBox";

export default {
  name: "BodyBoxes",
  components: {
    MtBox,
    TmTables,
    TranslationBox
  }
};
</script>

<style scoped>
.el-aside {
  background-color: #d3dce6;
  color: #333;
  text-align: center;
  line-height: 30px;
}
.el-main {
  background-color: #e9eef3;
  padding: 0;
  color: #333;
  text-align: center;
  line-height: 30px;
}
</style>