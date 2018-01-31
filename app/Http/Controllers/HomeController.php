<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Feeds;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        date_default_timezone_set('America/Lima');
        $feed = Feeds::make('http://rpp.pe/feed/peru/arequipa');

        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        //dd($feed);

        //return View::make('feed', $data);
        return \View::make('home', $data);*/
        //dd(Auth::user());
        return view('home');
    }

    public function get_cumples_hoy(){

        $cumpleHoy = DB::select("select per.PERS_ID,per.NOMBRE1, trunc(months_between(sysdate,per.NAC_FECHA)/12) edad, tipo.TIPO_NOMBRE sexo from trn_rrhh.t_personal per
                      join trn_general.m_tipo tipo
                      on tipo.TIPO_ID = per.sexo_id
                      where EXTRACT(month from NAC_FECHA) = EXTRACT(month from sysdate) and EXTRACT(day from NAC_FECHA) = EXTRACT(day from sysdate) AND estado_trabajador_id = '200001'");

        return  response()->json($cumpleHoy);
    }

    public function noticias()
    {/*
        $feed = Feeds::make([
            'http://blog.case.edu/news/feed.atom',
            'http://tutorialslodge.com/feed'
        ], 5);*/
        date_default_timezone_set('America/Lima');
        $feed = Feeds::make(['http://rpp.pe/feed/peru/arequipa'],10,true);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        //dd($feed);

        //return View::make('feed', $data);
        return \View::make('radar.noticias', $data);
        //return view('home');
    }
}
