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
    <svg :class="itemClass" viewBox="0 0 32 32">
        <path
            d="M16,13c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3S14.3,13,16,13z M3,13c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3S1.3,13,3,13z M29,13c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3S27.3,13,29,13z"></path>
    </svg>
</template>
