<div class="form-conainter">
    {!! Form::open(['action' => 'CompanyController@store']) !!}
    <div>
    {!! Form::label('company_name', 'Company name') !!}
    {!! Form::text('company_name') !!}
    {!! Form::label('company_quota', 'Company quota') !!}
    {!! Form::text('company_quota') !!}
    </div>
    {!! Form::submit('Create company') !!}
    {!! Form::close() !!}
</div>