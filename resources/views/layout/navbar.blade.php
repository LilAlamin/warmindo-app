<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alvin Kabobs</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid mx-5">
          <a class="navbar-brand" href="#">Alvin Kebab</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Pemesanan")? 'active' :'' }}" href="/pemesanan">Pemesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title == "Logout")? 'active' :'' }}" href="/logout">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

      <div class="container mx-5 position-relative">
        @yield('container')
      </div>
      <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>