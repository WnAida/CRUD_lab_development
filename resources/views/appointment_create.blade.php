<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Booking Appointment</title>
    <style>

    </style>
</head>
<body>
<section>
    <div>
        <form action="/doctordata/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" class="form-control" id="name" placeholder="Wan Aida">
            </div>


            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input name="department" class="form-control" id="department" placeholder="Wan Mohd Zaini">
            </div>
            {{--
            <div class="mb-3">
                <select name="Gender" class="form-select" aria-label="Default select example">
                    <option selected>Choose Gender</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div> --}}

            <div class="mb-3">
                <label for="phone_number" class="form-label">email</label>
                <textarea class="form-control" name="email" id="email" rows="2"></textarea>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">phone number</label>
                <textarea class="form-control" name="phone_number" id="phone_number" rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>


    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
