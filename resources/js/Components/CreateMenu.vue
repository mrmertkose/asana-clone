<script setup>
import {Link} from '@inertiajs/vue3';
import {Menu, MenuButton, MenuItem, MenuItems} from "@headlessui/vue";
import IconPlus from "@/Components/Svg/IconPlus.vue";
import IconTask from "@/Components/Svg/IconTask.vue";
import IconAssigment from "@/Components/Svg/IconAssigment.vue";
</script>
<template>
    <Menu as="div">
        <MenuButton>
            <div class="bg-gray-100 dark:bg-[#3d3e40] dark:hover:bg-[#424244] border rounded-2xl border-gray-300 dark:border-[#6a696a] flex flex-row items-center ps-1.5 pe-3 py-1 gap-x-1.5 cursor-pointer">
                <div class="bg-[#f06a6a] p-0.5 rounded-full">
                    <IconPlus item-class="fill-white w-4 h-4"/>
                </div>
                <p class="dark:text-gray-200 text-sm">Create</p>
            </div>
        </MenuButton>
        <transition
            enter-active-class="transition duration-100 ease-out"
            enter-from-class="transform scale-95 opacity-0"
            enter-to-class="transform scale-100 opacity-100"
            leave-active-class="transition duration-75 ease-out"
            leave-from-class="transform scale-100 opacity-100"
            leave-to-class="transform scale-95 opacity-0"
        >
            <MenuItems class="absolute top-1 ms-2 translate-x-20 dark:bg-[#1e1f21] border dark:border-gray-600 rounded-md flex flex-col min-w-44 text-sm text-start ">
                <MenuItem v-slot="{ active }">
                    <Link :class='{ "bg-white/[.11]": active }' class="text-gray-200 flex flex-row items-center gap-x-2 p-2.5" :href="route('home')">
                        <IconTask item-class="w-5 h-5 fill-gray-400"/>
                       Task
                    </Link>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                    <Link :class='{ "bg-white/[.11]": active }' class="text-gray-200 flex flex-row items-center gap-x-2 p-2.5" :href="route('home')">
                        <IconAssigment item-class="w-5 h-5 fill-gray-400"/>
                        Project
                    </Link>
                </MenuItem>
            </MenuItems>
        </transition>
    </Menu>
</template>
