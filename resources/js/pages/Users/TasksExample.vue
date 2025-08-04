<script setup lang="ts">
import { columns } from '@/components/DataTable/columns'
import DataTable from '@/components/DataTable/DataTable.vue'
import tasks from '@/lib/ExampleData/tasks.json'
</script>

<template>
  <div class="hidden h-full flex-1 flex-col space-y-8 p-8 md:flex">
    <DataTable :data="tasks" :columns="columns" />
  </div>
</template>