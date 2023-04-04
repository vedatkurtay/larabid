<template>
    <div v-if="flashSuccess" class="alert">
        {{ flashSuccess }}
    </div>
    <Link href="/listing">Index</Link>&nbsp;
    <Link href="/listing/create">Listing Page</Link>
    <slot></slot>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from "vue";

const page = usePage()
const flashSuccess = computed(() =>
    usePage().props.flash.success,
)
</script>

