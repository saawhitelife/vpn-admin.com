<div class="form-container">
    {!! Form::model($company, ['method' => 'PUT', 'action' => ['CompanyController@update', $company->company_id]]) !!}
    <div>
        {!! Form::label('company_name', 'Company name') !!}
        {!! Form::text('company_name', $value = $company->company_name) !!}

        {!! Form::label('company_quota', 'Company quota') !!}
        {!! Form::text('company_quota', $value = $company->company_quota) !!}
    </div>
    <div>
        {!! Form::submit('Save changes') !!}
    </div>
    {!! Form::close() !!}
</div>