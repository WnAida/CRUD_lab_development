<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Booking Appointment</title>
    <style>
        body {
            background: url('/assets/clinichomepage.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .form-size {
            width: 50%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for form */
            border-radius: 10px; /* Add rounded corners */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ClinicCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="form-size">
            <form action="{{ route('appointment.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" class="form-control" id="name" placeholder="Wan Aida">
                </div>

                <div class="mb-3">
                    <label for="faculty" class="form-label">Faculty</label>
                    <select name="faculty" class="form-control" id="faculty">
                        <option value="">Select Faculty</option>
                        <option value="Computing">Faculty of Computing</option>
                        <option value="Chemical">Faculty of Chemical and Process Engineering Technology</option>
                        <option value="Industrial">Faculty of Industrial Sciences and Technology</option>
                        <option value="Management">Faculty of Industrial Management</option>
                        <option value="Civil">Faculty of Civil Engineering Technology</option>
                        <option value="Mechanical">Faculty of Mechanical and Automotive Engineering Technology</option>
                        <option value="Electrical">Faculty of Electrical and Electronics Engineering Technology</option>
                        <option value="Manufacturing">Faculty of Manufacturing and Mechatronic Engineering Technology</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number">
                </div>

                <div class="mb-3">
                    <label for="reason" class="form-label">Reason</label>
                    <textarea class="form-control" name="reason" id="reason" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Book Appointment</button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
