<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Edzésapp</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>#.</th>
                <th>Nap</th>
                <th>Leírás</th>
                <th>Ettől</th>
                <th>Eddig</th>
                <th>Kész</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $training)
                <tr>
                    <td>{{ $training->id }}</td>
                    <td>{{ $training->day }}</td>
                    <td>{{ $training->description }}</td>
                    <td>{{ $training->from }}</td>
                    <td>{{ $training->to }}</td>
                    <td>{{ $training->done }}</td>
                    <td>
                        <a class="btn btn-warning" href="/mod/{{ $training->id }}"><i class="bi bi-wrench"></i></a>
                        <a class="btn btn-danger" href="/delete/{{ $training->id }}"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success"><i
            class="bi bi-plus"></i></button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/api/new-training" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="day" class="form-label">Day</label>
                            <input type="date" class="form-control" name="day" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="" class="form-control" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="from" class="form-label">From:</label>
                            <input type="time" class="form-control" name="from" required>
                        </div>
                        <div class="mb-3">
                            <label for="to" class="form-label">To:</label>
                            <input type="time" class="form-control" name="to" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="done">
                            <label class="form-check-label" for="done">Done?</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>
