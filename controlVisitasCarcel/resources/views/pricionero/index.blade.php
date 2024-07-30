@extends('layouts.app')

@section('template_title')
    Pricionero
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pricionero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pricionero.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombrecompleto</th>
										<th>Fechanacimiento</th>
										<th>Fechaingreso</th>
										<th>Delitocometido</th>
										<th>Celdaasignada</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pricioneros as $pricionero)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pricionero->nombreCompleto }}</td>
											<td>{{ $pricionero->fechaNacimiento }}</td>
											<td>{{ $pricionero->fechaIngreso }}</td>
											<td>{{ $pricionero->delitoCometido }}</td>
											<td>{{ $pricionero->celdaAsignada }}</td>

                                            <td>
                                                <form action="{{ route('pricioneros.destroy',$pricionero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pricioneros.show',$pricionero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pricioneros.edit',$pricionero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pricioneros->links() !!}
            </div>
        </div>
    </div>
@endsection
