
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
/*
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
*/
window.Vue = require('vue');
window.moment = require('moment');

Vue.component('message', require('./components/Message2.vue'));
Vue.component('sent-message', require('./components/Sent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        messages: []
    },
    mounted(){
        this.fetchMessages();
        Echo.private('chat')
            .listen('MessageSentEvent', (e) => {
            this.messages.push({
            message: e.message.message,
            user: e.user
        })
    })
    },
    methods: {
        addMessage(message) {
            this.messages.push(message)
            axios.post('/messages', message).then(response => {
                //console.log(response)
            })
        },
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data
        })
        }
    }

});