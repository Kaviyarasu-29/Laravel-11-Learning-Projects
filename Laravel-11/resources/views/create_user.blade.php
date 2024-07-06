<h3>Create User Form</h3><br>
<form action="store" method="POST">
    <label for="">Name</label> <input type="text" name="name"><br>
    <label for="">Age</label> <input type="text" name="age"><br>
    <label for="">Phone</label> <input type="text" name="phone"><br>
    <input type="submit" value="Create User">
    @csrf
</form>
