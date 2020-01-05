<div style="width: 120px">
	@foreach($ma as $m)
	<div class="row">
		@foreach($m as $ij)
			<div class="col-md-4">{{$ij}}</div>
		@endforeach
	</div>
	@endforeach
</div>