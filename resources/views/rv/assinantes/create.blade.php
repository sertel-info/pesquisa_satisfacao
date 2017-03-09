@extends("base.base")

@section("content")

@include("rv.assinantes.formfields_complete")

@endsection


@push("scripts")
	<script type="text/javascript">
		$(function(){
			$(".panel-toggle")
			.on('hidden.bs.collapse', function(){
				$el = $(this);
				$el.find(".collapse-icon").html($('<span class="glyphicon glyphicon-circle-arrow-down"> </span>'))
			})
			.on('shown.bs.collapse', function(){
				$el = $(this);
				$el.find(".collapse-icon").html($('<span class="glyphicon glyphicon-circle-arrow-up"> </span>'))
			});
		})
	</script>
@endpush