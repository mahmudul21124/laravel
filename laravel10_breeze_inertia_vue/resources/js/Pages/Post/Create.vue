<script setup>
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
    title: "",
    body: "",
});

const submit = () => {
  form.post("/posts");
};
</script>

<template>
    <div class="container">
        <Link :href="route('posts.index')" class="btn btn-success">Posts</Link>  <br><br>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                    Title:</label>
                <input type="text"
                    class="form-control"
                    placeholder="Enter Title" id="title" v-model="form.title" />
            </div>

            <div class="form-group">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">
                    Body:</label>
                <textarea
                    class="form-control"
                    id="body" v-model="form.body" placeholder="Enter Body"></textarea>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3 text-white">
                Submit
            </button>
        </form>
    </div>
</template>

<style scoped></style>
