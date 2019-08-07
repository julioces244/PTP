
@extends('.layouts/layout')

@section('content')

<div class="container">



<table class="table border">
<thead class="thead-dark">
  <tr>
    <th scope="col">Número</th>
    <th scope="col">Nombre del archivo</th>
    <th scope="col">Documento</th>
    <th scope="col">Fecha</th>
    <th scope="col">Opción</th>
  </tr>
</thead>
<tbody>
  @foreach($archives as $archive)
  <tr>
    <th scope="row">1</th>
    <td>{{$archive->filename}}</td>
    <td>{{$archive->archive}}</td>
    <td>{{$archive->created_at}}</td>
    <td>
      <a href="documents/{{$archive->archive}}" download>
        <button type="button" class="btn btn-primary">Descargar</button>
      </a>
    </td>
  </tr>
  @endforeach

  <button href="{{ ('login') }}" type="button" class="btn btn-danger">Salir</button>


</div>





@endsection
