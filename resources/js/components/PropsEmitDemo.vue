<template>

    <div>

        <h1>Parent Component</h1>

        <h2>{{ message }}</h2>

        <ChildComponent
            :title="message"
            @change-message="changeMessage"
        />

    </div>

</template>

<script setup>

import { ref } from 'vue';

import ChildComponent from './ChildComponent.vue';

const message = ref('Hello world From Parent');

function changeMessage() {

    message.value = 'Message Changed By Child';
}

</script>