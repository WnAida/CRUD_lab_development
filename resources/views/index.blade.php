<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">


                <h1>Student Data extract from database</h1>
            </div>
            {{-- modal --}}
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Student
                </button>

                <!-- Modal -->
            </div>


            {{-- endmodal --}}

            <table>
                <tr>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
                @foreach ($data_student as $student)
                    <tr>
                        <td>{{ $student->FirstName }}</td>
                        <td>{{ $student->SecondName }}</td>
                        <td>{{ $student->Gender }}</td>
                        <td>{{ $student->Address }}</td>
                    </tr>
                @endforeach
            </table>

        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Student Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Form --}}
                    <form action="/studentdata/create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="FirstName" class="form-label">First Name</label>
                            <input name="FirstName" class="form-control" id="FirstName" placeholder="Wan Aida">
                        </div>


                        <div class="mb-3">
                            <label for="SecondName" class="form-label">Second Name</label>
                            <input name="SecondName" class="form-control" id="SecondName" placeholder="Wan Mohd Zaini">
                        </div>

                        <div class="mb-3">
                            <select name="Gender" class="form-select" aria-label="Default select example">
                                <option selected>Choose Gender</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <textarea class="form-control" name="Address" id="Address" rows="2"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
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
</body>

</html>
