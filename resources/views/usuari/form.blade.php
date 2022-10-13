    <h1>{{ $modo }} usuario</h1><br>

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach( $errors->all() as $error )
                <li> {{ $error }} </li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="USUARI_Nombre____b"> Nombre </label>
        <input type="text" class="form-control" name="USUARI_Nombre____b" value="{{ isset($usuari->USUARI_Nombre____b)?$usuari->USUARI_Nombre____b:old('USUARI_Nombre____b') }}" id="USUARI_Nombre____b"><br>
    </div>
    <div class="form-group">
        <label for="USUARI_Correo___b"> Correo </label>
        <input type="email" class="form-control" name="USUARI_Correo___b" value="{{ isset($usuari->USUARI_Correo___b)?$usuari->USUARI_Correo___b:old('USUARI_Correo___b') }}" id="USUARI_Correo___b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_Identific_b"> Identificación </label>
        <input type="text" class="form-control" name="USUARI_Identific_b" value="{{ isset($usuari->USUARI_Identific_b)?$usuari->USUARI_Identific_b:old('USUARI_Identific_b') }}" id="USUARI_Identific_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_Clave_____b"> Contraseña </label>
        <input type="password" class="form-control" name="USUARI_Clave_____b" value="{{ isset($usuari->USUARI_Clave_____b)?$usuari->USUARI_Clave_____b:old('USUARI_Clave_____b') }}" id="USUARI_Clave_____b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_Cargo_____b"> Cargo </label>
        <input type="text" class="form-control" name="USUARI_Cargo_____b" value="{{ isset($usuari->USUARI_Cargo_____b)?$usuari->USUARI_Cargo_____b:old('USUARI_Cargo_____b') }}" id="USUARI_Cargo_____b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniLun_b"> Horario inicio del lunes </label>
        <input type="time" class="form-control" name="USUARI_HorIniLun_b" value="{{ isset($usuari->USUARI_HorIniLun_b)?$usuari->USUARI_HorIniLun_b:old('USUARI_HorIniLun_b') }}" id="USUARI_HorIniLun_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinLun_b"> Horario fin del lunes </label>
        <input type="time" class="form-control" name="USUARI_HorFinLun_b" value="{{ isset($usuari->USUARI_HorFinLun_b)?$usuari->USUARI_HorFinLun_b:old('USUARI_HorFinLun_b') }}" id="USUARI_HorFinLun_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniMar_b"> Horario inicio del martes </label>
        <input type="time" class="form-control" name="USUARI_HorIniMar_b" value="{{ isset($usuari->USUARI_HorIniMar_b)?$usuari->USUARI_HorIniMar_b:old('USUARI_HorIniMar_b') }}" id="USUARI_HorIniMar_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinMar_b"> Horario fin del martes </label>
        <input type="time" class="form-control" name="USUARI_HorFinMar_b" value="{{ isset($usuari->USUARI_HorFinMar_b)?$usuari->USUARI_HorFinMar_b:old('USUARI_HorFinMar_b') }}" id="USUARI_HorFinMar_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniMie_b"> Horario inicio del miércoles </label>
        <input type="time" class="form-control" name="USUARI_HorIniMie_b" value="{{ isset($usuari->USUARI_HorIniMie_b)?$usuari->USUARI_HorIniMie_b:old('USUARI_HorIniMie_b') }}" id="USUARI_HorIniMie_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinMie_b"> Horario fin del miércoles </label>
        <input type="time" class="form-control" name="USUARI_HorFinMie_b" value="{{ isset($usuari->USUARI_HorFinMie_b)?$usuari->USUARI_HorFinMie_b:old('USUARI_HorFinMie_b') }}" id="USUARI_HorFinMie_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniJue_b"> Horario inicio del jueves </label>
        <input type="time" class="form-control" name="USUARI_HorIniJue_b" value="{{ isset($usuari->USUARI_HorIniJue_b)?$usuari->USUARI_HorIniJue_b:old('USUARI_HorIniJue_b') }}" id="USUARI_HorIniJue_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinJue_b"> Horario fin del jueves </label>
        <input type="time" class="form-control" name="USUARI_HorFinJue_b" value="{{ isset($usuari->USUARI_HorFinJue_b)?$usuari->USUARI_HorFinJue_b:old('USUARI_HorFinJue_b') }}" id="USUARI_HorFinJue_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniVie_b"> Horario inicio del viernes </label>
        <input type="time" class="form-control" name="USUARI_HorIniVie_b" value="{{ isset($usuari->USUARI_HorIniVie_b)?$usuari->USUARI_HorIniVie_b:old('USUARI_HorIniVie_b') }}" id="USUARI_HorIniVie_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinVie_b"> Horario fin del viernes </label>
        <input type="time" class="form-control" name="USUARI_HorFinVie_b" value="{{ isset($usuari->USUARI_HorFinVie_b)?$usuari->USUARI_HorFinVie_b:old('USUARI_HorFinVie_b') }}" id="USUARI_HorFinVie_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniSab_b"> Horario inicio del sábado </label>
        <input type="time" class="form-control" name="USUARI_HorIniSab_b" value="{{ isset($usuari->USUARI_HorIniSab_b)?$usuari->USUARI_HorIniSab_b:old('USUARI_HorIniSab_b') }}" id="USUARI_HorIniSab_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinSab_b"> Horario fin del sábado </label>
        <input type="time" class="form-control" name="USUARI_HorFinSab_b" value="{{ isset($usuari->USUARI_HorFinSab_b)?$usuari->USUARI_HorFinSab_b:old('USUARI_HorFinSab_b') }}" id="USUARI_HorFinSab_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniDom_b"> Horario inicio del domingo </label>
        <input type="time" class="form-control" name="USUARI_HorIniDom_b" value="{{ isset($usuari->USUARI_HorIniDom_b)?$usuari->USUARI_HorIniDom_b:old('USUARI_HorIniDom_b') }}" id="USUARI_HorIniDom_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinDom_b"> Horario fin del domingo </label>
        <input type="time" class="form-control" name="USUARI_HorFinDom_b" value="{{ isset($usuari->USUARI_HorFinDom_b)?$usuari->USUARI_HorFinDom_b:old('USUARI_HorFinDom_b') }}" id="USUARI_HorFinDom_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorIniFes_b"> Horario inicio del festivo </label>
        <input type="time" class="form-control" name="USUARI_HorIniFes_b" value="{{ isset($usuari->USUARI_HorIniFes_b)?$usuari->USUARI_HorIniFes_b:old('USUARI_HorIniFes_b') }}" id="USUARI_HorIniFes_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_HorFinFes_b"> Horario fin del festivo </label>
        <input type="time" class="form-control" name="USUARI_HorFinFes_b" value="{{ isset($usuari->USUARI_HorFinFes_b)?$usuari->USUARI_HorFinFes_b:old('USUARI_HorFinFes_b') }}" id="USUARI_HorFinFes_b"><br>
    </div>
    <div class="form-group"> 
        <label for="USUARI_Foto______b"> Foto </label>
        @if(isset($usuari->USUARI_Foto______b))
            {{ $usuari->USUARI_Foto______b }}
            <!--<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuari->USUARI_Foto______b }}" width="100" alt="">-->
        @endif
        <input type="file" class="form-control" name="USUARI_Foto______b" value="{{ isset($usuari->USUARI_Foto______b)?$usuari->USUARI_Foto______b:old('USUARI_Foto______b') }}" id="USUARI_Foto______b"><br>
    </div>
    <input type="submit" class="btn btn-success" value="{{ $modo }}">
    <a class="btn btn-primary" href="{{ url('usuari') }}"> Regresar</a>
