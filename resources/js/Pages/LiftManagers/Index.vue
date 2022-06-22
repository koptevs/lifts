<template>
    <h1 class="font-bold text-4xl text-red-600">Lift Managers / Index</h1>
    <pre>
        {{ liftManagers }}
    </pre>

</template>

<script>
export default {
    props: {
        liftManagers: Array,
    },
    components: {}
}
</script>
