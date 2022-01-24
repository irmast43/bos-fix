<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ url('assets/auth/css/style.css') }}" />
    </head>
    <body style="background-color: #ffff;">
        <nav class="navbar navbar-expand-md mb-4" style="background-color: #ffff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color: #ffff;">
                <ul class="navbar-nav ml-auto">
                    @if (\Request::is('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    {{-- @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li> --}}
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br />
        <br />
        <br />

        <main class="main" style="background-color: rgb(255, 255, 255);">
            <div class="container">
                <div class="col-md-15">
                    <div class="row">
                        <div class="col-md-3 col-xs-3 text-center" style="background-color: rgb(255, 255, 255);">
                            <br />
                            <img style="height: 175px;" src="assets/img/bos.png" />
                        </div>
                        <div class="col-md-3 col-xs-3" style="background-color: #ffff;">
                            <br />
                            <br />
                            <br />
                            <h3>BOS <span>EVENT</span></h3>
                            <br />
                            <br />
                            <p>Battle Of Squad (BOS) adalah Event Organizer penyedia layanan dan jasa dibidang olahraga elektronik (E-Sport).</p>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4 float-right">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
