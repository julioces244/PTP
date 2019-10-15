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
        <a href="{{ url('logout')}}" class="btnmodules">
        <button style="width: 200px"  type="button" class="btn btn-outline-success"><img src="images/LogosPTP/Pisco_tec.png"></button></a></center>

        <h1></h1>



<div class="tabs">


        <!--start tabs-->

            <div class="downloads"><!--start downloads-->

            <a href="{{ url('imgpa_bandera')}}" class="btn2 social-btn2">Bandera del Perú</a>
            <a href="{{ url('filepd')}}" class="btn2 social-btn2">José de San Martín</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Raúl Porras Barrenechea</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Renán Elías Olivera</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Carlos Noriega Jimenez</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">José C. Mariátegui</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Independencia</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">José Quiñones</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Fé y Alegría</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Beatita de Humay</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Juan Velasco Alvarado</a>
            <a href="{{ url('filept')}}" class="btn2 download-btn2">Porsia Senisse de Arriola</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Miguel Grau Seminario</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">María Parado de Bellido</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Lazaro Orrego Morales</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Gerardo Mendoza Escate</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">Andrés Avelino Cáceres</a>
            <a href="{{ url('filept')}}" class="btn2 social-btn2">22489 Paracas</a>


            </div><!--end downloads-->


            <nav class="tabs-nav">

                <ul>

                    <li data-tab="1"><img src="{{asset('images/icons/ic_photo.png')}}"></img><span>Prueba de Validación </span></li>
                    <li data-tab="2"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Prueba de Entrada</span></li>
                    <li data-tab="3"><img src="{{asset('images/icons/ic_photo.png')}}"><span>Talleres de padres</span></li>
                </ul>

            </nav>






            <div class="tab-container"><!--start tab container-->

                <div class="tab-content" data-tab="1"><!--start tab content-->

                  <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <!--



                      -->
                    </div>
                  </div>

                </div><!--end tab content-->

                <div class="tab-content" data-tab="2"><!--start tab content-->



                </div><!--end tab content-->


                <div class="tab-content" data-tab="3"><!--start tab content-->




            </div><!--end tab container-->

        </div><!--end tabs-->


          <br>


  </div>




@endsection
