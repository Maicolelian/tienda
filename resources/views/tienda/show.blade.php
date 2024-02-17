@extends('layouts.app')

@section('template_title')
    {{ $tienda->name ?? "{{ __('Show') Tienda" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tienda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tienda.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $tienda->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $tienda->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $tienda->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $tienda->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $tienda->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
