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
    <svg :class="itemClass" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path
            d="M19.1,2H18V1c0-0.6-0.4-1-1-1s-1,0.4-1,1v1H8V1c0-0.6-0.4-1-1-1S6,0.4,6,1v1H4.9C2.2,2,0,4.2,0,6.9v12.1  C0,21.8,2.2,24,4.9,24h14.1c2.7,0,4.9-2.2,4.9-4.9V6.9C24,4.2,21.8,2,19.1,2z M4.9,4H6v1c0,0.6,0.4,1,1,1s1-0.4,1-1V4h8v1  c0,0.6,0.4,1,1,1s1-0.4,1-1V4h1.1C20.7,4,22,5.3,22,6.9V8H2V6.9C2,5.3,3.3,4,4.9,4z M19.1,22H4.9C3.3,22,2,20.7,2,19.1V10h20v9.1  C22,20.7,20.7,22,19.1,22z"></path>
    </svg>
</template>
