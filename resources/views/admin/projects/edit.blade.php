@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h2>
                    New Repository
                </h2>
            </div>
            @include('partials.errors')
            <div class="row my-4">
                <div class="col">
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <label for="img" class="form-label">
                            <strong>Project Title</strong> 
                        </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">
                                <i class="fa-solid fa-file-code fa-lg fa-fw"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Project Name" name="title" 
                            required maxlength="64" value="{{ old('title', $project->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label mt-3">
                                <strong>Image</strong> 
                            </label>
                            @if ($project->img)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/'.$project->img) }}" style="height: 300px" alt="">
                                </div>
                            @endif
                            <input 
                                type="file"
                                accept="image/*"
                                id="img" 
                                class="form-control" 
                                placeholder="Inserisci immagine" 
                                name="img"> 
                        </div>
                        <label for="img" class="form-label">
                            <strong>Project Type</strong> 
                        </label>
                        <select class="form-select" aria-label="Default select example" name="type" required>
                            <option selected>Select type</option>
                            <option value="private" {{ old('type', $project->type) == 'private' ? 'selected' : '' }}>Private</option>
                            <option value="public" {{ old('type', $project->type) == 'public' ? 'selected' : '' }}>Public</option>
                        </select>
                        <div>
                            <button class="btn btn-success mt-4" type="submit">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection