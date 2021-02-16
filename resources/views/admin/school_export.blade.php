<table border="1">

    <thead>
    <tr>
        <th >#</th>
        <th >Students</th>
        <th >School Name</th>
        <th >Created At</th>
        <th >Username</th>
        <th >Password</th>
        <th >Contact No</th>
        <th >Email</th>
        <th >Address</th>
        <th >City</th>
        <th >Image</th>

    </tr>
    </thead>
    <tbody>
    @foreach($schools as $key => $school)
        <tr>
            <td >{{ $key + 1 }}</td>
            <td >{{$school->students}}</td>
            <td >{{ $school->school_name }}</td>
            <?php $created_at = date('d-m-Y', strtotime($school->created_at));?>
            <td >{{ $created_at }}</td>
            <td >{{ $school->username }}</td>
            <td> {{ $school->hint_password }}</td>
            <td >{{ $school->mobile }}</td>
            <td >{{ $school->email }}</td>
            <td >{{ $school->address }}</td>
            <td >{{ $school->city }}</td>
            <td >{{ $school->image}}</td>

        </tr>
    @endforeach
    </tbody>
</table>