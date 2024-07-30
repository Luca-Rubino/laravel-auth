@section('file-data')
    <section id="list-data" class="container-fluid">
        @foreach($datas as $data)
            <article>
                <div>
                    <h2>{{ $data['title'] }}</h2>
                </div>
                <span>
                    <pre>{{ $data['autors'] }}</pre>
                    <img src="{{ Vite::asset("$data[url]") }}" alt="logo">
                </span>
                <div>
                    <h4>{{ $data['ruole'] }}</h4>
                    <p>{{ $data['description'] }}</p>
                </div>
            </article>
        @endforeach
    </section>
@endsection