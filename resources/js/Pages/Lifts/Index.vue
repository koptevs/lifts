<template>
    <div class="p-4">
        <h1 class="text-4xl">Hellou!</h1>
        <section v-for="lift of lifts">
            <h1>{{ lift.reg_number }}</h1>
            <pre>{{ lift }}</pre>
        </section>

    </div>
</template>

<script>
export default {
    name: "index",
    props: {
        lifts: Array,
    }
}
</script>

<style scoped>

</style>
