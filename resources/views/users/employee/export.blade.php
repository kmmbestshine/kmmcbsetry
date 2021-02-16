<table>
    <thead>
        <tr>
            <th>Staff Type</th>
            <th>Class</th>
            <th>Section</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($emps as $employee)
            <tr>
                <td>{{ $employee->staff_type }}</td>
                <td>{{ $employee->class }}</td>
                <td>{{ $employee->section }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->username }}</td>
                <td>{{ $employee->hint_password }}</td>
                <td>{{ $employee->mobile }}</td>
                <td>{{ $employee->email }}</td>
                <td><img src="{{{ $employee->avatar }}}" height="85%" width="85%"></td>
            </tr>
        @endforeach
    </tbody>
</table>