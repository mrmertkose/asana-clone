<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
defineOptions({layout: AuthenticatedLayout})
import {Head} from "@inertiajs/vue3";
import IconLock from "@/Components/Svg/IconLock.vue";
import IconCustomize from "@/Components/Svg/IconCustomize.vue";
import IconFilter from "@/Components/Svg/IconFilter.vue";
import IconSort from "@/Components/Svg/IconSort.vue";
import IconList from "@/Components/Svg/IconList.vue";
import IconPlus from "@/Components/Svg/IconPlus.vue";
import IconMore from "@/Components/Svg/IconMore.vue";
</script>

<template>
    <Head title="My tasks"/>
    <div class="border-b dark:border-gray-600">
        <div class="flex flex-row justify-between items-center mx-5 my-3 dark:text-white">
            <div class="flex flex-row gap-x-4 items-center">
                <div>
                    <div class="bg-blue-500 p-3 rounded-full text-sm">MK</div>
                </div>
                <div class="flex flex-col gap-y-1">
                    <div class="text-xl">My tasks</div>
                    <div class="flex flex-row gap-x-6 text-sm text-gray-500 dark:text-gray-400">
                        <span>List</span>
                        <span class="text-gray-700 dark:text-gray-200">Board</span>
                        <span>Calendar</span>
                        <span>Files</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-x-3 items-center text-xs">
                <div
                    class="flex flex-row items-center gap-x-1 border dark:border-gray-600 p-1 rounded cursor-pointer hover:opacity-75 hover:dark:bg-white/[.11]">
                    <IconLock item-class="w-3 h-3 fill-gray-600 dark:fill-gray-400"/>
                    Share
                </div>
                <div
                    class="flex flex-row items-center gap-x-1 border dark:border-gray-600 p-1 rounded cursor-pointer hover:opacity-75 hover:dark:bg-white/[.11]">
                    <IconCustomize item-class="w-3 h-3"/>
                    Customize
                </div>
            </div>
        </div>
    </div>

    <div class="border-b dark:border-gray-600">
        <div class="flex justify-between dark:text-gray-400 items-center text-xs mx-5 mb-3 mt-2">
            <div>Created yesterday</div>
            <div class="flex flex-row gap-x-6">
                <div class="flex flex-row items-center gap-x-1 cursor-pointer">
                    <IconFilter item-class="w-3 h-3 fill-gray-400 dark:fill-gray-500"/>
                    Filter: 1
                </div>
                <div class="flex flex-row items-center gap-x-1 cursor-pointer">
                    <IconSort item-class="w-3 h-3 fill-gray-400 dark:fill-gray-500"/>
                    Sort
                </div>
                <div class="flex flex-row items-center gap-x-1 cursor-pointer">
                    <IconList item-class="w-3 h-3 fill-gray-400 dark:fill-gray-500"/>
                    Group by
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 dark:bg-[#252628]">
        <div class="mx-5 mt-5 flex flex-row overflow-x-auto">
            <div
                class="h-screen w-1/4 flex-shrink-0 hover:border hover:dark:border-gray-600 hover:border-gray-300 rounded-lg flex flex-col">
                <div class="flex justify-between items-center px-3 pt-2 cursor-pointer">
                    <div class="text-gray-500 dark:text-gray-300">New Tasks</div>
                    <div class="flex flex-row items-center gap-x-1.5">
                        <div class="p-1 hover:rounded hover:bg-gray-200 dark:hover:bg-white/[.11]">
                            <IconPlus item-class="w-5 h-5 fill-gray-400 dark:fill-gray-300"/>
                        </div>
                        <div class="p-1 hover:rounded hover:bg-gray-200 dark:hover:bg-white/[.11]">
                            <IconMore item-class="w-4 h-4 fill-gray-400 dark:fill-gray-300"/>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-3 mt-2 bg-gradient-to-b to-transparent from-gray-200 dark:from-[#292a2d] rounded-lg h-screen">
                    <div
                        class="flex justify-center items-center mt-5 text-sm text-gray-500 dark:text-gray-400 cursor-pointer hover:bg-gray-100 hover:dark:bg-white/[.11] mx-3 hover:rounded">
                        <IconPlus item-class="w-4 h-4 fill-gray-400 dark:fill-gray-300"/>
                        Add Task
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
