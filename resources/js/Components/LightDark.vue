<script setup>
import {useDark, useToggle} from "@vueuse/core";
import IconSun from "@/Components/Svg/IconSun.vue";
import IconMoon from "@/Components/Svg/IconMoon.vue";
const isDark = useDark();
const toggleDark = useToggle(isDark);
</script>
<template>
    <div @click="toggleDark()" class="cursor-pointer">
        <IconSun v-if="isDark" class="w-6 h-6"/>
        <IconMoon v-else class="w-6 h-6 text-slate-500"/>
    </div>
</template>
