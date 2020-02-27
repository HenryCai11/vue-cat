<template>
  <el-container id="con">
  <!--头部导航栏及登陆按钮-->
  <el-header>
  <el-row>
  <el-col :span="16">
  <!--导航栏-->
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
  </el-col>
  <!-- 文本上传 -->
  <el-col :span="4">
    <div>
        <el-button icon="el-icon-upload el-icon--right" @click="dialogUploadVisible = true">上传文本</el-button>

        <el-dialog title="文本上传" 
          :visible.sync="dialogUploadVisible"
          :before-close="handleClose"
        >
          <el-input
            type="textarea"
            v-model="text"
            :autosize="{minRows: 10, maxRows: 10}"
            placeholder="将文本粘贴至此处"
            @keyup.17.enter="UploadText"
            >
          </el-input>
          <el-dropdown>
            <el-button type="primary">
              {{field}}<i class="el-icon-arrow-down el-icon--right"></i>
            </el-button>
            <el-dropdown-menu slot="dropdown">
              <el-dropdown-item>文学</el-dropdown-item>
              <el-dropdown-item divided>经济</el-dropdown-item>
              <el-dropdown-item divided>科技</el-dropdown-item>
            </el-dropdown-menu>
          </el-dropdown>
          <el-button
            size="small"
            @click="UploadText"
          >
            完成<i></i>
          </el-button>
        </el-dialog>
    </div>
  </el-col>
  <!-- 登陆注册 -->
  <el-col :span="4">
    <div>
        <template>
          <el-button type="primary" round @click="dialogSignInVisible = true">登陆</el-button>
          <el-button type="primary" round @click="dialogSignUpVisible = true">注册</el-button>

          <el-dialog
            :visible.sync="dialogSignInVisible"
          >
            <el-tabs type="border-card">
              <el-tab-pane label="登陆"></el-tab-pane>
              <el-tab-pane label="注册">注册</el-tab-pane>
            </el-tabs>
          </el-dialog>
        </template>
    </div>
  </el-col>
  </el-row>
  </el-header>
  </el-container>
</template>

<script>
export default {
  name: "NavHeader",

}
</script>

<style scoped>
.el-header{
  background-color: #545c64;
  text-align: center;
  line-height: 60px;
}

</style>