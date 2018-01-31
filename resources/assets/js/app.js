
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Vue = require('vue');
window.moment = require('moment');

Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));
Vue.component('chat-list-contacts', require('./components/ContactList.vue'));
Vue.component('chat-form-contacts', require('./components/ContactForm.vue'));

const app = new Vue({
    el: '#app',

    data: {
        messages: [],
        contacts: []
    },

    created() {
        this.fetchMessages();
        this.fetchContacts();
        Echo.private('chat')
            .listen('MessageSentEvent', (e) => {
            this.messages.push({
            message: e.message.message,
            user: e.user[0]
        });
    });
    },

    methods: {
        fetchMessages() {
            axios.get('/IntranetTrn0.3/public/messages').then(response => {
                this.messages = response.data;
        });
        },
        fetchContacts() {
            axios.get('/IntranetTrn0.3/public/contactos').then(response => {
                this.contacts = response.data;
        });
        },
        addMessage(message) {
            this.messages.push(message);

            axios.post('/IntranetTrn0.3/public/messages', message).then(response => {});
        }
    }
});
