<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../../public/CSS/Student.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body style="background-color:rgba(187, 207, 255, 0.762);">
    <header class="header bg-dark p-2">
        <h1 class="header-heading text-light"
            style="background: -webkit-linear-gradient(#5fd2f8, #feffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">
            Laravel Project
        </h1>
    </header>

    <!-- Main Content -->
    <section class="main mt-5 col-12 row">
        <!-- registration -->
        <div class="registration col-6">
            <h3 class="mb-4 font-italic font-weight-bolder">Registration Form</h3>
            @if (session('Message'))
                <div class="alert alert-success">
                    {{ session('Message') }}
                </div>
            @endif
            <form action="/add-student" method="post">
                <div class="form-group">
                    <label for="name" class="form-label text-monospace">Name:</label>
                    <input type="Name" class="form-control" name="name" required placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label text-monospace">Email address:</label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label text-monospace">Address:</label>
                    <textarea class="form-control" name="address" rows="3" placeholder="Enter yor Address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="gender" class="form-label text-monospace">Gender:</label>
                    <select class="form-control" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="department" class="form-label text-monospace">Department:</label>
                    <input type="text" class="form-control" name="department" placeholder="Enter your Department"
                        required>
                </div>

                <div class="form-group">
                    <label for="joined_date" class="form-label text-monospace">Joined Date:</label>
                    <input type="date" class="form-control" name="joined_date" required>
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
                @csrf
            </form>
        </div>

        <!-- Registered student -->
        <div class="reg-student col-6">
            <h3 class="mb-5 font-italic font-weight-bolder">Registered Students</h3>
            @if ($students->isNotEmpty())
                <ul class="list-group">
                    @foreach ($students as $student)
                        {{-- <li class="list-group-item">{{ $student->name }} - {{ $student->email }} -
                        {{ $student->joined_date }} </li> --}}
                        <li class="list-group-item">
                            <div class="row list-display" style="align-items: center; justify-content:space-around">
                                <div class="col-3 list-details" style="text-align: center">{{ $student->name }}</div>
                                <div class="col-5 list-details" style="text-align: center">{{ $student->email }}</div>
                                <div class="col-3 list-details" style="text-align: center">{{ $student->joined_date }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-danger d-flex justify-content-center align-items-center">
                    <p class="mb-0 ">No student data</p>
                </div>
            @endif
        </div>
        {{-- <div class="row">
            <div class="col-12">
                <div class="col-4">{{ $student->name }}</div>
                <div class="col-4">{{ $student->email }}</div>
                <div class="col-4">{{ $student->joined_date }}</div>
            </div>
        </div> --}}
    </section>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
