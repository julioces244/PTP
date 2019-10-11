@extends('.layouts/admmenu')

@section('content')



  <div class="container" id="margen">
    <div class="blur">
      <h2>Administrador - Carga de Imágenes</h2>

        <form class="form-group" action="/admarchive  " method="post" enctype="multipart/form-data" files=true>
          @csrf
          <div class="form-group">
            <label for=""></label>
            <input type="text" name="filename" value="" class="form-control" placeholder="Ingrese nombre del archivo" required>
          </div>
          <div class="form-group">
            <select class="form-control" name="category" class="form-control" required>
              <option value="">Seleccione categoría...</option>
              @foreach($categories as $category)
              <option value="{{$category['idCategory']}}">{{$category['nombre']}}</option>
              @endforeach
            </select>
          </div>



          <div class="form-group">
            <select class="form-control" name="type" class="form-control" required>
              <option value="">Seleccione tipo...</option>
              @foreach($types as $type)
              <option value="{{$type['idType']}}">{{$type['nombre']}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for=""></label>
            <input type="file" name="archive" class="form-control" required>
          </div>
          <center><button type="submit" class="btn btn-primary" name="">Subir</button></center>
        </form>

        <center>
        <a href="{{url('/admarchive')}}"><button type="button" class="btn btn-danger" name="">Atrás</button></a></center>
    </div>

  </div>

<!--
  <div id="app">
  @{{ info }}
</div>-->

    @endsection
