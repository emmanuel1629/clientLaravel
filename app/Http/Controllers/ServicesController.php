<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicesController extends Controller
{
    public function index()
    {
     
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::get($url.'/services');
        $data = $response->json();

        return view('Servicios.listaServicios',compact('data'));
    }


    public function create()
    {
        return view('Servicios.crearServicio');
    }



    public function store(Request $request)
    {
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::post($url.'/services',
        [
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description
        ]);
        return redirect()->route('services.index');
    }



    public function delete($idServicio)
    {
       
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::delete($url.'/services/'.$idServicio);
        return redirect()->route('services.index');
    }
    
    public function view($idServicio)
    {
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::get($url.'/services/'.$idServicio);
        $servicio= $response->json();
        return view('Servicios.verServicio',compact('servicio'));
    }

    public function update(Request $request)
    {
        $idServicio=$request->service_id;
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::put($url.'/services/'.$idServicio,
        [
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description
        ]
        );
        $cliente= $response->json();
        return redirect()->route('services.index');
    }

}
