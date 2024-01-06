<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment List</title>
    <style>
        body {
            background: url('assets/clinichomepage.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .table-container {
            padding-left: 100px;
            padding-right: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        .custom-heading {
            padding-left: 100px;
            padding-right: 100px;
            background: none;
            margin-bottom: 0;
            color: black;
            /* Adjust text color based on your background */
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
    <section>
        <br>
        <div class="row">
            <div class="col-6">
                <h1 class="custom-heading">Appointment List</h1>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('appointment.createForm') }}" class="btn btn-primary"
                    style="margin-right: 200px;">Book Appointment</a>
            </div>

        </div>
        <br>

        <div class="table-container">
            <table class="table mx-auto mx-3 text-white">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Faculty</th>
                        <th scope="col">Date</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointment_data as $appointment)
                        <tr>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->faculty }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->phone_number }}</td>
                            <td>{{ $appointment->reason }}</td>
                            <td>
                                <a href="{{ route('appointment.edit', ['id' => $appointment->id]) }}"
                                    class="btn btn-success" style="margin-right: 5px;">Edit</a>
                                <a href="{{ route('appointment.delete', ['id' => $appointment->id]) }}"
                                    class="btn btn-danger" onclick="return confirm('Are You Sure')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
