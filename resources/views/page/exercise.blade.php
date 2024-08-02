<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    @include('components.head')
    <title>@yield('page-title')</title>
</head>
<body>
    @yield('navbar')
    <header>
        <h1>
            {{ $titlePage }}
        </h1>
    </header>
    <main>
        <p>Contenuto</p>
        <h1 class="col-12 text-center mb-4 p-4">
            Project List
        </h1>
        <table class="table table-info table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Programming Languages</th>
                    <th scope="col">Project URL</th>
                </tr>
            </thead>

            @foreach ($projects as $project)
            <tbody>
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->prog_langs }}</td>
                    <td>{{ $project->url }}</td>
                    <td>
                        {{-- <a href="{{Route('admin.projects.show', $project)}}" class="btn btn-light btn-sm">Show</a> --}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </main>
    @yield('footer')
</body>
</html>