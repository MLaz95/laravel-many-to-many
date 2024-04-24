@extends('layouts.app')

@section('content')

<form action="{{ route('technologies.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label text-capitalize">tech title</label>
        <input type="text" class="form-control  @error('title') is-invalid @enderror" value="{{ $technology->title }}"
            name="title">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="color" class="form-label text-capitalize">color</label>
        <input type="color" name="color" class="form-control"
            value="{{ $technology->color }}"
            style="width: 5%;"
            >
    </div>

    <div class="d-flex gap-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('technologies.index') }}" class="btn btn-secondary">Back</a>
    </div>
</form>
    
@endsection

