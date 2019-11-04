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
                    <a href="/filepa">
                        <i class="fas fa-home"></i>
                        Archivos
                    </a>

                </li>

                <li class="active">
                    <a href="/img_categories">
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




        <center>
          <h3 style="color:green;">Procesos</h3>
          <div class="container">
            <div class="row justify-content-center justify-content-md-center">
          @foreach($typeimages as $typeimage)

          <div class="card bg-light mb-3" style="width: 20rem; margin: 10px;">
            <div class="card-header">{{$typeimage->category->nombre}}</div>
            <div class="card-body">
              <p class="card-text">{{$typeimage->nombre}}</p>
              <p class="card-text">{{$typeimage->idTypeimage}}</p>

               <a href="/img_categories/{{$categories}}/{{$schools}}/{{$typeimage->nombre}}" class="btn btn-outline-dark">Entrar</a>

            </div>
          </div>
          @endforeach
        </div>
      </div>
        </center>



@endsection
