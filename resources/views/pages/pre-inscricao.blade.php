@extends('layouts.index')
@section('title','Pre incricao')
@section('content')
@include("layouts.header")
<div class="main mainPre">
<div></div>

<div class="flex flex-col  form1 m-10">
    <div class=" bg-orange color-white p-5 rounded-md mt-5 mb-5"><p class="text-white text-lg ">faca a sua pre inscricao</p></div>

    <form action="" method="post">
      @method('PUT') 
{{ method_field('PUT') }} 

      <div class="formItem flex-col" id="form1">
      <div class="input">
        <p>nome</p>
        <input type="text" placeholder="nome">
      </div>
      <div class="input">
        <p>apelido</p>
      
        <input type="text" placeholder="apelido">
      </div>
      <div class="input">
        <p>data de nascimento</p>
        <input type="date" placeholder="data de nacimento">
      </div>
      <div class="input">
       
        <label for="sexo">sexo:</label>
        <select name="sexo" id="sexo">
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
         
        </select>
      </div>
      <div class="input">
        <p>provincia</p>
        <input type="text" placeholder="provincia">
      </div>
      <div class="input"></div>
       
        
        
      
      
      </div>
      <div class="formItem hidden flex-col gap-5" id="form2">
        <div class="input"> <input type="text" placeholder="distrito"></div>
        <div class="input">  <input type="text" placeholder="estado Civil"></div>
        <div class="input"> <input type="text" placeholder="pais"></div>
        <div class="input">   <input type="text" placeholder="nome da mae"></div>
        <div class="input"> <input type="text" placeholder="nome do pai"></div>
        <div class="input"><label for="documento">tipo de Documento:</label>
            <select name="documento" id="sexo">
              <option value="Bi">Bilhete de Identidade</option>
              <option value="TBI">Talao de Bi</option>
              <option value="CP">Cedula Pessoal</option>
             
            </select></div>   
      </div>

      <div class="formItem hidden flex-col gap-5" id="form3">
        <div class="input"><input type="text" placeholder="Numero do documento"></div>
        <div class="input"><input type="date" placeholder="data de emissao"></div>
        <div class="input"> <input type="date" placeholder="validade"></div>
        <div class="input"><input type="number" placeholder="celular"></div>
        <div class="input"><input type="email" placeholder="endereco Eletronico"></div>
        <div class="input"><input type="text" placeholder="endereco"></div>
        
        
       
        
        
        
      </div>
        
        
       
      <div class="btnArea mt-5" >
        <button class="btnAvancar hidden" id="prevBtn">Voltar</button>
   
        <button class="btnAvancar" id="nextBtn">avancar</button>
        
       </div>
     </form>

</div>
</div>

@endsection