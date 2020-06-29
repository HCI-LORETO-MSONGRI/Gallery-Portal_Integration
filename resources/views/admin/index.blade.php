@extends('\admin\layout1')

@section('title', 'Students List')

@section('content')


<div class="row">
   <div class="col-12">
      <h1>Students List</h1>
      <p><a href="admin/create">Add New Student</a></p>
   </div>
</div>

@foreach($students as $student)
<div class="row">
   <div class="col-2">
   {{ $student->id }}
   </div>
   <div class="col-4">
      <a href="/students/{{ $student -> id}}">{{ $student -> name}}</a>  
   </div>
   <div class="col-4"> {{ $student -> dob}} </div>
   <div class="col-2"> {{ $student -> school}} </div>
</div>

@endforeach

@endsection

