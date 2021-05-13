@extends('layouts.app')

@section('content')
<section id="companies-create">
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <form class="form-group" action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{old('$company->name')}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{old('$company->email')}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="website">Website:</label>
            <input type="text" class="form-control" name="website" value="{{old('$company->website')}}">
            @error('website')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div>
              <br>
              <label for="logo">Logo: </label>
                  <input type="file" name="logo" value="{{ old('logo') }}" required>

                  @error('logo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  
            </div>

            <div class="buttons">
              <br>
              <button type="submit" class="btn btn-primary edit-btn" name="button">Create Company</button>
              <a href="{{route('companies.index')}}" class="btn btn-danger">Cancel</a>
            </div>

        </form>

      </div>
    </div>
  </div>
</section>
@endsection
