import './bootstrap';

import Alpine from 'alpinejs';
import Vue from 'vue';
import NotificationItem from './components/NotificationItem.vue';

window.Alpine = Alpine;

Alpine.start();
new Vue({
    el: '#app',
    components: {
        'notification-item': NotificationItem,
    },
    // ...
});
