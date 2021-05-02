<template>
  <div>
    <search-personnel-from @addLimit="addLimit" @search="getAll" />
    <get-all-personel
      @sortType="sortSet"
      :sort="sort"
      :personnels="personnels"
    />
  </div>
</template>

<script>
import GetAllPersonel from "./components/getAllPersonel.vue";
import SearchPersonnelFrom from "./components/SearchPersonnelFrom.vue";

export default {
  components: {
    GetAllPersonel,
    SearchPersonnelFrom,
  },
  data: () => {
    return {
      personnels: [],
      search: "",
      limit: 100,
      sort: { field: "fio", type: 0 },
    };
  },
  methods: {
    getAll(search) {
      this.search = search ? search["search"] : "";
      axios
        .post("/api/v1/personnels", {
          search: this.search,
          sort: this.sort,
          limit: this.limit,
        })
        .then((res) => {
          if (res.status == 200) {
            //  console.log(res.data);
            this.personnels = res.data;
            this.limit = res.data.length === 0 ? 100 : this.limit;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    sortSet(val) {
      let sort = val.sort;
      if (this.sort.field === sort) {
        this.sort.type = !this.sort.type;
      } else {
        this.sort.field = sort;
        this.sort.type = 0;
      }
      this.getAll(this.search);
    },
    addLimit() {
      this.limit += 100;
      this.getAll(this.search);
    },
  },
  created() {
    this.getAll();
  },
};
</script>

<style scoped>
</style>