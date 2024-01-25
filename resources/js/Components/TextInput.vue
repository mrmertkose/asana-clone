<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

defineProps({
    classes : {
        type : String,
        default : "rounded-md"
    },
    placeholder : {
        type : String
    }
})

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        :class="classes"
        :placeholder="placeholder"
        class="border-gray-300 dark:border-gray-500 dark:bg-[#3d3e40] dark:text-gray-300 focus:border-indigo-500 dark:focus:border-white focus:ring-indigo-500 dark:focus:ring-white placeholder:text-sm placeholder:dark:text-gray-400"
        v-model="model"
        ref="input"
    />
</template>
