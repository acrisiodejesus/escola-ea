<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://use.fontawesome.com/16faa10af9.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite('resources/js/form.js')
  @vite('resources/css/app.css') 
  @vite('resources/js/app.js')
  @vite('resource/js/ajax.js')

</head>
<body class="h-screan">

    @yield('content')
    <span id="btnShow" class="material-symbols-outlined bg-white p-3 md:hidden rounded-md fixed z-50 right-1 bottom-1 ">
      menu
      </span>

      <span id="btnHidden"  class="material-symbols-outlined md:hidden  bg-white p-3 rounded-md fixed z-50 right-1 bottom-1">
        close
        </span>
    <section class="footer w-full flex gap-10 flex-col text-center text-x2 absolute bottom-0">
        <div class="">
           <p>Somos o Ministério Evanjáfrica, uma organização de carácter social, sem fins lucrativos e de índole Cristã. Convertemos o nosso</p>
        <p>Departamento de Educação e Formação em uma Instituição de Ensino Formal denominada ESCOLA EVANJÁFRICA.</p>
          </div>
        <div>
          <p>E-mail: info.escolaevanjafrica@gmail.com |  Telefone: 843324689</p>
        </div>
        <div>
          <p>
            © 2022 Escola Evanjáfrica. Todos os direitos reservados.
          </p>
        </div>
      
    
      </section>
      
    <script src="/js/events.js"></script>
</body>
</html>