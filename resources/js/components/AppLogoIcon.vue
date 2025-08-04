<script setup lang="ts">
import type { HTMLAttributes } from 'vue';
import { CommandIcon } from 'lucide-vue-next';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>
    <CommandIcon class="size-4" />
</template>
