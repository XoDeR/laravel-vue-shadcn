<script setup lang="ts">
import type { UserItemType } from '@/types';

interface Props {
  users?: UserItemType[];
}

withDefaults(defineProps<Props>(), {
  users: () => [],
});
</script>

<template>
  <pre>{{ users }}</pre>
</template>