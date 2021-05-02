<template>
  <div class="row">
    <div class="col">
      <div>
        <input type="text" v-model="search" placeholder="Поиск" />
      </div>
    </div>
    <div class="col col-lg-2">
      <button type="button" @click="doSearch()" class="btn btn-success">
        Поиск
      </button>
    </div>
    <div class="col col-lg-2">
      <button type="button" @click="doLimit()" class="btn btn-info">
        Больше записей
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["limit"],
  data: () => {
    return {
      search: "",
    };
  },
  methods: {
    doSearch() {
      console.log(this.search);
      this.$emit("search", { search: this.search });
    },
    doLimit() {
      this.$emit("addLimit");
    },
  },
};
</script>

<style scoped>
</style>