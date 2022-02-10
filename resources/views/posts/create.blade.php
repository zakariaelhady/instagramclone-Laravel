@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <form action="/p" method="post" enctype="multipart/form-data">@csrf
    <div class="row">
        <div class="col-lg-9">

            <div class="row mb-3 mx-auto">
                <label for="caption" class="col-md-4 col-form-label">{{ __('Caption') }}</label>

                <div class="">
                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
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
                <button type="submit" class="col-md-2 my-2 btn btn-primary">Add new post</button>
            </div>

        </div>
    </div>
    </form>
</div>
@endsection
