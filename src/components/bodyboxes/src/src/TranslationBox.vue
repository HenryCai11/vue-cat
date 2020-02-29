<template>
  <el-table width="70%" border :data="tslData" height="720px" highlight-current-row="true">
    <el-table-column prop="zh_CN" label="中文"></el-table-column>
    <el-table-column prop="en_US" label="英文">
      <template slot-scope="bilin">
        <el-input
          :autosize="{minRows: 2, maxRows: 8}"
          placeholder="待翻译"
          type="textarea"
          v-model="translatEn[bilin.$index]"
          ref="inputItem"
          @focus="mtTranslat(bilin.row)"
          @keyup.ctrl.39.native="autoFill(bilin)"
          @keyup.ctrl.37.native="deleteFill(bilin)"
          @keyup.ctrl.enter.native="changeLine(bilin)"
        ></el-input>
      </template>
    </el-table-column>
    <el-table-column label="操作" width="100" fixed="right">
      <template slot-scope="bilin">
        <el-button type="text" size="small" icon="el-icon-caret-right" @click="autoFill(bilin)"></el-button>
        <el-button type="text" size="small" icon="el-icon-check"></el-button>
        <el-button type="text" size="small" icon="el-icon-delete" @click="deleteFill(bilin)"></el-button>
      </template>
    </el-table-column>
  </el-table>
</template>

<script>
export default {
  name: "TranslationBox",
}
</script>

<style scoped>

</style>