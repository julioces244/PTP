<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Angled Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/reset.min.css">
  <link rel="stylesheet" href="../css/admmenu.css">

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    </style>



</head>

<body>

  <nav class="navigation-menu js-nav-menu">
  <div class="navigation-menu__toggle js-nav-menu-toggle">
    <span class="navigation-menu__bars"></span>
  </div>
  <ul class="menu-list">
    <li class="menu-list__item"><a class="active" href=""><img src="../images/icons/ic_papper.png">Subir archivos</a></li>
    <li class="menu-list__item">Opción2...</li>
    <li class="menu-list__item">Opción3...</li>
  </ul>
  </nav>

  @yield('content')

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="../js/vue.js"></script>
    <script src="../js/vue_getuser.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="../js/prefixfree.min.js"></script>
    <script src="../js/toggle.js"></script>

</body>
</html>
