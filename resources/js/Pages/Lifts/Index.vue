<template>
    <Head title="Lifts"/>
    <BreezeAuthenticatedLayout>

        <div class="p-4">
            <h1 class="text-4xl">All Lifts</h1>
            <Link
                preserve-scroll
                href="/test"
                method="post"
                as="button"
                :data="{foo: 'bar'}"
                class="bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded text-white font-bold"
                :class="{ 'underline text-red-500': true }"
            >
                Test
            </Link>
            <div v-for="lift of lifts" :key="lift.id">
                <h1>{{ lift.reg_number }}</h1>
<!--                <pre>{{ lift }}</pre>-->
            </div>

        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Link, Head} from '@inertiajs/inertia-vue3';

export default {
    name: "index",
    props: {
        lifts: Array,
    },
    components: {
        Link,
        Head,
        BreezeAuthenticatedLayout
    }
}
</script>

<style scoped>

</style>
