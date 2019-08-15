
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
                <li class="active">
                    <a href="">
                        <i class="fas fa-home"></i>
                        Archivos
                    </a>
                    <!--
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>-->
                </li>
                <!--
                <li>
                    <a href="#">
                        <i class="fas fa-breakfast"></i>
                        Índices
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas foreach"></i>
                        Configuración
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>-->
                <li>
                    <a href="#">
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

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
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
                          <!--
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>-->

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

            <div class="container">
              <table id="myTable" class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Número</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Opción</th>
                </tr>
              </thead>
              <tbody>
                @foreach($archives as $archive)
                <tr>
                  <th scope="row">{{$archive->idArchive}}</th>
                  <td>{{$archive->filename}}</td>
                  <td>{{$archive->archive}}</td>
                  <td>{{$archive->created_at}}</td>
                  <td>
                    <a href="documents/{{$archive->archive}}" download>
                      <button class="btn button1"><img src="images/icons/ic_download.png" alt="">Descargar</button>

                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>

              </table>
            </div>

  </div>





@endsection
