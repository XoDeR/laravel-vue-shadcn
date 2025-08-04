<script setup lang="ts">
import type { UserItemType } from '@/types';
import TasksExample from './TasksExample.vue';

interface Props {
  users?: UserItemType[];
}

withDefaults(defineProps<Props>(), {
  users: () => [],
});
</script>

<template>
  <TasksExample />
  <pre>{{ users }}</pre>
</template>