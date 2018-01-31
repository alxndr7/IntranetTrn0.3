<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">

						<span>
							john.doe
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>

            <li id="li_home" style="text-align: center">
                <a href="{{url('home')}}"><i class="fa fa-lg fa-fw fa-rss"></i> <span class="menu-item-parent">Radar TRN</span> </a>
            </li>
            <li id="li_boletas">
                <a href="{{url('boletas2')}}"><i class="fa fa-lg fa-fw fa-file-text"></i> <span class="menu-item-parent">Boletas</span></a>
            </li>
            <li id="li_vacaciones">
                <a href="{{url('vacaciones')}}"><i class="fa fa-lg fa-fw fa-plane"></i> <span class="menu-item-parent">Vacaciones</span></a>
            </li>
            <li>
                <a target="_blank" href="http://ias.transaltisa.com.pe:7777/portal2/reg_user.php"><i class="fa fa-lg fa-fw fa-spinner"></i> <span class="menu-item-parent">IAS</span></a>
            </li>
            <li>
                <a target="_blank" href="http://erp.transaltisa.com.pe:8080/prjPortalTransaltisa"><i class="fa fa-lg fa-fw fa-group"></i> <span class="menu-item-parent">ERP</span></a>
            </li>

            <li id="li_cumple">
                <a href="{{url('cumpleanios')}}"><i class="fa fa-lg fa-fw fa-gift"></i> <span class="menu-item-parent">Cumpleaños</span> </a>
            </li>
            <li id="li_eventos">
                <a href="{{url('calendario_eventos')}}"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendario</span> </a>
            </li>

            <li id="li_galerias">
                <a href="{{url('galerias')}}"><i class="fa fa-lg fa-fw fa-camera"></i> <span class="menu-item-parent">Galerias</span></a>
            </li>

            <li id="li_admin">
                <a href="#"><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">Administrar</span></a>
                <ul>
                    <li>
                        <a href="{{url('calendario')}}"><i class="fa fa-calendar"></i>Admin Calendario</a>
                    </li>
                    <li>
                        <a href="{{url('admin_evaluacion')}}"><i class="fa fa-edit"></i>Admin Evaluaciones</a>
                    </li>
                    <!--
                    <li>
                        <a href="blog.html"><i class="fa fa-tint"></i>Consumo de combustible</a>
                    </li>
                    <li>
                        <a href="gallery.html"><i class="fa fa-cab"></i>Distancias mínimas</a>
                    </li>-->
                </ul>
            </li>


            <!--
            <li>
                <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Eventos</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
            </li>-->

            <!--
            <li id="li_logs">
                <a href="{{url('logs')}}"><i class="fa fa-lg fa-fw fa-th-list"></i> <span class="menu-item-parent">Logs</span></a>
            </li>-->



            <li id="li_prestamos">
                <a href="{{url('prestamos')}}"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">Prestamos</span></a>
            </li>


            <!--
            <li>
                <a href="{{url('maps')}}"><i class="fa fa-lg fa-fw fa-truck"></i> <span class="menu-item-parent">Monitoreo</span></a>
            </li>-->
            <li>
                <a href="{{url('chat')}}"><i class="fa fa-lg fa-fw  fa-wechat"></i> <span class="menu-item-parent">Chat prueba</span></a>
            </li>



            <li class="chat-users top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
                <ul>
                    <li>
                        <!-- DISPLAY USERS -->
                        <div class="display-users">

                            <input class="form-control chat-user-filter" placeholder="Filter" type="text">

                            <a href="#" class="usr"
                               data-chat-id="cha1"
                               data-chat-fname="Sadi"
                               data-chat-lname="Orlaf"
                               data-chat-status="busy"
                               data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!"
                               data-chat-alertshow="true"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										">
                                <i></i>Sadi Orlaf
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha2"
                               data-chat-fname="Jessica"
                               data-chat-lname="Dolof"
                               data-chat-status="online"
                               data-chat-alertmsg=""
                               data-chat-alertshow="false"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										">
                                <i></i>Jessica Dolof
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha3"
                               data-chat-fname="Zekarburg"
                               data-chat-lname="Almandalie"
                               data-chat-status="online"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										">
                                <i></i>Zekarburg Almandalie
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha4"
                               data-chat-fname="Barley"
                               data-chat-lname="Krazurkth"
                               data-chat-status="away"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Barley Krazurkth
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha5"
                               data-chat-fname="Farhana"
                               data-chat-lname="Amrin"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										">
                                <i></i>Farhana Amrin (offline)
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha6"
                               data-chat-fname="Lezley"
                               data-chat-lname="Jacob"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Lezley Jacob (offline)
                            </a>

                            <a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

                        </div>
                        <!-- END DISPLAY USERS -->
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->