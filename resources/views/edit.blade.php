<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Doctor Information</title>
</head>

<body>

    <div class="container">
        {{-- alert message --}}
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif


        <div class="row">
            {{-- <div class="col-6">


                <h1>Student Data from database</h1>
            </div> --}}
            {{-- modal --}}
            <div class="col-6">
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Student
                </button> --}}

                <!-- Modal -->
            </div>
            {{-- endmodal --}}
            <div class="row justify-content-md-center">

                <div class="col-lg-6">
                    <div class="modal-body">
                        {{-- Form --}}
                        <form action="/doctordata/{{$doctor_data->id}}/update" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input name="Name" class="form-control" id="Name" placeholder="Wan Aida" value="{{$doctor_data->name}}">
                            </div>


                            <div class="mb-3">
                                <label for="Department" class="form-label">Department</label>
                                <input name="Department" class="form-control" id="Department"
                                    placeholder="Wan Mohd Zaini" value="{{$doctor_data->department}}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" class="form-control" id="email"
                                    placeholder="user@gmail.com" value="{{$doctor_data->email}}">
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input name="phone_number" class="form-control" id="phone_number"
                                    placeholder="0179856166" value="{{$doctor_data->phone_number}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>
