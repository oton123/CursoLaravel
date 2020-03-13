<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\http\Requests\ClientstoreRequest;
use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    
public function index()
{
    $clientModel = app(Client::class);

    $clients = $clientModel->all();
    
    //$clients = $clientModel->find();
   
    //$clients = $clientModel->where('cpf',1234567811)->get();
    
    //dd($clients);

    return view('Clients/index',compact('clients'));
}


 public function store(ClientStoRequest $request){
     $data = $request->all()
     $clientModel = app(Client::class);
     $client = $clientmodel->create([
        'name'=> 'name teste2',
        'cpf'=>preg_replace("/[^A-Za-z0-9]/","",$data['cpf'])
        'email'=>'teste2@gmail.com',
        'endereco'=>$data['endereco'] ?? null,
        'active_flag'=> isset($date['activebox']) ? true : false,
     ]);

    return redirect()->route('clients.index')
 }

  public function store(ClientstoreRequest $request){
       $data = $request->all();
       dd($data['cpf']);
  }
}
