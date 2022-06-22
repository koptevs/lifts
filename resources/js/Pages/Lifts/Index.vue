<template>
    <h1 class="font-bold text-4xl text-red-600">Lifts / Index</h1>
    <pre>
        {{ lifts }}
    </pre>
</template>

<script>

export default {
    name: "index",
    props: {
        lifts: Array,
    },
    components: {}
}
</script>
