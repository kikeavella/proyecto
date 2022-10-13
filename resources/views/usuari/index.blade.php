@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<a href="{{ url('usuari/create') }}" class="btn btn-primary" > Registrar un nuevo usuario</a><br><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Acciones</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Identificación</th>
            <th>Clave</th>
            <th>Cargo</th>
            <th>Foto</th>
            <th>Inicio lunes</th>
            <th>Fin lunes</th>
            <th>Inicio martes</th>
            <th>Fin martes</th>
            <th>Inicio miércoles</th>
            <th>Fin miércoles</th>
            <th>Inicio jueves</th>
            <th>Fin jueves</th>
            <th>Inicio viernes</th>
            <th>Fin viernes</th>
            <th>Inicio sábado</th>
            <th>Fin sábado</th>
            <th>Inicio domigno</th>
            <th>Fin domingo</th>
            <th>Inicio festivo</th>
            <th>Fin festivo</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $usuaris as $usuari )
        <tr>
            <td>{{ $usuari->USUARI_ConsInte__b }}</td>
            <td> 
                <a href="{{ url('/usuari/'.$usuari->USUARI_ConsInte__b.'/edit') }}" class="btn btn-primary" >
                    Editar
                </a>   
                <!-- | -->   
                <form action="{{ url('/usuari/'.$usuari->USUARI_ConsInte__b ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar">
                </form>
            </td>
            <td>{{ $usuari->USUARI_Nombre____b }}</td>
            <td>{{ $usuari->USUARI_Correo___b }}</td>
            <td>{{ $usuari->USUARI_Identific_b }}</td>
            <td>{{ $usuari->USUARI_Clave_____b }}</td>
            <td>{{ $usuari->USUARI_Cargo_____b }}</td>
            <td>
                <!--<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuari->USUARI_Foto______b }}" width="100" alt="">-->
                {{ $usuari->USUARI_Foto______b }}
            </td>
            <td>{{ $usuari->USUARI_HorIniLun_b }}</td>
            <td>{{ $usuari->USUARI_HorFinLun_b }}</td>
            <td>{{ $usuari->USUARI_HorIniMar_b }}</td>
            <td>{{ $usuari->USUARI_HorFinMar_b }}</td>
            <td>{{ $usuari->USUARI_HorIniMie_b }}</td>
            <td>{{ $usuari->USUARI_HorFinMie_b }}</td>
            <td>{{ $usuari->USUARI_HorIniJue_b }}</td>
            <td>{{ $usuari->USUARI_HorFinJue_b }}</td>
            <td>{{ $usuari->USUARI_HorIniVie_b }}</td>
            <td>{{ $usuari->USUARI_HorFinVie_b }}</td>
            <td>{{ $usuari->USUARI_HorIniSab_b }}</td>
            <td>{{ $usuari->USUARI_HorFinSab_b }}</td>
            <td>{{ $usuari->USUARI_HorIniDom_b }}</td>
            <td>{{ $usuari->USUARI_HorFinDom_b }}</td>
            <td>{{ $usuari->USUARI_HorIniFes_b }}</td>
            <td>{{ $usuari->USUARI_HorFinFes_b }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $usuaris->links() !!}
</div>
@endsection