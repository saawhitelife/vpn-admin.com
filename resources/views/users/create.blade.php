<div class="form-conainter">
    {!! Form::open(['action' => 'UserController@store']) !!}
    <div>
        {!! Form::label('user_name', 'User name') !!}
        {!! Form::text('user_name') !!}
        {!! Form::label('user_email', 'User email') !!}
        {!! Form::text('user_email') !!}
        {!! Form::label('company_id', 'Company') !!}
        {!! Form::select('company', $companies->pluck('company_name', 'company_id')->all()) !!}
    </div>
    <div>
        {!! Form::submit('Create user') !!}
        {!! Form::close() !!}
    </div>
</div>