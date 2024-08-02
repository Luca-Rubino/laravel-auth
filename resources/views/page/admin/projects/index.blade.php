@section('content')
<div class="container">
    <div class="row justify-content-center p-4 text-warning">
        <h1>Project List</h1>
    </div>
</div>
@endsection

@section('projects')
    <main>
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
                            <a href="{{ Route('admin.projects.show', $project) }}" class="btn btn-light btn-sm">Show</a>
                            <a href="{{ Route('admin.projects.show', $project) }}" class="btn btn-light btn-sm">Edit</a>
                            <a href="{{ Route('admin.projects.show', $project) }}"
                                class="btn btn-light btn-sm">Deleted</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </main>
@endsection