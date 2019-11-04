@extends('.layouts/slidemenu')

@section('content')



<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/talentopiscologo.png" alt="" height="100%" width="100%">

                <strong>PTP</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/test">
                        <i class="fas fa-home"></i>
                        Archivos
                    </a>

                </li>

                <li class="active">
                    <a href="">
                        <i class="fas fa-image"></i>
                        Imágenes
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas foreach"></i>
                        Ayuda
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas foreach"></i>
                        Salir
                    </a>
                </li>

            </ul>

        </nav>



        <!-- Page Content  -->
        <div id="content">



            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                              <a href="{{ url('logout')}}">
                              <button  type="button" class="btn btn-danger">Salir</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <center>
            <h2>Documentos Programa Talento Pisco</h2>
            <p>Documentación</p></center>


            <div class="line"></div>




<center><a href="{{ url('imgpa_bandera')}}" class="btnmodules">
        <button style="width: 200px"  type="button" class="active btn btn-outline-success"><img src="images/LogosPTP/Pisco_apr.png"></button></a>
        <a href="{{ url('imgpd_bandera')}}" class="btnmodules">
        <button style="width: 150px"  type="button" class="btn btn-outline-success"><img src="images/LogosPTP/Pisco_dig.png"></button></a>
        <a href="{{ url('imgpt_bandera')}}" class="btnmodules">
        <button style="width: 200px"  type="button" class="btn btn-outline-success"><img src="images/LogosPTP/Pisco_tec.png"></button></a></center>

        <h1></h1>



<div class="tabs">


        <!--start tabs-->

            <div class="downloads"><!--start downloads-->

              <a href="{{ url('imgpa_bandera')}}" class="btn2 download-btn2">Bandera del Perú</a>

            </div><!--end downloads-->

            <nav class="tabs-nav">

                <ul>

                    <li data-tab="1"><img src="{{asset('images/icons/ic_photo.png')}}"></img><span>Capacitación docentes </span></li>
                    <li data-tab="2"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Microtaller reforzamiento docentes</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Capacitación a directores</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Acompañamiento directivo</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Visita a directores</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Validación prueba de entrada</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Fichas Marzo Comunicación/Matemática</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Entrega de resultados socialización(Prueba de entrada)</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Clase modelo</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Visita diagnóstica y retroalimentacion</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Capacitación para acompañantes y especialistas</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Diseño y validación con UGEL y producción material impreso</span></li>

                </ul>

            </nav>


            <div class="tab-container"><!--start tab container-->

                <div class="tab-content" data-tab="1"><!--start tab content-->

      <div class="container">
        <div class="row justify-content-center justify-content-md-start">

          <h1>Capacitacion a docentes</h1>
          @foreach($apr_pvs as $apr_pv)



            <div class="card" style="width: 15rem; margin: relative 0 0 auto;">
                <img src="documents/{{$apr_pv->archive}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$apr_pv->archive}}</h5>
                  <p class="card-text">{{$apr_pv->created_at}}</p>
                </div>

                <div class="card-body">
                  <a href="documents/{{$apr_pv->archive}}" class="card-link" download>Descargar</a>
                </div>
            </div>



          @endforeach
        </div>
      </div>

                </div><!--end tab content-->

                <div class="tab-content" data-tab="2"><!--start tab content-->

                  <h1>Microtaller </h1>

                </div><!--end tab content-->


                <div class="tab-content" data-tab="3"><!--start tab content-->




            </div><!--end tab container-->

        </div><!--end tabs-->


          <br>


  </div>




@endsection
