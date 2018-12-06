@extends('layouts.master')
@section('title', 'New Project')
@section('content')
	<h1 class="title">Create a new project (create)</h1>
	<form method="POST" action="/projects">
		@csrf
	  <div class="form-group">
	    <label for="projectTitle">Project title</label>
	    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}" id="projectTitle" aria-describedby="" placeholder="Enter project title" required>
	  </div>
	  <div class="form-group">
	  	<label for="projectDescription">Project description</label>
	    <textarea type="text" name="description" class="form-control" placeholder="Type a project description" required></textarea>
	  </div>
	  <button type="submit" class="btn btn-dark">Save new project</button>
	  @if ($errors->any())
	  	<div class="notification is-danger">
	  		<ul>
	  			@foreach ($errors->all() as $error)
	  				<li>{{ $error }}</li>
	  			@endforeach
	  		</ul>
	  	</div>
	  @endif
	</form>
@stop