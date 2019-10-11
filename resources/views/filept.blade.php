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

                </li>

                <li>
                    <a href="/imagepa">
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

            <div class="page-border"></div>

		<div class="tabs"><!--start tabs-->

			<div class="downloads"><!--start downloads-->

			<a href="{{ url('test')}}" class="btn2 social-btn2">Pisco Aprendizaje</a>
			<a href="{{ url('filepd')}}" class="btn2 social-btn2">Pisco Digital</a>
      <a href="{{ url('filept')}}" class="btn2 download-btn2">Pisco Tecnología</a>

			</div><!--end downloads-->

			<nav class="tabs-nav">

				<ul>

					<li data-tab="1"><img src="{{asset('images/icons/ic_is.png')}}"></img><span>Informe Semanal </span></li>
					<li data-tab="2"><img src="{{asset('images/icons/ic_is.png')}}"><span>Informe Bimensual</span></li>
					<li data-tab="3"><img src="{{asset('images/icons/ic_is.png')}}"><span>Otros Documentos</span></li>
				</ul>

			</nav>






			<div class="tab-container"><!--start tab container-->

				<div class="tab-content" data-tab="1"><!--start tab content-->

            <div class="container">


              <table id="myTable" class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Descargar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tec_sems as $tec_sem)

                <tr>
                  <th scope="row">{{$tec_sem->idArchive}}</th>
                  <td>{{$tec_sem->filename}}</td>
                  <td>{{$tec_sem->category->abreviatura}}</td>
                  <td>{{$tec_sem->type_archives->nombre}}</td>
                  <td>{{$tec_sem->archive}}</td>
                  <td>{{$tec_sem->created_at}}</td>
                  <td>
                    <a href="documents/{{$tec_sem->archive}}" download>
                      <button class="btn button1"><img src="images/icons/ic_download.png" alt=""></button>

                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>

              </table>
            </div>

				</div><!--end tab content-->

				<div class="tab-content" data-tab="2"><!--start tab content-->

          <div class="container">


            <table id="myTable2"  class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Documento</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descargar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tec_bis as $tec_bi)

              <tr>
                <th scope="row">{{$tec_bi->idArchive}}</th>
                <td>{{$tec_bi->filename}}</td>
                <td>{{$tec_bi->category->abreviatura}}</td>
                <td>{{$tec_bi->type_archives->nombre}}</td>
                <td>{{$tec_bi->archive}}</td>
                <td>{{$tec_bi->created_at}}</td>
                <td>
                  <a href="documents/{{$tec_bi->archive}}" download>
                    <button class="btn button1"><img src="images/icons/ic_download.png" alt=""></button>

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>


				</div><!--end tab content-->


				<div class="tab-content" data-tab="3"><!--start tab content-->

					<p>Vista para los docuemntos que no son informes semanales o bimensuales</p>

          <div class="container">


            <table id="myTable3"  class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tipo</th>
                <th scope="col">Documento</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descargar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tec_ods as $tec_od)

              <tr>
                <th scope="row">{{$tec_od->idArchive}}</th>
                <td>{{$tec_od->filename}}</td>
                <td>{{$tec_od->category->abreviatura}}</td>
                <td>{{$tec_od->type_archives->nombre}}</td>
                <td>{{$tec_od->archive}}</td>
                <td>{{$tec_od->created_at}}</td>
                <td>
                  <a href="documents/{{$tec_od->archive}}" download>
                    <button class="btn button1"><img src="images/icons/ic_download.png" alt=""></button>

                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>

			</div><!--end tab container-->

		</div><!--end tabs-->

          <br>
  </div>




@endsection
