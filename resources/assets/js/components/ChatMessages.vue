<template>


    <div class="panel-body msg_container_base"  >
        <div v-for="message in messages">
        <div class="row msg_container base_sent" v-if="message.user.usuario_id == 387">
            <div class="col-md-10 col-xs-10">
                <div class="messages msg_sent">
                    <p>{{ message.message }}</p>
                    <time datetime="2009-11-13T20:00">{{ message.user.usu_usuario }} • {{ message.created_at | timeago }}</time>
                </div>
            </div>
            <div class="col-md-2 col-xs-2 avatar">
                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
            </div>
        </div>

        <div class="row msg_container base_receive"  v-else>
            <div class="col-md-2 col-xs-2 avatar">
                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="messages msg_receive">
                    <p>{{ message.message }}</p>
                    <time datetime="2009-11-13T20:00">{{ message.user.usu_usuario }} • {{ message.created_at | timeago }}</time>
                </div>
            </div>
        </div>

    </div>
    </div>
</template>

<script>
    moment.locale('es');
    export default {
        props: ['messages'],
        mounted() {
            console.log(this.messages)
        },
        filters: {
            timeago(value) {
                return moment.utc(value).local().fromNow()
            }
        }
    }
</script>


