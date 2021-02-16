<table>
    <thead>
        <tr>
            <th>RegistrationNo</th>
            <th>RollNo</th>
            <th>StudentName</th>
            <th>ParentName</th>
            <th>Dob</th>
            <th>ContactNo</th>
            <th>Class</th>
            <th>Section</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($student as $stu)
            <tr>
                <td>{{ $stu->registration_no }}</td>
                <td>{{ $stu->roll_no }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->parentname }}</td>
                
                <td>{{ $stu->dob }}</td>
                <td>{{ $stu->contact_no }}</td>
                <td>{{ $stu->class }}</td>
                <td>{{ $stu->section }}</td>
            </tr>
        @endforeach
    </tbody>
</table>