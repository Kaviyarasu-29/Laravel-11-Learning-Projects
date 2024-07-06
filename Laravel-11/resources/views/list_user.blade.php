<style>
    table,
    th,
    td {

        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        width: 7rem;
        text-align: center;
    }
</style>

<h3>User List</h3><br>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="/home">Create user!</a>
