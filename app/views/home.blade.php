@extends('layouts.index')

@section('body')
	<ul class="list-companies">
		@foreach ($apps as $app)
			<li>
				<h2 class="app-company">{{ $app->company->name }}</h2>

				@if (!empty($app->source_url))
					<a href="{{ $app->source_url }}" class="app-position" target="_blank">{{ $app->position }}</a>
				@else
					<span class="app-position">{{ $app->position }}</span>
				@endif
				
				<span class="app-date-applied">{{ date('F j, Y', strtotime($app->date_applied)) }}</span>
				
				<span class="app-status">{{ $app->status->status }}</span>
			</li>
		@endforeach
	</ul>
@stop