@extends('layouts.app')

@section('content')
<section id="employee-edit">
  <div class="container">
    <div class="row">
      <div class="col">
        <form class="form-group" action="{{route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="{{$employee->first_name}}">
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="last_name">First Name:</label>
            <input type="text" class="form-control" name="last_name" value="{{$employee->last_name}}">
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{$employee->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" value="{{$employee->phone}}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <div class="col d-flex flex-column">
              <label for="companies">Company:</label>
              <select class="form-control" name="company_id">
                <option value="empty"> --- </option>
                @foreach($companies as $company)
                <option value="{{$company->id}}" {{$employee->company_id == $company->id ? "selected" : " "}}> {{$company->name}}</option>
                @endforeach
              </select>
            </div>



            <div class="buttons">
              <button type="submit" class="btn btn-primary edit-btn" name="button">Confirm</button>
              <a href="{{route('employees.index')}}" class="btn btn-danger">Cancel</a>
            </div>

        </form>

      </div>
    </div>
  </div>
</section>

@endsection
