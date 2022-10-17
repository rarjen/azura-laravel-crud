<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Education CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Education CRUD</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('education.create') }}"> Create Education</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Education Id</th>
                    <th>Education Years</th>
                    <th>Educational</th>
                    <th>Education Institution</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                ?>
                @foreach ($education as $data)
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->years }}</td>
                    <td>{{ $data->educational }}</td>
                    <td>{{ $data->institution }}</td>
                    <td>
                        <form action="{{ route('education.destroy',$data->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('education.edit',$data->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                $index++;
                ?>
                @endforeach
            </tbody>
        </table>
        {!! $education->links() !!}
    </div>
</body>

</html>