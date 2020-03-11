@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')

 <form action=''>
   <div style='trext-align:center;'>
    <center>
    <h1> Formulário para preenchimento </h1>
      <label>
        Nome: 
       </label>
       <input></input><p> </p> <label>
           CPF:
       </label>  <input class='cpf-mask'> </input> <p> </p>
       <label>
           Endereço:
       </label><input></input> <p></p>  

     </div>  
    
     <div style='text-align:center;'>
          <input type='submit' class="btn btn-primary";>
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



