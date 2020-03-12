@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')

<a class='btn btn-sucess'> Enviar </a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cpf</th>
      <th scope="col">Email</th>
      <th scope='col'>acoes</th>
    </tr>
  </thead>
  <tbody>
       @foreach($clients as $client)
    <tr>
      <th scope="row">1</th>
      <td>{{$client->name}}</td>
      <td>{{$client->cpf}}</td>
      <td>{{$client->email}}</td>
      <td>{{$client->acoes}}</td>
      <td>
        <a class='btn btn-primary'> Editar </a>
        <a class='btn btn-danger'> Excluir </a>
      </td>
    </tr>
      @endforeach
    
  </tbody>
</table>

  @endsection
  @push('scripts')
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
         $(".cpf-mask").mask('000.000.000-00');
</script>


@endpush



