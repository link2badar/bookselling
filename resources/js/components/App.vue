<template>
  <div id="app">
    <div class="heading">
      <h1>Group</h1>
    </div>
    <crud-component
      v-for="group in cruds"
      v-bind="crud"
      :key="crud.id"
      @update="update"
      @delete="del"
    ></crud-component>
    <div>
      <button @click="create">Add</button>
    </div>
  </div>
</template>
