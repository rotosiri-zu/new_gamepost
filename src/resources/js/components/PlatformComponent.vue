<template>
<div>
  <div class="form-group">
    <label for="paltform">プラットフォーム</label>
    <select id="paltform_id" name="paltform_id" class="form-control" v-model="selected">
      <option disabled value="">選択してください</option>
      <option value="parent_id" v-for="parent in parents"></option>
    </select>
  </div>
  <div class="form-group">
    <select class="form-control">
    <option disabled value="">選択してください</option>
    <option value="child_id" v-for="child in childs"></option>
    </select>
  </div>
</div>  
</template>

<script>
  export default {
    props: ["",]
  }
</script>