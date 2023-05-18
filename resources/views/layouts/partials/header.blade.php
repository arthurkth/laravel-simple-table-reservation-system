<body>
    <header class="shadow fixed-top ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container p-md-0">
                <a class="navbar-brand" href="#"><span><i class="fa-solid fa-utensils"></i> Bistro 21</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('auth.index')}}" class="nav-link active">Início</a></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.myreservations')}}" class="nav-link">Minhas Reservas</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <a href="{{ route('auth.logout')}}" class="nav-link text-danger">Sair</a>
                    </span>
                </div>
            </div>
        </nav>
    </header>