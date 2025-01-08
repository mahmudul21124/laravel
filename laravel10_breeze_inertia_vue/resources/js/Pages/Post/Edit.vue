<script setup>
import { useForm, usePage, Link } from "@inertiajs/vue3";

const {post} = usePage().props

const form = useForm({
    title: post.title,
    body: post.body
})

const update = () =>{
    form.put(route("posts.update", post.id))
}
</script>

<template>
  <div class="container">
    <form @submit.prevent="update">
        <div class="form-group">
            <label for="tile">Title</label>
            <input type="text" class="form-control" placeholder="Edit Title"  v-model="form.title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" placeholder="Edit Body"  v-model="form.body"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-info" >UPDATE</button>
    </form>

  </div>
</template>
