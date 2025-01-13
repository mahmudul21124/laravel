<script setup>
import { usePage, Link, useForm } from "@inertiajs/vue3";

// const {posts} = usePage().props

defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
});

const form = useForm({});

const deleteForm = (id) => {
  // form.delete(`posts/${id}`)

  form.delete(route("posts.destroy", { id }));
};
</script>

<template>
  <div class="container">
    <h1 class="display-1">Welcome to Vue with Laravel</h1>
    <br />
    <Link
      :href="route('posts.create')"
      class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded my-3"
      >New Entry</Link
    >
    <br /><br />
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Sn</th>
          <th>Title</th>
          <th>Details</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="x in posts" :key="x.id">
          <td>{{ x.id }}</td>
          <td>{{ x.title }}</td>
          <td>{{ x.body }}</td>
          <td>
            <Link :href="route('posts.edit', x.id)" class="btn btn-info btn-sm"
              >Edit</Link
            >
            ||

            <button class="btn btn-danger" @click="deleteForm(x.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped></style>
