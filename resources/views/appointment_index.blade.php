<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment List</title>
</head>
<style>

body {
    background: url('assets/clinichomepage.jpg');
    padding-top: 60px;
}

       .table-container {
            margin-left: 20px; /* Adjust as needed */
            margin-right: 20px; /* Adjust as needed */
        }
</style>
<body>
  <section>
    <div>
        <a href="{{ route('appointment.createForm') }}" class="btn btn-primary">Book Appointment</a>

    </div>

    <div class="table-container">
        <table class="table mx-auto mx-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">faculty</th>
                <th scope="col">date</th>
                <th scope="col">phone Number</th>
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
                        <!-- Add action buttons if needed -->
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
