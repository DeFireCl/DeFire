@extends ('admin/layout')

@section ('title') Admin | Sistema Arriendos @stop

@section ('content')


    <div class="welcome">
        <h1>Bienvenido {{ Auth::user()->full_name; }}</h1>

        
    </div>

@stop