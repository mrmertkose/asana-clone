<script setup>
import {IconMoon, IconSun} from "@tabler/icons-vue";
import {useDark, useToggle} from "@vueuse/core";
const isDark = useDark();
const toggleDark = useToggle(isDark);
</script>
<template>
    <div @click="toggleDark()" class="cursor-pointer">
        <IconSun v-if="isDark" class="w-6 h-6"/>
        <IconMoon v-else class="w-6 h-6 text-slate-500"/>
    </div>
</template>
