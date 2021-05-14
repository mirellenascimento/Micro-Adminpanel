@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="col d-flex flex-wrap justify-content-end">
                  @auth
                  <a href="{{route('employees.create')}}" class="btn btn-outline-primary">Add New Employee</a>
                  @endauth
                  @foreach($employees as $employee)
                  <div class="card" style="width: 100%;">
                    <div class="card-body">
                      <h1 class="card-title">{{$employee->first_name}} {{$employee->last_name}}</h1>
                      <h5 class="card-title"><a href="{{route('companies.show', $employee->company_id)}}"> {{$employee->getCompany["name"]}}</a></h5>
                      <h5 class="card-title">{{$employee->email}}</h5>
                      <h5 class="card-title">{{$employee->phone}}</h5>
                      <div class="buttons d-flex justify-content-end">
                        @auth
                        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary">Edit Employee</a>
                        <form action="{{route('employees.destroy', $employee->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                        @endauth
                      </div>
          
                    </div>
                  </div>
                  @endforeach
          
                </div>
              </div>
          
              <div class="row">
                <div class="col">
                  {{ $employees->links() }}
                </div>


    </div>
</div>
@endsection
