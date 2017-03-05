<h1>Abusers</h1>
<div>
    <button id="generate-data">Generate data</button>
</div>

{!! Form::open(['id' => 'generateReportForm', 'method' => 'POST', 'enctype' => 'application/json', 'route' => 'report.generate']) !!}
{!! Form::selectMonth('month') !!}
{!! Form::submit('Generate report', ['id' => 'submit']) !!}
{!! Form::close() !!}

