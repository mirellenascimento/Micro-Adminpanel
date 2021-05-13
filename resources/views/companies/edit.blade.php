@extends('layouts.app')

@section('content')
<section id="company-edit">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center image_container">
          <img src="{{asset($company->logo)}}" alt="image">
        </div>
        <form class="form-group" action="{{route('companies.update', $company->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$company->name}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{$company->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="website">Website:</label>
            <input type="text" class="form-control" name="website" value="{{$company->website}}">
            @error('website')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <div class="row">
              <div class="col d-flex flex-column">
                  <label for="logo">Change logo: </label>
                  <input type="file" name="logo">

                  @error('logo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

            <div class="buttons">
              <button type="submit" class="btn btn-primary edit-btn" name="button">Confirm</button>
              <a href="{{route('companies.index')}}" class="btn btn-danger">Cancel</a>
            </div>

        </form>

      </div>
    </div>
  </div>
</section>

@endsection
