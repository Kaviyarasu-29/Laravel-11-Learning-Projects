<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>

<body>
    <h3>Create New User Form</h3><br>
    <form action="store" method="POST">
        <label for="">Name</label> <input type="text" name="name"><br>
        <label for="">Age</label> <input type="text" name="age"><br>
        <label for="">Phone</label> <input type="text" name="phone"><br>
        <input type="submit" value="Create User">
        @csrf
    </form>
</body>

</html>
