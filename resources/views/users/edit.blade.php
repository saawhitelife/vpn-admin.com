<div class="form-container">
    {!! Form::model($user, ['method' => 'PUT', 'action' => ['UserController@update', $user->user_id]]) !!}
    <div>
        {!! Form::label('user_name', 'User name') !!}
        {!! Form::text('user_name', $value = $user->user_name) !!}

        {!! Form::label('user_email', 'User email') !!}
        {!! Form::text('user_email', $value = $user->user_email) !!}

        {!! Form::label('company_id', 'Company') !!}
        {!! Form::select('company', $companies->pluck('company_name', 'company_id')->all()) !!}
    </div>
    <div>
        {!! Form::submit('Save changes') !!}
    </div>
    {!! Form::close() !!}
</div>