<h1>Companies</h1>
<button id="add-company">Add a company</button>
@if ($companies->count() > 0)
<table class="table table-striped" id="companies">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quota</th>
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
            <tr id="company-{{ $company->company_id }}">
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->company_quota }}</td>
                <td>
                    <button id="edit-company" value="{{ $company->company_id }}">Edit company</button>
                    <button id="delete-company" value="{{ $company->company_id }}">Delete company</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>
    No companies exist
</p>
@endif
