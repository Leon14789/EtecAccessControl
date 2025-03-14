@php
    use Illuminate\Support\Facades\Auth;
    $user = Auth::user();
@endphp

<section id="sidebar">
    <div class="inner">
        <img src="/assets/images/Cabecalho.png" alt="" srcset="">
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Início</a></li>

                @if($user && $user->is_admin) 
                    <li><a href="{{ route('allUser') }}">Funcionário</a></li>
                @endif

                <li><a href="{{ route('register.teacher') }}">Cadastrar Professor</a></li>
                <li><a href="{{ route('indexTeachers') }}">Listar Professores</a></li>
                <li><a href="{{ route('showTeachers') }}">Relatórios</a></li>
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
