<div style="width: 400px">
	@foreach($ma as $m)
	<div class="row">
		@foreach($m as $ij)
			<div class="col-md-1">{{$ij}}</div>
		@endforeach
	</div>
	@endforeach
</div>