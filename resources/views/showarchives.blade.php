@extends('.layouts/slidemenu')
@section('content')



<div class="container">
  @if(session()->has('msj'))
  <div class="alert alert-success" role="alert">{{session('msj')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif


  </br>
  <table id="myTable" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
      <th scope="col">Documento</th>
      <th scope="col">Categoria</th>
      <th scope="col">Tipo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Descargar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($archives as $archive)
    <tr>
      <th scope="row">{{$archive->idArchive}}</th>
      <td>{{$archive->filename}}</td>
      <td>{{$archive->archive}}</td>
      <td>{{$archive->category->nombre}}</td>
      <td>{{$archive->type_archives->nombre}}</td>
      <td>{{$archive->created_at}}</td>
      <td>
        <center>
        <a href="documents/{{$archive->archive}}" download>
          <button class="btn button1"><img src="images/icons/ic_download.png" alt=""></button></center>
        </a>


      </td>
      <td>
          <form action="{{ route('eliminar',$archive->idArchive) }}" method="POST">
            <center>
              @csrf
                       @method('DELETE')
              <a >
                <button class="btn button1"><img src="images/icons/ic_delete.png" alt=""></button></center>
              </a>
          </center>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>

  </table>
  <a href="{{ url('admarchive/create')}}"><button class="btn button1" type="button" name="button">Agregar Archivo</button></a>
  <a href="{{ url('admimage/upload')}}"><button class="btn button1" type="button" name="button">Agregar Imagen</button></a>

</div>



    @endsection
