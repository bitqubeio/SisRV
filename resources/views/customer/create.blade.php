@extends('layouts.main')

@section('title', 'Nuevo cliente')

@section('content')
    <section>
        <div class="container mt-4" id="container">
            <h3><i class="fa fa-plus" aria-hidden="true"></i> Nuevo cliente</h3>

            {!! Form::open(['route' => 'customer.store', 'method' => 'POST', 'class' => 'small']) !!}

            <div class="row mt-4">
                <div class="col-12 offset-0 col-md-6 offset-md-1 col-lg-3 offset-lg-1">

                    {!! Field::text('customer_ruc_dni', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Ruc / dni', 'autocomplete' => 'off', 'required' => 'required', 'autofocus' => 'autofocus']) !!}

                    {!! Field::text('customer_businessname', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Nombre / razón social', 'autocomplete' => 'off', 'required' => 'required']) !!}

                    {!! Field::text('customer_address', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Dirección de su domicilio', 'autocomplete'=>'off']) !!}

                    {!! Field::text('customer_city', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Ciudad', 'autocomplete'=>'off']) !!}

                </div>
                <div class="col-12  col-md-6 col-lg-3">

                    {!! Field::text('customer_phone', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Teléfono', 'autocomplete'=>'off']) !!}

                    {!! Field::email('customer_email', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Correo electrónico', 'autocomplete'=>'off']) !!}

                    {!! Field::textarea('customer_observation', ['class' => 'form-control-sm mousetrap', 'placeholder' => 'Observación', 'rows' => '3']) !!}

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-1">
                    <small class="text-muted mt-2">(<span class="text-danger">*</span>) campos obligatorios</small>
                    <div class="form-group mt-2 text-right">

                        {{ Form::submit('Guardar', ['name' => 'action', 'class' => 'btn btn-primary btn-sm']) }}
                        {{ Form::submit('Guardar y crear otro', ['name' => 'action', 'class' => 'btn btn-primary btn-sm']) }}
                        <a href="{{ url('/customer') }}"><button type="button" class="btn btn-sm">Cancelar</button></a>
                        <a href="{{ url('/customer') }}" class="btn btn-link btn-sm"><i class="fa fa-list-ol" aria-hidden="true"></i> Clientes</a>

                    </div>
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </section>
@endsection