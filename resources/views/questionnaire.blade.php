@extends('layouts.app')

@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Create</h4>
      <p class="card-description">
        Create new question
      </p>
      <form class="forms-sample" method="POST">
        @csrf

        <div class="form-group">
          <label for="exampleTextarea1">Question</label>
          <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
      </form>
    </div>
  </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Questions</h4>
      <p class="card-description">
        All Available questions
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Question</th>
            <th>Available Answers</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($questions as $question)
            <tr>
              <td>{{ $question->body }}</td>
              <td>{{ __('2') }}</td>
              <td><label class="badge badge-info">Edit</label> <label class="badge badge-danger">Delete</label></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
