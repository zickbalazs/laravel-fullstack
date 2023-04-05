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
    @if (isset($data->id))
        <form action="/api/delete/{{ $data->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="mb-3">
                <label class="form-label">ID:</label>
                <input class="form-control" type="number" disabled value="{{ $data->id }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Day:</label>
                <input class="form-control" type="date" value="{{ $data->day }}">
            </div>
            <div class="mb-3">
                <label class="form-label">From:</label>
                <input class="form-control" type="time" value="{{ $data->from }}">
            </div>
            <div class="mb-3">
                <label class="form-label">To:</label>
                <input class="form-control" type="time" value="{{ $data->to }}">
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="{{$data->done}}">
                <label class="form-check-label">Default checkbox</label>
            </div>
            <label class="form-label">Are you sure to delete this?</label>
            <div class="d-block">
                <input type="submit" class="btn btn-danger" value="Yes">
                <a href="/" class="btn btn-success">No</a>
            </div>
        </form>
    @else
    @endif
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>
