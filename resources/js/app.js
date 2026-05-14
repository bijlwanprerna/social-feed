//import './bootstrap';

// console.log('APP JS LOADED');

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';

// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'reverb',
//     key: import.meta.env.VITE_REVERB_APP_KEY,
//     wsHost: import.meta.env.VITE_REVERB_HOST,
//     wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
//     forceTLS: false,
//     enabledTransports: ['ws'],
// });

// console.log(window.Echo);

// window.Echo.connector.pusher.connection.bind('connected', function () {

//     console.log('WebSocket Connected');
// });

// window.Echo.channel('posts')
//     .listen('.post.created', (e) => {

//         console.log('EVENT RECEIVED');

//         console.log(e);

//         alert(e.message);
//     });


import { createApp } from 'vue'

//import SearchComponent from './components/SearchComponent.vue'

import PropsEmitDemo from './components/PropsEmitDemo.vue';

createApp(PropsEmitDemo).mount('#app')