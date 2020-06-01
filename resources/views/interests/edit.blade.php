@extends('layouts.app')
@section('content')
<form method="POST" action={{route('interests.update',['interest'=>$interest->id])}}>
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputInterestName">Interest Name</label>
      <input type="text" class="form-control" name="name" required value={{$interest->name}}>
    </div>
    <div class="form-group">
      <label for="exampleInputInterestDesc">Description</label>
      <input type="text" class="form-control" name="description" value='{{$interest->description}}'>
      <small class="form-text text-muted">Write a short well describtive text.. </small>
    </div>
    <div class="form-group">
    <input type="url" class="form-control" name="img" required value={{$interest->img}}>
    <small class="form-text text-muted">insert a representive image url .. </small>
</div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection
