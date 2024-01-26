<script setup>
import IconDate from "@/Components/Svg/IconDate.vue";
import IconPlus from "@/Components/Svg/IconPlus.vue";
import IconTask from "@/Components/Svg/IconTask.vue";
import IconLike from "@/Components/Svg/IconLike.vue";
import IconMore from "@/Components/Svg/IconMore.vue";
defineProps({
    section : Object
})
</script>
<template>
    <div
        class="h-screen w-1/4 flex-shrink-0 hover:border hover:dark:border-gray-600 hover:border-gray-300 rounded-lg flex flex-col">
        <div class="flex justify-between items-center px-3 pt-2 cursor-pointer">
            <div class="text-gray-500 dark:text-gray-300">{{ section.title }}</div>
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
            <div class="mx-3 mt-3 flex flex-col gap-y-3">

                <div class="border border-gray-400 dark:border-gray-600 rounded-lg dark:bg-[#2a2b2d] p-3">

                    <div class="flex flex-col gap-y-5">

                        <div class="flex flex-row items-center gap-x-1">
                            <div><IconTask item-class="w-5 h-5 cursor-pointer hover:fill-green-700 fill-gray-400 "/></div>
                            <div>input</div>
                        </div>

                        <div class="flex justify-between items-center ">
                            <div class="border rounded-full border-dotted border-gray-500 dark:border-gray-300 p-1 hover:opacity-75 cursor-pointer">
                                <IconDate item-class="w-3 h-3 fill-gray-400"/>
                            </div>
                            <div class="dark:hover:bg-white/[.11] p-1 rounded-full cursor-pointer">
                                <IconLike item-class="h-3 w-3 fill-gray-400" />
                            </div>
                        </div>

                    </div>

                </div>

                <div
                    class="flex justify-center items-center text-sm text-gray-500 dark:text-gray-400 cursor-pointer hover:bg-gray-100 p-2 hover:dark:bg-white/[.11] hover:rounded">
                    <IconPlus item-class="w-4 h-4 fill-gray-400 dark:fill-gray-300"/>
                    Add Task
                </div>

            </div>
        </div>
    </div>
</template>
