@extends("base.base")

@section("content")

{{ Form::model($plano, ['route' => ['rv.planos.update', $plano->id], 'method'=>'POST']) }}
	@include("rv.planos.formfields")
{{ Form::close() }}

@endsection
