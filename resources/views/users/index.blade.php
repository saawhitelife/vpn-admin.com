<h1>Users</h1>
<button id="add-user">Add a user</button>
@if ($users->count() > 0)
<table id="users" class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr id="user-{{ $user->user_id }}">
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->company->company_name }}</td>
                <td>
                    <button id="edit-user" value="{{ $user->user_id }}">Edit user</button>
                    <button id="delete-user" value="{{ $user->user_id }}">Delete user</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>
    No users exist
</p>
@endif
