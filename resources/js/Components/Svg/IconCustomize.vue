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
    <svg :class="itemClass" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12 12" style="enable-background:new 0 0 12 12;" xml:space="preserve">
        <path class="st0" d="M5,1v3c0,0.6-0.4,1-1,1H1C0.4,5,0,4.6,0,4V1c0-0.6,0.4-1,1-1h3C4.6,0,5,0.4,5,1z"/>
        <path class="st1" d="M12,1v3c0,0.6-0.4,1-1,1H8C7.4,5,7,4.6,7,4V1c0-0.6,0.4-1,1-1h3C11.6,0,12,0.4,12,1z"/>
        <path class="st2" d="M5,8v3c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1V8c0-0.6,0.4-1,1-1h3C4.6,7,5,7.4,5,8z"/>
        <path class="st3" d="M11,12H8c-0.6,0-1-0.4-1-1V8c0-0.6,0.4-1,1-1h3c0.6,0,1,0.4,1,1v3C12,11.6,11.6,12,11,12z M8,8v3h3V8H8z M8,7.5  L8,8h0V7.5z"/>
</svg>
</template>
<style scoped>
.st0{fill:#F06A6A;}
.st1{fill:#F1BD6C;}
.st2{fill:#5DA283;}
.st3{fill:#4573D2;}
</style>
