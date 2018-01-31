<template>

    <div class="panel-body msg_container_base"  >

        <div>
            <ul class="smart-timeline-list" id="ul_contactos">

                <li v-for="contact in contacts" style="padding: 5px">
                    <a href="#"onclick="nuevo_chat();return false;">
                        <div class="smart-timeline-icon" style="left: 0">
                            <!--<img src="img/avatars/sunny.png" width="32" height="32" alt="user" />-->
                            <img :src="'http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/' + contact.pers_id + '.JPG'"  onerror="this.src='http://172.20.1.11:7777/Sistemas/adjuntos/RRHH/personal/0.JPG'" class="online" width="32" height="32" alt="user">
                        </div>
                        <div class="smart-timeline-content" style="margin-left:45px;margin-top:10px">
                            <p>
                                <strong>{{ contact.nombre }}</strong>
                            </p>
                        </div>
                    </a>
                    <hr  style="margin-top: 0px;margin-bottom: 0px;border: 0; border-top: 1px solid #eee;">
                </li>

            </ul>
        </div>
        <!--
    <div class="row msg_container base_receive">
        <div class="col-md-2 col-xs-2 avatar">
            <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
        </div>
        <div class="col-md-10 col-xs-10">
            <div class="messages msg_receive">
                <p>{{ contact.usu_usuario }}</p>
                <time datetime="2009-11-13T20:00">{{ contact.usu_usuario }}</time>
            </div>
        </div>
    </div>-->

    </div>

</template>

<script>
    moment.locale('es');
    export default {
        props: ['contacts'],
        mounted() {
            console.log(this.contacts)
        },
        filters: {
            timeago(value) {
                return moment.utc(value).local().fromNow()
            }
        }
    }
</script>


