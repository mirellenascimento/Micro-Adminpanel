@extends('layouts.app')

@section('content')
<section id="employees-create">
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <form class="form-group" action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="{{old('$employee->first_name')}}">
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="{{old('$employee->last_name')}}">
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{old('$employee->email')}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" value="{{old('$employee->phone')}}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="col d-flex flex-column">
              <label for="company_id">Company: </label>
              <select class="form-control" name="company_id">
                <option value="empty"> --- </option>

                @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="buttons">
              <br>
              <button type="submit" class="btn btn-primary edit-btn" name="button">Add New Employee</button>
              <a href="{{route('employees.index')}}" class="btn btn-danger">Cancel</a>
            </div>

        </form>

      </div>
    </div>
  </div>
</section>
@endsection
