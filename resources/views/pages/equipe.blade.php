@extends("layouts.index")

@section('title','equipe')

@section('content')
@include('layouts.header')
<div class="pb-40"></div>
  <div class="flex flex-col w-11/12  p-7 m-auto">
    <div class=" mb-10">
        <h1 class="text-orange text-center text-3xl mt-5 mb-2"> Conheça a nossa equipe</h1>
        <p> Evanjáfrica se sente abençoada por ter uma equipe maravilhosa e dinâmica de homens e mulheres dedicados ao serviço da comunidade. A equipe de trabalho atual consubustancia no capital humano global de nossa organização, que é o principal pilar que garante a materialização de nossos objetivos.</p>
    </div>
    <div class="mt-10">
      <span class="ml-11 mr-11 pb-5">  <h1 class="text-3xl font-bold">Lideranca Executiva</h1>
           <div class="border-b-4 border-b-orange h-2 w-44 "></div>
     </span>
        <span class="flex  justify-between mt-5">
            <div class="w-72 relative ">
                <img src="/banco_de_imagens/equipe/Victor-Carlos-446x446.jpg" alt="Victor-Carlos-446x446.jpg" class="rounded-md brightness-50 hover:brightness-100">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">Pastor Victor Carlos</p>
            <p class=" text-xl text-slate-200">Fundador Visionario</p>
           </span>
            </div>
            <div class="w-72 relative ">
                <img src="/banco_de_imagens/equipe/Christina-Carlos-500x500.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">Christina-Carlos</p>
            <p class=" text-xl text-slate-200">Fundador Visionario</p>
           </span>
            </div>
            <div class="w-72 relative ">
                <img src="/banco_de_imagens/equipe/Artimisa-Mocala-500x500.jpg" alt="Artimisa-Mocala-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">Artimisa Mocala</p>
            <p class=" text-xl text-slate-200">Fundador Visionario</p>
           </span>
            </div>
            <div class="w-72 relative ">
                <img src="/banco_de_imagens/equipe/Tome-Mario-500x500.jpg" alt="Tome-Mario-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">Tome Mario</p>
            <p class=" text-xl text-slate-200">Fundador Visionario</p>
           </span>
            </div>
        </span>
          
    </div>

    <div class="mt-10">
        <span class="ml-11 mr-11 pb-5">  <h1 class="text-3xl font-bold">Lideranca da Gestao Escolar</h1>
             <div class="border-b-4 border-b-orange h-2 w-44 "></div>
      </span>
          <span class="flex  justify-between mt-5 flex-wrap flex- row gap-5">
              <div class="w-96 relative ">
                  <img src="/banco_de_imagens/equipe/Candito-Joaquim-500x500.jpg" alt="Victor-Carlos-446x446.jpg" class="w-96 rounded-md brightness-50 hover:brightness-100">
             <span class="absolute top-56 text-center  w-full">
              <p class="font-bold text-2xl text-white">Candito Joaquim</p>
              <p class=" text-xl text-slate-200">Pedagógico do Ensino Primário</p>
             </span>
              </div>
              <div class="w-96 relative ">
                  <img src="/banco_de_imagens/equipe/semImagem.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100 w-96  h-96 h-72">
             <span class="absolute top-56 text-center  w-full">
              <p class="font-bold text-2xl text-white">nome</p>
              <p class=" text-xl text-slate-200">Director da Escola </p>
             </span>
              </div>
              <div class="w-96 relative ">
                <img src="/banco_de_imagens/equipe/semImagem.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100 w-96  h-96">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">nome</p>
            <p class=" text-xl text-slate-200">Pedagógico do Ensino secundário </p>
           </span>
            </div>
            <div class="w-96 relative ">
                <img src="/banco_de_imagens/equipe/semImagem.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100 w-96  h-96">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">Ancha Arnaldo Aquiles</p>
            <p class=" text-xl text-slate-200">Relações Públicas </p>
           </span>
            </div>
            <!---------------->
            <div class="w-96 relative ">
                <img src="/banco_de_imagens/equipe/semImagem.jpg" alt="Victor-Carlos-446x446.jpg" class="w-96  h-96 rounded-md brightness-50 hover:brightness-100">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">
                Veronica Domingos
                </p>
            <p class=" text-xl text-slate-200">Assitente Financeira</p>
           </span>
            </div>
            <div class="w-96 relative ">
                <img src="/banco_de_imagens/equipe/EGIDE-500x500.jpg" alt="EGIDE-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100 w-96  h-96">
           <span class="absolute top-56 text-center  w-full">
            <p class="font-bold text-2xl text-white">
                Egide Manzi
               </p>
            <p class=" text-xl text-slate-200"> Diretor Administrativo</p>
           </span>
            </div>
         
          </span>
            
  
  </div>
  <div class="mt-10">
    <span class="ml-11 mr-11 pb-5">  <h1 class="text-3xl font-bold">Professores do Ensino Curricular</h1>
         <div class="border-b-4 border-b-orange h-2 w-44 "></div>
  </span>
      <span class="flex  justify-between mt-5">
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Idiamine-500x500.jpg" alt="Idiamine-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">
            Ideamine Ramos
            </p>
          <p class=" text-xl text-slate-200">Professor de 1ª – 7ª classe</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/aBILIO-500x500.jpg" alt="aBILIO-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">
            Abilio Manuel</p>
          <p class=" text-xl text-slate-200"> Professor de 1ª – 9ª classe</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/DSC_7802-800x800.jpg" alt="Artimisa-Mocala-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">
            Nunes Pissereque
          </p>
          <p class=" text-xl text-slate-200">Professor da 6ª-7ª Classe</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Fatima-500x500.jpg" alt="Tome-Mario-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Fatima  Gimo</p>
          <p class=" text-xl text-slate-200">Professora da 2ª Classe</p>
         </span>
          </div>
      </span>
        

</div>

<div class="mt-10">
    <span class="ml-11 mr-11 pb-5">  <h1 class="text-3xl font-bold">Lideranca Executiva</h1>
         <div class="border-b-4 border-b-orange h-2 w-44 "></div>
  </span>
      <span class="flex  justify-between mt-5">
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Victor-Carlos-446x446.jpg" alt="Victor-Carlos-446x446.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Pastor Victor Carlos</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Christina-Carlos-500x500.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Christina Carlos</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Artimisa-Mocala-500x500.jpg" alt="Artimisa-Mocala-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Artimisa Mocala</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Tome-Mario-500x500.jpg" alt="Tome-Mario-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Tome Mario</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
      </span>
        

</div>

<div class="mt-10">
    <span class="ml-11 mr-11 pb-5">  <h1 class="text-3xl font-bold">Lideranca Executiva</h1>
         <div class="border-b-4 border-b-orange h-2 w-44 "></div>
  </span>
      <span class="flex  justify-between mt-5">
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Victor-Carlos-446x446.jpg" alt="Victor-Carlos-446x446.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Pastor Victor Carlos</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Christina-Carlos-500x500.jpg" alt="Christina-Carlos-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Christina-Carlos</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Artimisa-Mocala-500x500.jpg" alt="Artimisa-Mocala-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Artimisa Mocala</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
          <div class="w-72 relative ">
              <img src="/banco_de_imagens/equipe/Tome-Mario-500x500.jpg" alt="Tome-Mario-500x500.jpg" class="rounded-md brightness-50 hover:brightness-100">
         <span class="absolute top-56 text-center  w-full">
          <p class="font-bold text-2xl text-white">Tome Mario</p>
          <p class=" text-xl text-slate-200">Fundador Visionario</p>
         </span>
          </div>
      </span>
        

</div>

 </div> 
</div>




@endsection