<script setup>
import IconDate from "@/Components/Svg/IconDate.vue";
import IconTask from "@/Components/Svg/IconTask.vue";
import IconTrash from "@/Components/Svg/IconTrash.vue";
import {router, useForm} from "@inertiajs/vue3";
import {vOnClickOutside} from '@vueuse/components'
import {ref} from "vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    task: Object
})

const editInput = ref(false);

const form = useForm({
    title: props.task.title || ''
})

const editTitle = ref(props.task.title || '');

const editFalse = () => {
    if (form.title !== editTitle.value) {
        form.patch(route('task.update.title', props.task.id), {
            preserveScroll: true,
            preserveState: false
        })
    }

    editTitle.value = form.title;
    editInput.value = false;
}

const deleteItem = () => {
    router.delete(route('task.destroy', props.task.id), {
        preserveScroll: true,
        preserveState: false
    })
}

const completeTask = () => {
    router.patch(route('task.complete', props.task.id), {}, {
        preserveScroll: true,
        preserveState: false
    })
}
</script>
<template>
    <div class="border border-gray-400 dark:border-gray-600 rounded-lg dark:bg-[#2a2b2d] p-3">

        <div class="flex flex-col gap-y-5">

            <div class="flex flex-row items-center gap-x-1">
                <div class="cursor-pointer" @click="completeTask">
                    <IconTask item-class="w-5 h-5 hover:fill-green-700 fill-gray-400 "/>
                </div>
                <div class="cursor-pointer w-full">
                    <div v-if="!editInput" @click="editInput = true" class="text-gray-400">
                        <div>&nbsp;{{ form.title }}</div>
                    </div>
                    <div v-if="editInput">
                        <TextInput v-model="form.title" v-on-click-outside="editFalse" placeholder="something..."
                                   classes="w-full border-none h-7 rounded-lg"/>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center ">
                <div
                    class="border rounded-full border-dotted border-gray-500 dark:border-gray-300 p-1 hover:opacity-75 cursor-pointer">
                    <IconDate item-class="w-3 h-3 fill-gray-400"/>
                </div>
                <div class="dark:hover:bg-white/[.11] p-1 rounded-full cursor-pointer" @click="deleteItem">
                    <IconTrash item-class="h-3 w-3 dark:text-gray-300"/>
                </div>
            </div>

        </div>

    </div>
</template>
