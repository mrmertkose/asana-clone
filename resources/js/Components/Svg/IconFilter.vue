<script setup>
defineProps({
    itemClass: {
        type: String,
        default: "fill-white",
        required: false
    }
})
</script>
<template>
    <svg :class="itemClass" viewBox="0 0 24 24"
         aria-hidden="true" focusable="false">
        <path
            d="M20,8H4C3.4,8,3,7.6,3,7s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,8,20,8z M18,13c0-0.6-0.4-1-1-1H7c-0.6,0-1,0.4-1,1s0.4,1,1,1h10C17.6,14,18,13.6,18,13z M15,19c0-0.6-0.4-1-1-1h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h4C14.6,20,15,19.6,15,19z"></path>
    </svg>
</template>
