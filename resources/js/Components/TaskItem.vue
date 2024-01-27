<script setup>
import IconDate from "@/Components/Svg/IconDate.vue";
import IconTask from "@/Components/Svg/IconTask.vue";
import IconLike from "@/Components/Svg/IconLike.vue";
import {router} from "@inertiajs/vue3";

defineProps({
    task: Object
})

const deleteItem = (id) => {
    router.delete(route('task.destroy',id), {
        preserveScroll: true
    })
}
</script>
<template>
    <div class="border border-gray-400 dark:border-gray-600 rounded-lg dark:bg-[#2a2b2d] p-3">

        <div class="flex flex-col gap-y-5">

            <div class="flex flex-row items-center gap-x-1">
                <div>
                    <IconTask item-class="w-5 h-5 cursor-pointer hover:fill-green-700 fill-gray-400 "/>
                </div>
                <div>{{ task.title }}</div>
            </div>

            <div class="flex justify-between items-center ">
                <div
                    class="border rounded-full border-dotted border-gray-500 dark:border-gray-300 p-1 hover:opacity-75 cursor-pointer">
                    <IconDate item-class="w-3 h-3 fill-gray-400"/>
                </div>
                <div class="dark:hover:bg-white/[.11] p-1 rounded-full cursor-pointer" @click="deleteItem(task.id)">
                    <IconLike item-class="h-3 w-3 fill-gray-400"/>
                </div>
            </div>

        </div>

    </div>
</template>
