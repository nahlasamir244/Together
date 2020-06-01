@extends('layouts.app')
@section('content')
<form method="POST" action={{route('interests.store')}}>
    @csrf
    <div class="form-group">
      <label for="exampleInputInterestName">Interest Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
      <label for="exampleInputInterestDesc">Description</label>
      <input type="text" class="form-control" name="description">
      <small class="form-text text-muted">Write a short well describtive text.. </small>
    </div>
    <div class="form-group">
    <input type="url" class="form-control" name="img" required>
    <small class="form-text text-muted">insert a representive image url .. </small>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
