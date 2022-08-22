@extends("layouts.index")

@section("title","palavra_do_fundador")

@section('content')
@include("layouts.header")
<div class="banner bg-black">
  <h1 class="font-bold text-white text-5xl ml-20">Quem Somos</h1>

</div>
<div class="  w-11/12 fundador_layout pt-16 md:flex-row flex-col sm:flex-col md:w-screan md:p-0 ">

  
    <div class="left w-full md:w-8/12 text-justify">
     
        <p class="">ESCOLA EVANJÁFRICA é Departamento de Educação e Formação do EVANJÁFRICA Organização de carácter social de índole Cristã, sem fins lucrativos, traduzidos numa instituição de ensino formal para promover uma educação e formação de excelência com valores.</p>
        <p>A ESCOLA  EVANJÁFRICA é devidamente  licenciada sob nº. 33 pelo despacho do dia 16 de Junho de 2017, por sua Excelência Governador da Província de Nampula, mediante o parecer da Direcção Provincial de Educação e Desenvolvimento Humano, para realizar actividade da educação do ensino primário completo e Secundário (1ª – 12ª classe), A Escola promove um ensino holístico baseado em valores e segue o curriculo Nacional de Educação. Na sua acção a escola disponibiliza serviços para todas crianças a partir de 6 anos de idade.</p>
        <p>Na sua acção a escola disponibiliza serviços para todas crianças a partir de 6 anos de idade e nas suas intervenções educativas busca impactar a comunidade no geral.</p> 
        
        <div>
            <p>Capelania</p>
            <p>A Escola Evanjáfrica se guia numa metodologia de educação que não dá importância no desenvolvimento intelectual, mas também no ser Humano como um todo. Este reconhecimento guia a Escola a dedicar-se na preparação espiritual, emocional e física dos seus alunos para enfrentar em todos os desafios da carreira académica, da vida social e no geral.</p>
        </div>

    </div>
    <div class="perfil pt-10 md:w-4/12 w-full m-10 rounded-md flex  text-white p-10 bg-browLite mr-0">
      <div class="pb-5">
        <h1 class="text-center text-3xl mb-5">Visao</h1>
        <span class=" border-t-orange border-t-2 w-full flex pb-10">
          <p>Oferecer educação de excelência, contribuindo,
             na formação integral do aluno, para actuar como agente transformador da sociedade.</p>   
        </span>
    </div>
        <div>
            <h1 class="text-center text-3xl mb-5">Visao</h1>
            <span class="border-t-orange border-t-2 w-full flex pb-10">
              <p>Tornar-se uma Instituição de referencia, inovadora 
                nas suas práticas pedagógicas, e na formação de 
                cidadãos dotados de capacidades</p>
               conscientes de crítica e empreendedores</p>   
            </span>
        </div>
        <div class="w-full">
            <h1 class="text-center text-3xl mb-5">Valores</h1>
            <span class="border-t-2 border-t-orange w-full flex pb-10">
              <div class="w-full flex flex-col">
            
                <li>Etica</li>
                <li>Qualidade</li>
                <li>Eficiencia</li>
                <li>Responsabilidade</li>
              </div>
               
            </span>
        </div>
      </div>
     
    </div>



</div>

@endsection