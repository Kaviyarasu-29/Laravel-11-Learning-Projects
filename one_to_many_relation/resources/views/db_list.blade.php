<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stored data</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            background-color: #fff;

        }

        table thead th {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            padding: 12px 15px;
            text-align: center;

        }

        table tbody td {
            padding: 12px 15px;
            border-bottom: 1px solid #dddddd;
            text-align: center;
        }

        table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #009879;
            text-decoration: none;
            border-radius: 5px;
        }

        .button-link:hover {
            background-color: #007a63;
        }
    </style>
</head>

<body>
    <table>
        <thead>

            <th>ID</th>
            <th>Name</th>
            {{-- <th>Age</th> --}}
            <th>Comments</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    {{-- <td>{{ $user->age }}</td> --}}

                    <td>
                        @foreach ($user->comments as $comment)
                            {{ $comment->name }} <br>
                        @endforeach
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <br>

    <a class="button-link" href="/home">Add new data!</a>
</body>


</html>
