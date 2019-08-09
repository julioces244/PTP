@extends('.layouts/slidemenu')

@section('content')
<div class="container">
  <h3>Administrador</h3>

    <form class="form-group" action="/admarchive  " method="post" enctype="multipart/form-data" files=true>
      @csrf
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="filename" value="" class="form-control">

      </div>
      <div class="form-group">
        <label for="">Archivo</label>
        <input type="file" name="archive" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary" name="">Subir</button>

    </form>
</div>

    @endsection
