@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/usuari/'.$usuari->USUARI_ConsInte__b ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuari.form',['modo'=>'Editar'] );
</form>

</div>
@endsection