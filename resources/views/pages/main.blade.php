@extends("layouts.index")
@section('title','home')

@section('content')
@include("layouts.header")
 <section class="wf  banner  md:h-1/3">
  <img src="/files/image/banner/imagem1.jpg" class="slides" alt="" srcset="" class="w-96 md:h-1/3">
  <img src="/files/image/banner/image2.jpg" class="slides" alt="" srcset="" class="w-96 md:h-1/3">
  <img src="/files/image/banner/imagem1.jpg" class="slides" alt="" srcset="" class="w-96 md:h-1/3">
  <img src="/files/image/banner/image2.jpg" class="slides" alt="" srcset="" class="w-96 md:h-1/3">



 </section>
 <div class=" content  inf  md:h-96 content-center pt-12 ">
  <h1 class="text-orange titulo text-3xl text-center md:text-4xl">INSCREVA-SE JÁ PARA O ANO LETIVO 2023</h1>
  <ul>
    <li><p>Para alunos internos de 1 de Outubro a 24 de Outubro </p></li>
    <li><p>Alunos externos de 2 de Novembro a 30 de Novembro</p></li>
    <li><p>Para mais informações clique <a href="/pre-inscricao" class="text-orange link">aqui</a></p></li>
  </ul>

  




 
 
  </div>

 <div class=" bg-orange content pt-12 pb-12">
 <div class="flex justify-center flex-col items-center text-white text-md bord  right-1 text-center">
  <h1 class="subTitle"> Missão</h1>
  <p class="inf text-white">Ser uma Instituição de referência, inovadora nas suas práticas académicas, e na formação de </p>
  <p class="inf text-white">ãos dotados de capacidades conscientes de crítica e empreendedores.</p>
 </div>
 <a class="mt-5 border-white text-white font-md btn transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">saiba mais sobre nos</a>

 </div>

<section class="content h-80">
  <div class="bord  justify-center  flex">
    <h1 class="font-orange mb-5 subTitle text-orange">Nossos Parceiros</h1>
  </div>
  <button class="btn NborderBtn  bg-orange mt-5 w-11/12 md:w-96 text-center 
  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
    FREESTUDIOS ESCOLA DE MUSICA - BRASIL
  </button>
</section>
<section class="content-row h-1/2 flex md:flex-row m-auto flex-col p-2 pb-11 md:h-72 md:h-92">
  <div class="item  h-32 md:w-5/12 w-full">
    <div class="border-b pb-2 border-orange w-4/6 ">
      <a href="/news" class="pointer btn md:w-56 NborderBtn w-auto bg-orange transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Portal De Noticias  <span class="material-symbols-outlined">
        dns
        </span></a>
      
    </div>
  </div>

  <div class="item bg-white/50 rounded-xl h-32 md:w-5/12 w-11/12 md:p-10 md:w-92 ">
    <div class="border-b pb-2 border-orange w-4/6">
      <a class="bg-orange md:w-56 btn NborderBtn opacity-100 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Eventos/Agenda 
        <span class="material-symbols-outlined">
          dns
          </span>
      </a>
    </div>
  </div>
</section>

@endsection