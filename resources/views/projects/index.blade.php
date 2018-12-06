@extends('layouts.master')
@section('title', 'Home Page')
@section('content')
	<h1 class="title">That is my projects page, showing projects (index)</h1>
	<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<table class="table">
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
	@foreach($projects as $project)
	<tr>
		<td>{{ $project->id }}</td>
		<td><a href="/projects/{{ $project->id }}" target="_blank">{{ $project->title }}</a></td>
		<td>{{ $project->description }}</td>
	</tr>
	@endforeach
	</table>
@stop