<template>

    <div>

        <h1>Search Posts</h1>

        <input
            type="text"
            v-model="query"
            @input="searchPosts"
            placeholder="Search here"
        >

        <ul>

            <li
                v-for="post in posts"
                :key="post"
            >

                {{ post }}

            </li>

        </ul>

        <p v-if="!loading && query && posts.length===0">No result Found</p>

    </div>

</template>

<script setup>

import { ref } from 'vue';

import axios from 'axios';

const query = ref('');

const posts = ref([]);

const loading = ref(false);

let timeout = null;

async function searchPosts() {

    clearTimeout(timeout);

    timeout = setTimeout(async function () {

        try {

            if (!query.value) {

                posts.value = [];

                return;
            }

            loading.value = true;

            const response = await axios.get(

                `/social-feed-api/public/api/search?q=${query.value}`
            );

            posts.value = response.data;

        } catch (error) {

            console.log(error);

        } finally {

            loading.value = false;
        }

    }, 300);
}

</script>