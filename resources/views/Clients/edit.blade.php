@extends('Layouts.LayoutFull')

@push('css')

@endpush             
@section('conteudo')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
       @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
  @endif
 <form method="POST" action="{{route('client.update',[$client->id]) }}"
                    class="form-horizontral form-validate">
                  {{csrf_field() }}
                  @method('PUT')
    <center>
    <h1> Formulário para preenchimento </h1>
    <div style='text-align:center;'>

      <div>
      <label>
       Ativo?
       </label>
       <input id='activebox' name='activebox'  type='checkbox' value='{{old("activebox")}}'>
       <br>
        Nome: 
       </label>
       <input id='name' name='name' type='text' value='{{old("name",$client->name)}}'>
       </input><p> </p> <label>
           CPF:
       </label>  <input id='cpf'  name='cpf'  type ='text' value='{{old("cpf",$client->cpf)}}'
       class='cpf-mask'> </input> <p> </p>

       <label>
           Endereço:
       </label>
       <input id='Endereco'  name='Endereco'   type='text' value='{{old("Endereco",$client->endereco)}}'          >
        <p></p>  
       <label>
       Email:
       </label>
       <input id='email'  name='email'  type='text' value='{{old("email",$client->email)}}'>
       <p> </p>

     </div>  
    
          <button type='submit' class="btn btn-success">Cadastrar</button>
     </div>         
       
     </center>
  </form>  
  @endsection
  @push('scripts')
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
         $(".cpf-mask").mask('000.000.000-00');
</script>


@endpush



