@extends('layouts.app')

@section('title', 'Minha Camisa')

@section('css')

    <link href="{{ asset('css/index_styles.css') }}" rel="stylesheet">
@endsection

@section('content')
   <div class="container">
{{-- portada --}}
    <div class="container mt-3 mb-3">
           <img class="img-fluid" src="{{ asset('storage/portada.png') }}" alt="">
   </div>
       



        {{-- leyenda sorteos proximos --}}
        <div class="container text-center bg-success  p-3 fs-4"style="width:99%" >
          <h1 class=text-warning>Próximo Sorteio: 30/5</h1>
      </div>



            {{-- leyenda votar ahora --}}
            <div class="container text-center bg-warning fs-4  p-1 mt-3 mb-3"style="width:99%" >
              <h2 class=text-success>Vote Agora!</h2>
          </div>
    
  
        {{-- botones --}}
        <div class="container text-center mt-0">
            <button type="button" class="btn btn-primary fs-4" style="width:49.3%; height:80px">Gremio</button>
            <button type="button" class="btn btn-danger fs-4" style="width:49.3%; height:80px">Internacional</button>
        </div>

      </div>

    
        <div class="banner">
            <h1>🚀Alcance mais clientes conosco! 📢</h1>
            <p>Sua marca merece ser vista. Anuncie em nosso site e alcance milhares de pessoas todos os dias.</p>
            <a href="contacto.html" class="btn btn-ad">¡Anúncíe Agora!</a>
        </div>
      

        {{-- ganhadores --}}
        <div class="container text-center mt-0">
          <button type="button" class="btn btn-primary fs-4 mt-3 mb-3" style="width:99%; height:50px">Ganhadores Anteriores</button>
       </div>


      </div>
@endsection
