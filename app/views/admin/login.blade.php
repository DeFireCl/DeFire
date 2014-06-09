@extends ('admin/layout')

@section ('title') Login | Sistema Arriendos @stop

@section ('content')


    <h3>Arrendatario</h3>

    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif


    {{ Form::open(array('url' => 'admin/login')) }}

        <div class='row'>
            <div class="form-group col-md-2">
                {{ Form::label('username', 'Nick') }}
                {{ Form::text('username', Input::old('username')); }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('contraseña', 'Contraseña') }}
                {{ Form::password('password'); }}
            </div>
        </div>

        <div class='row'>
            <div class="form-group col-md-2">
                {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                {{ Form::checkbox('rememberme', true) }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::submit('Enviar') }}
            </div>
        </div>

    {{ Form::close() }}

@stop