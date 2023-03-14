<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    public function index()
    {
     
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $data = $response->json();

        return view('Clientes.clientes',compact('data'));
    }


    public function create()
    {
        return view('Clientes.cliente');
    }



    public function store(Request $request)
    {
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::post($url.'/clients',
        [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'addres'=>$request->addres,
            'email'=>$request->email
        ]);
        return redirect()->route('clientes.index');
    }



    public function delete($idCliente)
    {
       
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::delete($url.'/clients/'.$idCliente);
        return redirect()->route('clientes.index');
    }
    


    public function view($idCliente)
    {
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::get($url.'/clients/'.$idCliente);
        $cliente= $response->json();
        return view('Clientes.vistaCliente',compact('cliente'));
    }

    public function update(Request $request)
    {
        $idCliente=$request->cliente_id;
        $url = env('URL_API','http://127.0.0.1');
        $response = Http::put($url.'/clients/'.$idCliente,
        [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'addres'=>$request->addres,
            'email'=>$request->email
        ]
        );
        $cliente= $response->json();
        return redirect()->route('clientes.index');
    }
    
    
}
