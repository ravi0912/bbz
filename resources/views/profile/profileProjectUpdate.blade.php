<div class="panel-body">
    @foreach($projects as $project)
        {!! Form::open(['action' => 'ProfileController@projectUpdate']) !!}
        <div class="form-group">
            {!! Form::hidden('project_id', $project->id) !!}
        </div>
        <div class="form-group">
            {!! Form::text('name', $project->name, ['placeholder'=>'Project Name','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('occupation', $project->occupation, ['placeholder'=>'Occupation','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            <label for="start_month">
                Start
            </label>
            {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
),$project->start_month, ['placeholder'=>'MM','class' => 'profile_3_form_content_sm','id' => 'ok']) !!}/{!! Form::text('start_year', $project->start_year, ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
            <label for="finish_month">
                Finish
            </label>
            {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
),$project->finish_month, ['placeholder'=>'MM','class' => 'profile_3_form_content_sm']) !!}/{!! Form::text('finish_year', $project->finish_year, ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('url', $project->url, ['placeholder'=>'URL','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('team_members', $project->team_members, ['placeholder'=>'Team Members','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('address', $project->address, ['placeholder'=>'Address','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', $project->desciption, ['rows'=>'4','placeholder'=>'Description','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'general_button ','id' => 'ok']) !!}
            </div>
            {!! Form::close() !!}
            @endforeach
        </div>