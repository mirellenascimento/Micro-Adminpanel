@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="col d-flex flex-wrap justify-content-around">
          
                  @foreach($companies as $company)
                  <div class="card" style="width: 18rem;">
                    <div class="image_container">
                      <a href="{{route('companies.show', $company->id)}}">
                      <img src="{{$company->logo}}" class="card-img-top" alt="company image">
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$company->name}}</h5>
                      <div class="buttons">
                        <a href="{{route('companies.show', $company->id)}}" class="btn btn-primary">See details</a>
                        @auth
                        <a href="{{route('companies.edit', $company->id)}}" class="btn btn-primary">Edit</a>
                        @endauth
                      </div>
          
                    </div>
                  </div>
                  @endforeach
          
                </div>
              </div>
          
              <div class="row">
                <div class="col">
                  {{ $companies->links() }}
                </div>


    </div>
</div>
@endsection
