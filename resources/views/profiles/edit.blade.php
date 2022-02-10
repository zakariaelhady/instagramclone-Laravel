@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">@csrf
        @method('PATCH')
    <div class="row">
        <div class="col-lg-9">

            <div class="row mb-3 mx-auto">
                <label for="Category" class="col-md-4 col-form-label">{{ __('Category') }}</label>

                <div class="">
                    <input id="Category" name="category" type="text" class="form-control @error('Category') is-invalid @enderror" value="{{ old('Category')?? $user->profile->category }}" autocomplete="Category" autofocus>

                    @error('Category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 mx-auto">
                <label for="Description" class="col-md-4 col-form-label">{{ __('Description') }}</label>

                <div class="">
                    <input id="Description" name="desc" type="text" class="form-control @error('Description') is-invalid @enderror" value="{{ old('Description')?? $user->profile->desc }}" autocomplete="Description" autofocus>

                    @error('Description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 mx-auto">
                <label for="img" class="col-md-4 col-form-label">{{ __('Image') }}</label>
                <div>
                <input type="file" name="img" id="" class="form-control-file"><br>
                    @error('img')
                        <span class=" text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mx-auto px-2">
                <button type="submit" class="col-md-2 my-2 btn btn-primary">Save</button>
            </div>

        </div>
    </div>
    </form>
</div>
@endsection
