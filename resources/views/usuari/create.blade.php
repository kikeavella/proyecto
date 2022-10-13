@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/usuari') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('usuari.form',['modo'=>'Crear'] );
</form>

</div>
@endsection