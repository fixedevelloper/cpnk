@if(!empty(config('dz.public.backend.js')))
	@foreach(config('dz.public.backend.js') as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif
@if(!empty(config('dz.public.pagelevel.js.'.$action)))
	@foreach(config('dz.public.pagelevel.js.'.$action) as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif
