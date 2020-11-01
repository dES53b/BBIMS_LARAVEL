<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="/css/style.css">
        <title>BBIMS</title>

    </head>
            <body>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <a class="navbar-brand" href="/">BBIMS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/clinic/create_donor">Register Donor</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="/clinic/update_donor">Update Donor</a>
                        </li>
                            </ul>
                     
                    </div>
                  </nav>
                  <div  style="margin-top: 15px"class='container'>
                    @yield('content')
                     </div>
            </body>
</html>
