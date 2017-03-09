@extends("base.base")

@section("content")

<form action='{{route("rv.planos.store")}}' method="POST">
	@include("rv.planos.formfields")
</form>

@endsection
