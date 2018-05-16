@extends('layouts.app')
@section('content')
<br>
<h2 class="display-4">Single Task Show List</h2>
<hr>

<div class="card bg-light text-white">
<div class="card-body">
<div class="row">
<div class="col-md-3 col-lg-3">
<img src="/storage/images/img_avatar3.png" class="rounded-circle img-fluid" alt="Task Image">
</div>
<div class="col-md-9 col-lg-9">
<div class="alert alert-info">
  <strong>Task Title!</strong>
  <h4><p>{{$task->title}}</p></h4>
</div>

<div class="alert alert-success">
<strong>Task Details</strong>
<p class="text-justify">{{$task->details}}</p>
</div>

<div class="alert alert-warning">
<strong>Due Date!</strong> <h5><p>{{$task->due}}</p></h5>
</div>
<br>
<div class="alert alert-warning">
<strong>Created Date</strong> <p>{{$task->created_at}}</p>
</div>
</div>
</div>
</div>
</div>

@endsection
