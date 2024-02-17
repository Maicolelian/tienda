@extends('layouts.app')

@section('template_title')
    Tienda
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                            @role('escritor')
                            <span id="card_title">
                                {{ __('Ventas totales') }}
                            @endrole
                        <div style="display: flex; justify-content: space-between; align-items: center;"> 
                            <span id="card_title">
                                {{ __('Tienda') }}
                            </span>
                            @role('admin')
                             <div class="float-right">
                                <a href="{{ route('tienda.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo registro') }}
                                </a>
                              </div>
                            @endrole
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Cliente</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiendas as $tienda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tienda->producto }}</td>
											<td>{{ $tienda->cantidad }}</td>
											<td>{{ $tienda->precio }}</td>
											<td>{{ $tienda->cliente }}</td>
											<td>{{ $tienda->telefono }}</td>
                                            @role('admin')
                                            <td>
                                                <form action="{{ route('tienda.destroy',$tienda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tienda.show',$tienda->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mirar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tienda.edit',$tienda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                            @endrole
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tiendas->links() !!}
            </div>
        </div>
    </div>
@endsection
