<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student Data</title>
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
                        <form action="/doctordata/{{$data_student->id}}/update" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="FirstName" class="form-label">First Name</label>
                                <input name="FirstName" class="form-control" id="FirstName" placeholder="Wan Aida" value="{{$data_student->FirstName}}">
                            </div>


                            <div class="mb-3">
                                <label for="SecondName" class="form-label">Second Name</label>
                                <input name="SecondName" class="form-control" id="SecondName"
                                    placeholder="Wan Mohd Zaini" value="{{$data_student->SecondName}}">
                            </div>

                            <div class="mb-3">
                                <select name="Gender" class="form-select" aria-label="Default select example">
                                    <option selected>Choose Gender</option>
                                    <option value="M" @if ($data_student->Gender=='M') selected @endif>M</option>
                                    <option value="F" @if ($data_student->Gender=='F') selected @endif>F</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="Address" class="form-label">Address</label>
                                <textarea class="form-control" name="Address" id="Address" rows="2">{{$data_student->Address}}</textarea>
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
