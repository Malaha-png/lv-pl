<template>
  <div>
    <div class="row">
      <div
        @click="doSort('fio')"
        :class="[sort.field === 'fio' ? 'btn-primary' : '']"
        class="col-sm"
      >
        ФИО {{ sort.field === "fio" ? (sort.type ? "↓" : "↑") : "" }}
      </div>
      <div
        @click="doSort('post')"
        :class="[sort.field === 'post' ? 'btn-primary' : '']"
        class="col-sm"
      >
        Должность
        {{ sort.field === "post" ? (sort.type ? "↓" : "↑") : "" }}
      </div>
      <div
        @click="doSort('salary')"
        :class="[sort.field === 'salary' ? 'btn-primary' : '']"
        class="col-sm"
      >
        Зарплата
        {{ sort.field === "salary" ? (sort.type ? "↓" : "↑") : "" }}
      </div>
      <div
        @click="doSort('director')"
        :class="[sort.field === 'director' ? 'btn-primary' : '']"
        class="col-sm"
      >
        Начальник
        {{ sort.field === "director" ? (sort.type ? "↓" : "↑") : "" }}
      </div>
      <div
        @click="doSort('created_at')"
        :class="[sort.field === 'created_at' ? 'btn-primary' : '']"
        class="col-sm"
      >
        Дата принятия
        {{ sort.field === "created_at" ? (sort.type ? "↓" : "↑") : "" }}
      </div>
    </div>
    <div v-for="(el, index) in personnels" :key="index">
      <personnel-cart :personnel="el" />
    </div>
  </div>
</template>

<script>
import PersonnelCart from "./PersonnelCart.vue";

export default {
  props: ["personnels", "sort"],
  components: { PersonnelCart },
  methods: {
    doSort(val) {
      this.$emit("sortType", { sort: val });
    },
  },
};
</script>

<style>
</style>