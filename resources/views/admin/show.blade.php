@extends('\admin\layout1')

@section('title', 'Details for ' .$student->name)


@section('content')

<div class="row">
  <div class="col-12">
    <h1>Details for {{ $student->name }}</h1>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <p><strong>Name: </strong>{{ $student->name }}</p>
    <p><strong>Date of Birth: </strong>{{ $student->dob }}</p>
    <p><strong>Email: </strong>{{ $student->email }}</p>
    <p><strong>School Type: </strong>{{ $student->school }}</p>
  </div>
</div>




@endsection





