@extends('layouts.master')

@section('content')

    <div id="main" role="main">


    <!-- MAIN CONTENT -->
    <div id="content">
        <h1 style="text-align: center"><a href="javascript:void(0);">Transaltisa Informado</a></h1>

        <div class="row">

            <div class="col-sm-9">

                <div class="well padding-10">
                    @foreach ($items as $item)
                    <div class="row">
                        <div class="col-md-4">
                            @if ($enclosure = $item->get_enclosure())
                                <img src="{{$enclosure->get_link()}}" class="img-responsive" alt="img">
                            @endif

                            <ul class="list-inline padding-10">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <a href="javascript:void(0);"> {{$item->get_date('j F Y | g:i a')}}</a>
                                </li>
                                <!--
                                <li>
                                    <i class="fa fa-comments"></i>
                                    <a href="javascript:void(0);"> 38 Comments </a>
                                </li>-->
                            </ul>
                        </div>
                        <div class="col-md-8 padding-left-0">
                            <h3 class="margin-top-0"><a target="_blank" href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a><br><small class="font-xs"><i>Noticia de <a href="{{ $permalink }}">{{ $title }}</a></i></small></h3>
                            <p>
                                {{ $item->get_description() }}
                            </p>
                            <a class="btn btn-primary" target="_blank" href="{{ $item->get_permalink() }}"> Leer Más </a>
                           <!-- <a class="btn btn-warning" href="javascript:void(0);"> Edit </a>
                            <a class="btn btn-success" href="javascript:void(0);"> Publish </a>-->
                        </div>
                    </div>
                    <hr>
                    @endforeach

                </div>

            </div>

            <div class="col-sm-3">
                <div class="well padding-10">
                    <h5 class="margin-top-0"><i class="fa fa-search"></i> Buscar</h5>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button> </span>
                    </div>
                    <!-- /input-group -->
                </div>


                <!-- /well -->
                <div class="well padding-10">
                    <h5 class="margin-top-0"><i class="fa fa-thumbs-o-up"></i> Siguenos en!</h5>
                    <ul class="no-padding no-margin">
                        <p class="no-margin">
                            <a title="Facebook" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a>
                            <a title="Twitter" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a>
                            <a title="Google+" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a>

                        </p>
                    </ul>
                </div>
                <!-- /well -->
                <!-- /well -->
                <div class="well padding-10">
                    <h5 class="margin-top-0"><i class="fa fa-fire"></i> Ultimos eventos:</h5>
                    <ul class="no-padding list-unstyled">
                        <li>
                            <a href="javascript:void(0);" class="margin-top-0">Capacitación Seguridad</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="padding-top-5 display-block">Cumpleaños Enero</a>
                        </li>
                    </ul>
                </div>
                <!-- /well -->

                <!-- /well -->
                <div class="well padding-10">
                    <h5 class="margin-top-0"><i class="fa fa-video-camera"></i> Ultimos videos:</h5>
                    <div class="row">

                        <div class="col-lg-12">

                            <ul class="list-group no-margin">
                                <li class="list-group-item">
                                    <a href=""> <span class="badge pull-right">4</span> Cumpleaños enero </a>
                                </li>
                            </ul>

                        </div>

                        <div class="col-lg-12">
                            <div class="margin-top-10">
                                <iframe allowfullscreen="" frameborder="0" height="210" mozallowfullscreen="" src="http://player.vimeo.com/video/87025094" webkitallowfullscreen="" width="100%"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /well -->

            </div>

        </div>

    </div>
    <!-- END MAIN CONTENT -->

    </div>
@endsection

@section('page-js-script')



@endsection