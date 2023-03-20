@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Projects
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Commits</th>
                    <th scope="col">Stars</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->commits }}</td>
                            <td>{{ $project->stars }}</td>
                            <td>{{ $project->type }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">
                                    Dettagli
                                </a>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                                <a href="#" class="btn btn-danger">
                                    Elimina
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection