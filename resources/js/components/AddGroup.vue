<template>
  <div class="group">
    <div class="col-12">
      <h3>Name: {{ group_title | properCase }}</h3>
      <button @click="del">Delete</button>
    </div>
  </div>
</template>
<script>
  export default {
    methods: {

      del() {
        this.$emit('delete', this.id);
      }
    },
    props: ['id', 'group_title'],
    filters: {
      properCase(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
      }
    }
  }
</script>
