<script setup>
import IconPlus from "@/Components/Svg/IconPlus.vue";
import IconMore from "@/Components/Svg/IconMore.vue";
import TaskItem from "@/Components/TaskItem.vue";
import {router, useForm} from "@inertiajs/vue3";

const props = defineProps({
    section: Object
})

const form = useForm({
    tasks: props.section.task || []
})

const addTaskRow = () => {
    let item = {title: '', start_date: '', due_date: '', section_id: props.section.id}

    form.tasks.push(item);

    router.post(route('task.create'), item, {
        preserveScroll: true
    });
}
</script>
<template>
    <div
        class="h-screen w-1/4 flex-shrink-0 hover:border hover:dark:border-gray-600 hover:border-gray-300 rounded-lg flex flex-col overflow-y-auto">
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

                <template v-if="form.tasks.length > 0" v-for="item in form.tasks" :key="item.id">
                    <TaskItem :task="item"/>
                </template>

                <div
                    @click="addTaskRow"
                    class="flex justify-center items-center text-sm text-gray-500 dark:text-gray-400 cursor-pointer hover:bg-gray-100 p-2 hover:dark:bg-white/[.11] hover:rounded">
                    <IconPlus item-class="w-4 h-4 fill-gray-400 dark:fill-gray-300"/>
                    Add Task
                </div>

            </div>
        </div>
    </div>
</template>
