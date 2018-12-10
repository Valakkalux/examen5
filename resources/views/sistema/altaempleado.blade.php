<html>
<h1> Alta de empleado </h1>
<br>
<form action = '{{route('guardaempleados')}}'  method = 'GET' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('ide')) 
<i> {{ $errors->first('ide') }} </i> 
@endif	<br>
        

Clave empleado <input type = 'text' name = 'idee' value="" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad<input type = 'text' name = 'edad' value="{{old('edad')}}" >
<br>
Sexo <input type = 'radio' name = 'sexo' value = 'M' checked >M
<input type = 'radio' name = 'sexo' value = 'F'>F
<br>

Seleccione Cine<select name = 'idcine'>
            @foreach($cines as $cr)
			<option value = '{{$cr->idcine}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select>
<br>

<input type = 'submit' value = 'Guardar'>
<br>
</form>
</html>