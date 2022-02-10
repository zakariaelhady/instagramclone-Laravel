@extends('layouts.app')

@section('content')
<div class="container mx-auto col-8">
    <div class="row">
        <div class="col-lg-9">

            <div class="row mb-3 mx-auto">
                <label for="caption" class="col-md-4 col-form-label">{{ __('Caption') }}</label>

                <div class="">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

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
                <input type="file" name="img" id="" class="form-control-file">
                    @error('img')
                        <span class="invalid-feedback" role="alert">
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
</div>
@endsection
