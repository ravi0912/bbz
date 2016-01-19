<div class="panel-body">
    @foreach($profiles as $profile)
        {!! Form::open(['action' => 'ProfileController@profileUpdate']) !!}
        <div class="form-group">
            {!! Form::text('current_designation', $profile->current_designation , ['placeholder' => 'Current Designation','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('current_company', $profile->current_company, ['placeholder' => 'Current Company','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('current_city', $profile->current_city, ['placeholder' => 'Current City','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('current_state', $profile->current_state, ['placeholder' => 'School/University Name','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
        </div>
        <div class="form-group">
            <label for="start_month">
                Start
            </label>
            {!! Form::select('date', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31',
),$profile->date, ['placeholder' => 'DD','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_sm']) !!}/
            {!! Form::select('month', array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
),$profile->month, ['placeholder' => 'MM','class' => ' profile_3_form_content_sm','id' => 'profile_3_form_content_fm']) !!}
            {!! Form::text('year', $profile->year, ['placeholder' => 'YYYY','class' => ' profile_3_form_content_sy','id' => 'ok profile_3_form_content_fy']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'general_button ','id' => 'ok']) !!}
        </div>
        {!! Form::close() !!}
    @endforeach
</div>