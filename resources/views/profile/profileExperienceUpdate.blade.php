<div class="panel-body">
    @foreach($experiences as $experience)
        {!! Form::open(['action' => 'ProfileController@experienceUpdate']) !!}
        <div class="form-group">
            {!! Form::hidden('experience_id', $experience->id) !!}
        </div>
        <div class="form-group">
            {!! Form::text('company_name', $experience->company_name, ['placeholder'=>'Company Name','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('title', $experience->title, ['placeholder'=>'Title','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('location', $experience->location, ['placeholder'=>'Location','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
                                                 <span class="profile_3_experience_start profile_3_start">
                                                     <label for="start_month">
                                                         Start
                                                     </label>
                                                     {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
    ),$experience->start_month, ['placeholder'=>'MM','class' => 'profile_3_form_content_sm','id' => 'ok']) !!}/{!! Form::text('start_year', $experience->start_year, ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                     </span>
                                                <span class="profile_3_experience_finish profile_3_start">
                                                    <label for="finish_month">
                                                        Finish
                                                    </label>
                                                    {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
    ),$experience->finish_month, ['placeholder'=>'MM','class' => 'profile_3_form_content_sm']) !!}/{!! Form::text('finish_year', $experience->finish_year, ['placeholder'=>'YYYY','class' => 'profile_3_form_content_sy']) !!}
                                                </span>

        </div>
        <div class="form-group">
            {!! Form::checkbox('working',$experience->working, false,['class'=>'profile_3_experience_checkbox']) !!} Presently working
        </div>
        <div class="form-group">
            {!! Form::textarea('description', $experience->description, ['rows'=>'4','placeholder'=>'Description','class' => 'profile_3_form_content']) !!}
        </div>
        <div class="form-group">
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'general_button ','id' => 'ok']) !!}
        </div>
        {!! Form::close() !!}
    @endforeach
</div>