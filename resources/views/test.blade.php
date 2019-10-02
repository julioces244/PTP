
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


            <!--
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#" value="1">Pisco Aprendizaje</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" value="2">Pisco Digital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" value="3">Pisco Tecnología</a>
              </li>
            </ul>-->

            <div class="page-border"></div>

		<div class="tabs"><!--start tabs-->

			<div class="downloads"><!--start downloads-->

			<a href="/test" class="btn2 download-btn2">Pisco Aprendizaje</a>
			<a href="https://github.com/PaulCircle/simple-tabs" class="btn2 social-btn2">Pisco Digital</a>
      <a href="https://github.com/PaulCircle/simple-tabs" class="btn2 social-btn2">Pisco Tecnología</a>

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

          <!--
          <nav class="tabs-nav">

    				<ul>

    					<li data-tab="4"><span>Enero</span></li>
              <li data-tab="5"><span>Febrero</span></li>
              <li data-tab="13"><span>Marzo</span></li>

    				</ul>
            </nav>-->

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
                @foreach($archives as $archive)

                <tr>
                  <th scope="row">{{$archive->idArchive}}</th>
                  <td>{{$archive->filename}}</td>
                  <td>{{$archive->category->abreviatura}}</td>
                  <td>{{$archive->type_archives->nombre}}</td>
                  <td>{{$archive->archive}}</td>
                  <td>{{$archive->created_at}}</td>
                  <td>
                    <a href="documents/{{$archive->archive}}" download>
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
              @foreach($apr_bis as $apr_bi)

              <tr>
                <th scope="row">{{$archive->idArchive}}</th>
                <td>{{$apr_bi->filename}}</td>
                <td>{{$apr_bi->category->abreviatura}}</td>
                <td>{{$apr_bi->type_archives->nombre}}</td>
                <td>{{$apr_bi->archive}}</td>
                <td>{{$apr_bi->created_at}}</td>
                <td>
                  <a href="documents/{{$archive->archive}}" download>
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

					<h2>HTML</h2>

					<p>Simple Tabs uses data attributes as the basis for its functionality. Each tab is bound to its own content area by using an identical data attribute identifier.</p>

<!--
				<pre><code class="code">
	<span class="comment">&lt;!--List items are bound to tab content by data attribute--&gt;</span>
	<span class="tag">&lt;nav class="</span><span class="tag-punc">tabs-nav"</span><span class="tag">&gt;</span>
		<span class="tag">&lt;ul&gt;</span>
			<span class="tag">&lt;li data-tab=</span><span class="tag-punc">"1"</span><span class="tag">&gt;</span>TAB 1</span><span class="tag">&lt;/span&gt;</span><span class="tag">&lt;/li&gt;</span>
			<span class="tag">&lt;li data-tab=</span><span class="tag-punc">"2"</span><span class="tag">&gt;</span>TAB 2</span><span class="tag">&lt;/span&gt;</span><span class="tag">&lt;/li&gt;</span>
			<span class="tag">&lt;li data-tab=</span><span class="tag-punc">"3"</span><span class="tag">&gt;</span>TAB 3</span><span class="tag">&lt;/span&gt;</span><span class="tag">&lt;/li&gt;</span>
		<span class="tag">&lt;/ul &gt;</span>
	<span class="tag">&lt;/nav&gt;</span>
	<span class="comment">&lt;!--Each content section corresponds with it's matching data attribute--&gt;</span>
	<span class="tag">&lt;div class=</span><span class="tag-punc">"tab-content"</span> <span class="tag">data-tab=</span><span class="tag-punc">"1"</span><span class="tag">&gt;</span>
		<span class="tag">&lt;h2&gt;</span>TAB 1<span class="tag">&lt;/h2&gt;</span>
		<span class="tag">&lt;p&gt;</span>Content goes here.<span class="tag">&lt;/p&gt;</span>
	<span class="tag">&lt;/div&gt;</span>
	<span class="tag">&lt;div class=</span><span class="tag-punc">"tab-content"</span> <span class="tag">data-tab=</span><span class="tag-punc">"2"</span><span class="tag">&gt;</span>
		<span class="tag">&lt;h2&gt;</span>TAB 2<span class="tag">&lt;/h2&gt;</span>
		<span class="tag">&lt;p&gt;</span>Content goes here.<span class="tag">&lt;/p&gt;</span>
	<span class="tag">&lt;/div&gt;</span>
	<span class="tag">&lt;div class=</span><span class="tag-punc">"tab-content"</span> <span class="tag">data-tab=</span><span class="tag-punc">"3"</span><span class="tag">&gt;</span>
		<span class="tag">&lt;h2&gt;</span>TAB 3<span class="tag">&lt;/h2&gt;</span>
		<span class="tag">&lt;p&gt;</span>Content goes here.<span class="tag">&lt;/p&gt;</span>
	<span class="tag">&lt;/div&gt;</span>
					</code></pre>-->

			</div><!--end tab container-->




		</div><!--end tabs-->


          <br>
          <!--
          <div class="tab-container">
            <div class="tab-content" data-tab="4">

              <nav class="tabs-nav">

                <ul>

                  <li data-tab="4"><span>Enero</span></li>
                  <li data-tab="5"><span>Febrero</span></li>
                  <li data-tab="13"><span>Marzo</span></li>

                </ul>
                </nav>
            <p>Enero</p>
            </div>
          </div>

          <div class="tab-container">
            <div class="tab-content" data-tab="5">

              <nav class="tabs-nav">

                <ul>

                  <li data-tab="4"><span>Enero</span></li>
                  <li data-tab="5"><span>Febrero</span></li>
                  <li data-tab="13"><span>Marzo</span></li>

                </ul>
                </nav>
            <p>Febrero</p>
            </div>
          </div>-->

  </div>




@endsection
