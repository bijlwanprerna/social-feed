<template>

    <div>

        <h2>Child Component</h2>

        <h3>{{ title }}</h3>

        <button @click="sendEvent">

            Change Parent Message

        </button>

    </div>

</template>

<script setup>

defineProps({

    title: String

});

const emit = defineEmits([

    'change-message'
]);

function sendEvent() {

    emit('change-message');
}

</script>