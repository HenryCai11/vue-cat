<template>
  <el-tabs type="border-card">
    <el-tab-pane label="该文本的术语">
      <el-table :data="wordList" height="400px" border>
        <el-table-column prop="tb1zH" label="中文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb1eN" label="英文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb1oP" label="操作" height="100px" fixed="right">
          <template>
            <el-button type="text" size="small" icon="el-icon-check"></el-button>
            <el-button type="text" size="small" icon="el-icon-delete"></el-button>
          </template>
        </el-table-column>
      </el-table>
    </el-tab-pane>
    <el-tab-pane label="翻译记忆">
      <el-table :data="corpus" height="400px" border>
        <el-table-column prop="tb2zH" label="中文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb2eN" label="英文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb2Per" label="匹配度" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb1oP" label="操作" height="100px" fixed="right">
          <template>
            <el-button type="text" size="small" icon="el-icon-check"></el-button>
            <el-button type="text" size="small" icon="el-icon-delete"></el-button>
          </template>
        </el-table-column>
      </el-table>
    </el-tab-pane>
    <el-tab-pane label="其他术语">
      <el-table height="400px" border>
        <el-table-column prop="tb1zH" label="中文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb1eN" label="英文" width="200" height="100px"></el-table-column>
        <el-table-column prop="tb1oP" label="操作" height="100px" fixed="right">
          <template>
            <el-button type="text" size="small" icon="el-icon-check"></el-button>
            <el-button type="text" size="small" icon="el-icon-delete"></el-button>
          </template>
        </el-table-column>
      </el-table>
    </el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  name: "TmTables"
}
</script>

<style scoped>

</style>>