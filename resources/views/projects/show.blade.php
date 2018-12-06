@extends('layouts.master')
@section('title', 'New Project')
@section('content')
	<h1 class="title">Consulting one specific project (show)</h1>
	<div class="container" style="width:500px;">
		<div class="card">
		  <div class="card-image">
		    <figure class="image is-4by3">
		      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
		    </figure>
		  </div>
		  <div class="card-content">
		    <p class="title is-4">{{ $project->title }}</p>
		    <div class="content">{{ $project->description }}.<br>
		      <time datetime="2016-1-1"> {{ $project->updated_at }}</time>
		    </div>
		  </div>
		  <footer class="card-footer">
		    <a href="/projects/{{ $project->id }}/edit" target="_blank" class="card-footer-item">Edit</a>
		    <a href="/projects/{{ $project->id }}/edit" target="_blank" class="card-footer-item">Update</a>
		    <a href="#" class="card-footer-item">Delete</a>
		  </footer>
		</div>
	</div>
@stop