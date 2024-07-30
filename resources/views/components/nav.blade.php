@section('navbar')
    <section id="navbar" class="container-fluid">
            <ul>
                <li>
                    <a href="/">
                        <img src="{{ Vite::asset("resources/img/boolean.ico") }}" alt="{{ 'logo' }}">
                    </a>
                </li>
                <li>
                    <a href="/Chi_siamo">chi siamo</a>
                </li>
                <li>
                    <a href="/Exercise">exercise</a>
                </li>
                <li>
                    <a href="/Blog">blog</a>
                </li>
                <li>
                    <a href="/Contatti">contatti</a>
                </li>
            </ul>
    </section>
@endsection