<link rel="stylesheet" href="assets/css/menu.css">
<section id="sidebar">
    <div class="inner">
        <img src="/assets/images/Cabecalho.png" alt="" srcset="">
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                <!-- <li><a href="{{ route('register') }}">Cadastrar Vigilante</a></li> -->
                <li><a href="{{ route('registerTeacher') }}">Cadastrar Professor</a></li>
                <li><a href="#one">Listar Professores</a></li>
                <li><a href="#one">Relatorios</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit">
                            Sair
                        </button>
                    </form>
                </li>

            </ul>
        </nav>
    </div>
</section>