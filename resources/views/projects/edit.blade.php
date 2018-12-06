@extends('layouts.master')
@section('title', 'New Project')
@section('content')
	<h1 class="title">Editing Project #{{ $project->id }} (patch)</h1>
	<form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
		@method('PATCH')
		@csrf
	  <div class="form-group">
	    <label for="projectTitle">Project title</label>
	    <input type="text" name="title" class="form-control" id="projectTitle" placeholder="Enter project title" value="{{ $project->title }}">
	  </div>
	  <div class="form-group">
	  	<label for="projectDescription">Project description</label>
	    <textarea type="text" name="description" class="form-control" placeholder="Type a project description">{{ $project->description }}</textarea>
	  </div>
	  <button type="submit" class="btn btn-success">Update project</button>
	</form>
	<form method="POST" action="/projects/{{ $project->id }}">
		@method('DELETE')
		@csrf
	  <button type="submit" class="btn btn-danger">Delete project</button>
	</form>
@stop