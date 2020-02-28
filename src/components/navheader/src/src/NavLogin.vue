<template>
  <div>
    <template>
      <el-button type="primary" round @click="dialogSignInVisible = true">登陆</el-button>
      <el-button type="primary" round @click="dialogSignUpVisible = true">注册</el-button>

      <el-dialog :visible.sync="dialogSignInVisible">
        <el-tabs type="border-card">
          <el-tab-pane label="登陆"></el-tab-pane>
          <el-tab-pane label="注册">注册</el-tab-pane>
        </el-tabs>
      </el-dialog>
    </template>
  </div>
</template>

<script>
export default {
  name: 'NavLogin'
}
</script>

<style scoped>

</style>