@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h2>
                    New Repository
                </h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row my-4">
                <div class="col">
                    <form action="{{ route('admin.projects.store') }}" method="post">
                        @csrf
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">
                                <i class="fa-solid fa-file-code fa-lg fa-fw"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Project Name" name="title" 
                            required maxlength="64" value="{{ old('title') }}">
                        </div>
                        <select class="form-select mt-4" aria-label="Default select example" name="type" required>
                            <option selected>Select type</option>
                            <option value="private {{ old('type' == 'private' ? 'selected' : '') }}">Private</option>
                            <option value="public {{ old('type' == 'public' ? 'selected' : '') }}">Public</option>
                        </select>
                        <div>
                            <button class="btn btn-success mt-4" type="submit">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection