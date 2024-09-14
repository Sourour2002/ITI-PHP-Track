@extends('Layout.master')

@section('content')

<div class="pagetitle">
      <h1>Edit Course</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
</div>

<section class="section dashboard">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Course</h5>
          <form method="POST" action="{{ route('courses.update', $course->id) }}">
            @csrf
            @method('PUT')
            
            <div class="row mb-3">
              <label for="courseName" class="col-sm-2 col-form-label">Course Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="courseName" value="{{ old('name', $course->name) }}">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="courseDate" class="col-sm-2 col-form-label">Start Date</label>
              <div class="col-sm-10">
                <input type="date" name="date" class="form-control" id="courseDate" value="{{ old('date', $course->date) }}">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="coursePrice" class="col-sm-2 col-form-label">Price</label>
              <div class="col-sm-10">
                <input type="number" name="price" step="0.01" class="form-control" id="coursePrice" value="{{ old('price', $course->price) }}">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Update Course</button>
              <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
