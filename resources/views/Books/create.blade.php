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
 <form method="POST" action="{{route('client.store') }}"
                    class="form-horizontral form-validate">
                  {{csrf_field() }}
    <center>
    <h1> Formulário para preenchimento </h1>
    <div style='text-align:center;'>

      <div>
      <label>
       
       </label>
       <input id='activebox' name='activebox'  type='checkbox' value='{{old("activebox")}}'>
       <br>
        Nome: 
       </label>
       <input id='name' name='name' type='text' value='{{old("name")}}'>
       </input><p> </p> <label>
         Writer:
       </label>  <input id='writer'  name='writer'  type ='text' value='{{old("writer")}}'
       > </input> <p> </p>

       <label>
           Page Number:
       </label>
       <input id='page number'  name='page number'   type='integer' value='{{old("page_number")}}'>            
        <p></p>  
     
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