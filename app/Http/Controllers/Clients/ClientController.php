<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    
public function index(){
    $clientModel = app(Client::class);

    $clients = $clientModel->all();
    
    //$clients = $clientModel->find();
   
    //$clients = $clientModel->where('cpf',1234567811)->get();
    
    //dd($clients);

    return view('Clients/index',compact('clients'));
}


 public function create(){
     $clientmodel = app(Client::class);
     $client = $clientmodel->create([
         'name'=> 'name teste2',
         'cpf'=> 1234567811,
         'email'=>'teste2@gmail.com',
         'active_flag'=>false,
     ]);

     dd($client);
 }
}
