
<h1>Departments</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
@foreach ($departments as $department)
    <tr>
        <td>{{ $department->id }}</td>
        <td>{{ $department->name }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
