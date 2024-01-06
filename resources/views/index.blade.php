<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Data</title>
    <style>
        body {
            background: url('assets/clinichomepage.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .row .col-6 .custom-heading {
    background: none;
    margin-bottom: 0;
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ClinicCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/appointment/create') }}">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/doctordata') }}">Doctors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <div class="container">
        {{-- alert message --}}
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <section>
            <div class="table">
                <div class="row">
                    <div class="col-6">
                        <h1 class="custom-heading">List Of Doctors</h1>
                    </div>
                    <div class="col-6 text-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Doctor
                        </button>
                    </div>
                </div>


                <!-- Modal -->
            </div>
            {{-- endmodal --}}

            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Operation</th>
                </tr>
                @foreach ($doctor_data as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->department }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->phone_number }}</td>
                        <td>
                            <a href="doctordata/{{ $doctor->id }}/edit" class="btn btn-success"
                                style="margin-right: 5px;">Edit</a>
                            <a href="doctordata/{{ $doctor->id }}/delete" class="btn btn-danger"
                                onclick="return confirm('Are You Sure')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>

    </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Insert doctor Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    {{-- Form --}}
                    <form action="/doctordata/create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" class="form-control" id="name" placeholder="Wan Aida">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input name="department" class="form-control" id="department" placeholder=" General Health">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" class="form-control" id="email" placeholder="user@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input name="phone_number" class="form-control" id="phone_number" placeholder="017 9806166">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Information</button>
                    </form>



                    {{-- End form --}}
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>


        </section>

</body>

</html>
