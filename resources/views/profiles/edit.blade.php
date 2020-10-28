@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title"
                           type="text"
                           name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') ?? $user->profile->title }}"
                           autocomplete="title" autofocus>

                    @error('title')
                    <strong>{{ $errors->first('title') }}</strong>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description"
                           type="text"
                           name="description"
                           class="form-control @error('description') is-invalid @enderror"
                           value="{{ old('description') ?? $user->profile->description }}"
                           autocomplete="description" autofocus>

                    @error('description')
                    <strong>{{ $errors->first('description') }}</strong>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url"
                           type="text"
                           name="url"
                           class="form-control @error('url') is-invalid @enderror"
                           value="{{ old('url') ?? $user->profile->url }}"
                           autocomplete="url" autofocus>

                    @error('url')
                    <strong>{{ $errors->first('url') }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <strong>{{ $errors->first('image') }}</strong>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
