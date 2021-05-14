@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col d-flex flex-wrap justify-content-around">

        <div class="card" style="width: 600px;">
          <div class="image_container align-self-center">
            <img src="{{asset($company->logo)}}" class="card-img-top" alt="company image">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$company->name}}</h5>
            <p class="card-text">{{$company->email}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h3>Employess</h3><br>
              @foreach($company->getEmployee as $emp)
              <p >{{$emp->first_name}} {{$emp->last_name}}</p><br>
              @endforeach
            </li>
          </ul>
          <div class="card-body d-flex justify-content-around align-items-center">
            <a href="{{route('companies.index', $company->id)}}" class="btn btn-outline-primary">See All Companies</a>
            <a href="{{route('employees.index', $company->id)}}" class="btn btn-outline-primary">See All Employees</a>
            @auth
            <a href="{{route('companies.edit', $company->id)}}" class="btn btn-outline-primary">Edit Company</a>
            <a href="{{route('companies.create')}}" class="btn btn-outline-primary">Create New Company</a>
            <form action="{{route('companies.destroy', $company->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            @endauth

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
