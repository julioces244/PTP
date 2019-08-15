@extends('.layouts/admmenu')

@section('content')



  <div class="container" id="margen">
    <div class="blur">
      <h2>Administrador</h2>

        <form class="form-group" action="/admarchive  " method="post" enctype="multipart/form-data" files=true>
          @csrf
          <div class="form-group">
            <label for=""></label>
            <input type="text" name="filename" value="" class="form-control" placeholder="Ingrese nombre del archivo" required>

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
