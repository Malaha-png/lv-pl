<template>
  <div class="row">
    <div class="col-sm">{{ personnel.fio }}</div>
    <div class="col-sm">{{ personnel.post }}</div>
    <div class="col-sm">{{ personnel.salary }}</div>
    <div class="col-sm">{{ personnel.director }}</div>
    <div class="col-sm">{{ new Date(personnel.created_at).toLocaleDateString('ru-RU') }}</div>
  </div>
</template>


<script>
export default {
  props: ["personnel"],
};
</script>

<style>
</style>