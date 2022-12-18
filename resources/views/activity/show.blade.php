@extends('layouts.app')

@section('template_title')
    {{ $activity->name ?? 'Show Activity' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Activity</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activities.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Activity Name:</strong>
                            {{ $activity->activity_name }}
                        </div>
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $activity->start_time }}
                        </div>
                        <div class="form-group">
                            <strong>Final Hour:</strong>
                            {{ $activity->final_hour }}
                        </div>
                        <div class="form-group">
                            <strong>Activity Date:</strong>
                            {{ $activity->activity_date }}
                        </div>
                        <div class="form-group">
                            <strong>Cultural Rights:</strong>
                            {{ $activity->cultural_rights }}
                        </div>
                        <div class="form-group">
                            <strong>Nac Id:</strong>
                            {{ $activity->nac_id }}
                        </div>
                        <div class="form-group">
                            <strong>Expertises:</strong>
                            {{ $activity->expertises }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
