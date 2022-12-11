<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container bg-light px-0">  	

        <nav class="navbar navbar-expand-lg" style='background-color: #e3f2fd;'>
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><strong>Home</strong></a>              
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class = "btn btn-dark" type='submit'>Sair</button>
        </form>
              </div>

          </nav>






        
          {{--}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('items.index') }}">Home</a>
            </div>
        
        
        </nav> --}}
                
                {{--
                @auth
                <a href="{{ route('logout') }}">Sair</a>
                @endauth

                @guest
                <a href="{{ route('login') }}">Entrar</a>
                @endguest
            </div>
        </nav>
                --}}

            <h1 class= 'text-center'>{{ $title }}</h1>

                {{--
             @isset($mensagemSucesso)
                <div class="alert alert-success">
                    {{ $mensagemSucesso }}
                </div>
            @endisset
            --}}
            

            <!-- validando mostrando as validaçoes  -->
            @if ($errors->any())
                   <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {{ $slot }}
            <br>
    </div>
</body>

</body>
</html>