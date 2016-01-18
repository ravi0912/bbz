@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Eduction</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => 'ProfileController@educationStore']) !!}
                        <div class="form-group">
                            {!! Form::text('school', 'school', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('occupation', 'occupation', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('start_month', 'MM', ['class' => 'form-control','id' => 'ok']) !!}/{!! Form::text('start_year', 'YYYY', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('finish_month', 'MM', ['class' => 'form-control']) !!}/{!! Form::text('finish_year', 'YYYY', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('url', 'url', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('team_members', 'team_members', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('address', 'address', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('description', 'Description', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Post Status', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    @include('errors.list')
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Project</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => 'ProfileController@projectStore']) !!}
                        <div class="form-group">
                            {!! Form::text('school', 'school', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('start_month', 'MM', ['class' => 'form-control','id' => 'ok']) !!}/{!! Form::text('start_year', 'YYYY', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('finish_month', 'MM', ['class' => 'form-control']) !!}/{!! Form::text('finish_year', 'YYYY', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('branch', 'branch', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('degree', 'degree', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('grade', 'grade', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('experience', 'Experience', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('description', 'Description', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Post Status', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    @include('errors.list')
                </div>
            </div>
        </div>
    </div>
@endsection
