<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Booking Appointment</title>
    <style>
        .form-size {
            width: 50%; /* Adjust the width as needed */
            margin: auto; /* This centers the form horizontally */
            margin-top: 20px; /* Adjust top margin as needed */
            margin-bottom: 20px; /* Adjust bottom margin as needed */
            padding: 20px; /* Add padding for better visual appearance */
        }
    </style>
</head>
<body>
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
                    <input name="faculty" class="form-control" id="faculty">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
