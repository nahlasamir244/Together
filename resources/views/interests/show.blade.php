@extends('layouts.app')
@section('content')
        <div class="card" style="width: 18rem;">
            <img src={{$interest->img}} class="card-img-top" alt="image">
            <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">{{$interest->name}}</h5>
              <p class="card-text">{{$interest->description}}</p>
              <a href={{route('interests.index')}} class="btn btn-primary">Back Home</a>
            </div>
        </div>
          </div>
@endsection
