<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary form</title>


    <style>
        * {
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-weight: 700;
        }

        .form-container {
            max-width: 600px;
            min-width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container h3 {
            margin-top: 0;
            text-align: center;
        }

        .form-container form {
            display: grid;
            gap: 10px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 16px);
        }

        .form-container input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0c3c0e;
        }
    </style>


</head>

<body>
    <div class="form-container">

        <form action="store_salary" method="post">

            <label for="">Salary</label> <input type="text" name="salary"><br>
            <input type="hidden" name="user_id" value="{{ session('user_id') }}">
            <input type="submit" value="Create User">
            @csrf

        </form>
    </div>
    

</body>

</html>
