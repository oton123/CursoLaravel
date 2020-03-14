@extends('Layouts.LayoutFull')

@push('css')

@endpush
@if(Session::has('success'))
             toastr["success"]("<b>SUCESSO: </b><br>
             {{ Session::get('success') }}"); 
@endif   
@section('conteudo')

<a class='btn btn-sucess' href ="{{route('client.create')}}"> 
Adicionar
</a>

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
      
      <a href="{{ route('client.edit',[ $client->id])}}"
        class="btn btn-primary btn-sm text-white">
             <i class="fal fa-pencil"></i>
             <span class='d-none d-md-inline'> Editar</span>
          </a>

       
        <span data-url="{{ route('client.destroy',[ $client->id]) }}" data-idClient='{{ $client->id}}'
        class="btn btn-warning btn-sm text-white deleteButton">
          <i class="fal fa-trash"></i>
          <span class='d-none d-md-inline'>Deletar</span>
        </span>

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

         $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idClient = $(this).data('idClient');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idClient': idClient,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
         });

</script>

@endpush



