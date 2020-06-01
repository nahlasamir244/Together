@extends('layouts.app')
@section('content')
    <a href={{route('interests.create')}} type="button" class="btn btn-success">Add Interest</a>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Image Url</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($interests as $interest)
            <tr>
                <th scope="row">{{$interest['id']}}</th>
                <td>{{$interest['name']}}</td>
                <td>{{$interest['img']}}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                        <a href={{route('interests.show',['interest'=> $interest->id])}} type="button" class="btn btn-primary">View</a>
                        <a type="button" class="btn btn-secondary mt-2">Groups</a>
                        </div>
                        <div class="col-sm">
                            <a href={{route('interests.edit',['interest'=> $interest->id])}} type="button" class="btn btn-success">Edit</a>
                        <form method="POST" action={{route('interests.destroy',['interest'=> $interest->id])}} style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
@endsection
