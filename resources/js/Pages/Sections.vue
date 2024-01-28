<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, router} from "@inertiajs/vue3";
import IconLock from "@/Components/Svg/IconLock.vue";
import IconCustomize from "@/Components/Svg/IconCustomize.vue";
import IconFilter from "@/Components/Svg/IconFilter.vue";
import IconSort from "@/Components/Svg/IconSort.vue";
import IconList from "@/Components/Svg/IconList.vue";
import TaskCard from "@/Components/TaskCard.vue";
import draggable from "vuedraggable";
import {ref} from "vue";

defineOptions({layout: AuthenticatedLayout})

const props = defineProps({
    sections: Object
})
const sectionsData = ref(props.sections);

let drag = false;

function finish() {
    const postData = sectionsData.value.map((el, index) => {
        return {
            id: el.id,
            position: index + 1
        };
    });
    router.patch(route('section.update.position'),postData,
        {
            preserveScroll: true,
        }
    )
}
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

    <div class="bg-gray-50 dark:bg-[#252628] h-screen">
        <div class="mx-5 mt-5 flex flex-row overflow-x-auto">

            <draggable
                v-model="sectionsData"
                @start="drag = true"
                @end="drag = false"
                item-key="id"
                class="w-full flex"
                tag="div"
                handle=".my-handle"
                :animation="200"
                ghost-class="ghost"
                @change="finish"
            >
                <template #item="{element}">
                    <TaskCard :section="element" :key="element.id"/>
                </template>
            </draggable>
        </div>
    </div>
</template>
