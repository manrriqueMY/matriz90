<div style="width: 400px">
	@foreach($ma as $m)
	<div class="row">
		@foreach($m as $ij)
			<div style="width: 40px">{{$ij}}</div>
		@endforeach
	</div>
	@endforeach
</div>