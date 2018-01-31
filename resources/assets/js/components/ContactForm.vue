<template>
    <div class="panel-footer">
        <div class="input-group">
            <input type="text" class="form-control input-sm chat_input" placeholder="Busca una persona aquí..." id="buscar_contacto" onkeyup="buscar_contacto();"/>
            <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">Buscar</button>
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
