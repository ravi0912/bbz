{{--
<div class="form-group">
    {!! Form::text('name', '', ['placeholder' => 'Name','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
</div>
<div class="form-group">
    {!! Form::text('specialities', '', ['placeholder' => 'Specialities','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
</div>
<div class="form-group">
    {!! Form::text('headquarter', '', ['placeholder' => 'Headquarter','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', '', ['placeholder' => 'Content','class' => ' profile_3_form_content','id' => 'ok profile_3_form_content']) !!}
</div>
{!! Form::close() !!}--}}

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h6>Modal 1 header</h6>
</div>
<div class="modal-body">
    <div class="modal_form_content">
        {!! Form::open(['action' => 'WorkstationPageController@create','class' => 'horizontal', 'role' => 'form']) !!}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <label for="select1">Category</label>
                    <select id="select1" class="form-control">
                       @foreach($subcategory as $s)
                            <option>{{ $s->page_subcategory }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <label for="select1">Type</label>
                    <select id="select1" class="form-control">
                        @foreach($type as $t)
                            <option>{{ $t->page_type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <hr>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" name="name" placeholder="Page Name " class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" id="specialities" name="specialities" placeholder="Specialities" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" id="headquarter" name="headquarter" placeholder="Headquarter" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <input type="textarea" id="content" name="content" placeholder="Content" class="form-control"/>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Get Started</button>
                </div>
            </div>

        </form>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>