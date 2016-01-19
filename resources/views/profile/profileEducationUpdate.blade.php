<div class="panel-body">
    @foreach($educations as $education)
        {!! Form::open(['action' => 'ProfileController@educationUpdate']) !!}
        <div class="form-group">
            {!! Form::hidden('education_id', $education->id) !!}
        </div>
        <div class="form-group">
            {!! Form::text('school', $education->school, ['placeholder' => 'School/University Name','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>

        <div class="form-group">
            <label for="start_month">
                Start
            </label>
            {!! Form::select('start_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
),$education->start_month, ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_sm']) !!}/{!! Form::text('start_year', $education->start_year, ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_sy']) !!}-<label for="start_month">
                Finish
            </label>
            {!! Form::select('finish_month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
),$education->finish_month, ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_fm']) !!}/{!! Form::text('finish_year', $education->finish_year, ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_fy']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('branch', $education->branch, ['placeholder' => 'Branch','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('degree', $education->degree, ['placeholder' => 'Degree','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('grade', $education->grade, ['placeholder' => 'Grade','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('experience', $education->experience, ['rows'=>'4','placeholder' => 'Experience','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', $education->description, ['rows'=>'4','placeholder' => 'Description','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'general_button ','id' => 'ok']) !!}
        </div>
        {!! Form::close() !!}
    @endforeach
</div>