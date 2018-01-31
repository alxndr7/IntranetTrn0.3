<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" v-for="message in messages">
                    <div class="panel-heading"><strong>{{ message.user.usu_usuario }}</strong></div>
                    <div class="panel-body">
                        <p>{{ message.message }}</p>
                        <span class="text-diff pull-right"><em>{{ message.created_at | timeago }}</em></span>
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
<style scoped>
    .panel{
        margin-bottom: 0;
    }
    .text-diff {
        font-size: 0.8em;
        color: #cccccc;
    }
</style>