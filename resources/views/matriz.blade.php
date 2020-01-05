<div>
	@foreach($ma as $m)
	<div class="row">
		@foreach($m as $ij)
			<div style="width: 50px">{{$ij}}</div>
		@endforeach
	</div>
	@endforeach
</div>