<template>
  <div>
    <el-button icon="el-icon-upload el-icon--right" @click="dialogUploadVisible = true">上传文本</el-button>

    <el-dialog title="文本上传" :visible.sync="dialogUploadVisible" :before-close="handleClose">
      <el-input
        type="textarea"
        v-model="text"
        :autosize="{minRows: 10, maxRows: 10}"
        placeholder="将文本粘贴至此处"
        @keyup.17.enter="UploadText"
      ></el-input>
      <el-dropdown>
        <el-button type="primary">
          {{field}}
          <i class="el-icon-arrow-down el-icon--right"></i>
        </el-button>
        <el-dropdown-menu slot="dropdown">
          <el-dropdown-item>文学</el-dropdown-item>
          <el-dropdown-item divided>经济</el-dropdown-item>
          <el-dropdown-item divided>科技</el-dropdown-item>
        </el-dropdown-menu>
      </el-dropdown>
      <el-button size="small" @click="UploadText">
        完成
        <i></i>
      </el-button>
    </el-dialog>
  </div>
</template>