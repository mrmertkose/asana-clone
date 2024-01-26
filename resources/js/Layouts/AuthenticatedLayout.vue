<script setup>
import {ref} from 'vue';
import {Link} from '@inertiajs/vue3';
import LightDark from "@/Components/LightDark.vue";
import IconNavbar from "@/Components/Svg/IconNavbar.vue";
import IconHome from "@/Components/Svg/IconHome.vue";
import IconNotify from "@/Components/Svg/IconNotify.vue";
import IconTask from "@/Components/Svg/IconTask.vue";
import TextInput from "@/Components/TextInput.vue";
import CreateMenu from "@/Components/CreateMenu.vue";

const sidebarActive = ref(true);
</script>

<template>
    <div>
        <div class="min-h-screen">
            <nav class="header-bg border-b border-gray-100 dark:border-[#424244]">
                <div class="flex justify-between p-2 px-5 items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <div class="cursor-pointer hover:bg-white/[.11] p-1.5 hover:rounded-md"
                             @click="sidebarActive = !sidebarActive">
                            <IconNavbar item-class="fill-slate-600 dark:fill-white w-4 h-4"/>
                        </div>
                        <CreateMenu/>
                    </div>
                    <div>
                        <TextInput classes="rounded-2xl h-[2rem] w-[480px]" placeholder="Search" model-value=""/>
                    </div>
                    <div>
                        <LightDark/>
                    </div>
                </div>
            </nav>
            <div class="grid grid-cols-12">
                <Transition name="show">
                    <aside v-if="sidebarActive" class="col-span-2 bg-white dark:bg-[#2e2e30] h-screen p-3">
                        <ul class="flex flex-col gap-y-1">
                            <li :class="{'sidebar-active': $page.url.startsWith('/home')}"
                                class="sidebar-hover py-1.5 px-2">
                                <Link :href="route('home')" class="sidebar-menu-item">
                                    <IconHome item-class="w-5 h-5 fill-gray-600 dark:fill-gray-400"/>
                                    Home
                                </Link>
                            </li>
                            <li :class="{'sidebar-active': $page.url.startsWith('/sections')}"
                                class="sidebar-hover py-1.5 px-2">
                                <Link :href="route('section.index')" class="sidebar-menu-item">
                                    <IconTask item-class="w-5 h-5 fill-gray-600 dark:fill-gray-400"/>
                                    My Tasks
                                </Link>
                            </li>
                            <li :class="{'sidebar-active': $page.url.startsWith('/inbox')}"
                                class="sidebar-hover py-1.5 px-2">
                                <Link :href="route('home')" class="sidebar-menu-item">
                                    <IconNotify item-class="w-5 h-5 fill-gray-600 dark:fill-gray-400"/>
                                    Inbox
                                </Link>
                            </li>
                        </ul>
                    </aside>
                </Transition>
                <main class="overflow-y-auto" :class="!sidebarActive ? 'col-span-12' : 'col-span-10'">
                    <slot/>
                </main>
            </div>
        </div>
    </div>
</template>
