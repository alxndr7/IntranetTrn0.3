@extends('layouts.master')

@section('content')

    <style>

        .col-md-2, .col-md-10{
            padding:0;
        }
        .panel{
            margin-bottom: 0px;
        }
        .chat-window{
            bottom:0;
            right: 0;
            position:fixed;
            float:left;
            margin-left:10px;
        }
        .chat-window > div > .panel{
            border-radius: 5px 5px 0 0;
        }
        .icon_minim{
            padding:2px 10px;
        }
        .msg_container_base{
            background: #e5e5e5;
            margin: 0;
            padding: 0 10px 10px;
            max-height:300px;
            overflow-x:hidden;
        }
        .top-bar {
            background: #666;
            color: white;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }
        .msg_receive{
            padding-left:0;
            margin-left:0;
        }
        .msg_sent{
            padding-bottom:20px !important;
            margin-right:0;
        }
        .messages {
            background: white;
            padding: 10px;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            max-width:100%;
        }
        .messages > p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
        }
        .messages > time {
            font-size: 11px;
            color: #ccc;
        }
        .msg_container {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }

        .avatar {
            position: relative;
        }
        .base_receive > .avatar:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border: 5px solid #FFF;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }

        .base_sent {
            justify-content: flex-end;
            align-items: flex-end;
        }
        .base_sent > .avatar:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
            box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
        }

        .msg_sent > time{
            float: right;
        }


        .msg_container_base::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        #btn-group.dropup{
            position:fixed;
            left:0px;
            bottom:0;
        }
        .smart-timeline-list:after {
            content: " ";
            background-color: #eee;
            position: absolute;
            display: block;
            width: 0px;
            top: 0;
            left: 95px;
            bottom: 0;
            z-index: 1;
        }

    </style>
    <!-- MAIN PANEL -->
    <div id="main" role="main">
        <div id="content">
        <div id="app" >
            <div class="container">
                <div class="row chat-window col-xs-5 col-md-3" id="chat_contactos" style="margin-left:0px;width: 350px">
                    <div class="col-xs-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading top-bar">
                                <div class="col-md-8 col-xs-8">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Contactos</h3>
                                </div>
                                <div class="col-md-4 col-xs-4" style="text-align: right;">
                                    <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                                    <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_contactos"></span></a>
                                </div>
                            </div>
                            <chat-list-contacts :contacts="contacts"></chat-list-contacts>
                            <chat-form-contacts
                                    v-on:messagesent="addMessage"
                                    :user="{{$usuario}}" :user2="{{ $friend }}"
                            ></chat-form-contacts>
                        </div>
                    </div>
                </div>
                <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-right:300px;width: 350px">
                    <div class="col-xs-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading top-bar">
                                <div class="col-md-8 col-xs-8">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat2 - {{$friend[0]->usu_usuario}}</h3>
                                </div>
                                <div class="col-md-4 col-xs-4" style="text-align: right;">
                                    <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                                    <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                                </div>
                            </div>
                            <chat-messages :messages="messages"></chat-messages>
                            <chat-form
                                    v-on:messagesent="addMessage"
                                    :user="{{$usuario}}" :user2="{{ $friend }}"
                            ></chat-form>
                        </div>
                    </div>
                </div>
<!--
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" id="new_chat" onclick="prueba();"><span class="glyphicon glyphicon-plus" ></span> Novo</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
                    </ul>
                </div>-->
            </div>

        </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->



@endsection

@section('page-js-script')

    <script language="JavaScript" type="text/javascript" src="{{ asset('js/modulos/chat.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

@endsection

