@extends('layouts.app')

@section('template_title')
    Activity
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Activity') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('activities.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
										<th>NOMBRE ACTIVIDAD</th>
										<th>HORA INICIO</th>
										<th>HORA FINAL</th>
										<th>FECHA</th>
										<th>DERECHOS CULTURALES</th>
										<th>NAC</th>
										<th>Experticias</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activities as $activity)
                                        <tr>
                                         
                                            <td>{{$activity->id}}</td>
											<td>{{ $activity->activity_name }}</td>
											<td>{{ $activity->start_time }}</td>
											<td>{{ $activity->final_hour }}</td>
											<td>{{ $activity->activity_date }}</td>
											<td>{{ $activity->cultural_rights }}</td>
											<td>{{ $activity->nacs }}</td>
											<td>{{ $activity->expertises }}</td>

                                            <td>
                                                <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('activities.show',$activity->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('activities.edit',$activity->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
@endsection
