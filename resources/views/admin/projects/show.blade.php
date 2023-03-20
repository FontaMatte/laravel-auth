@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h2>
                    Repository Name: {{ $project->title }}
                </h2>
                <div>
                    <strong>Commits:</strong> {{ $project->commits }}
                </div>
                <div>
                   <strong>Stars:</strong> {{ $project->stars }}
                </div>
                <div>
                    <strong>Repository type:</strong> {{ $project->type }}
                </div>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-success mt-4">
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection