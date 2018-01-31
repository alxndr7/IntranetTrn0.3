<template>
    <div class="panel-footer">
        <div class="input-group">
            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Escribe tu mensaje aquí..." v-model="newMessage" @keyup.enter="sendMessage"/>
            <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">Enviar</button>
                        </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                //alert(JSON.stringify(this.user[0]));
                this.$emit('messagesent', {
                    user: this.user[0],
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }    
    }
</script>
