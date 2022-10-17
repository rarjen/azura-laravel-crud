<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Project CRUD</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('project.create') }}"> Create Project</a>
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
                    <th>Project Id</th>
                    <th>Project Years</th>
                    <th>Project Role</th>
                    <th>Project</th>
                    <th>Project Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                ?>
                @foreach ($project as $data)
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->years }}</td>
                    <td>{{ $data->role }}</td>
                    <td>{{ $data->project }}</td>
                    <td>{{ $data->description }}</td>
                    <td>
                        <form action="{{ route('project.destroy',$data->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('project.edit',$data->id) }}">Edit</a>
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
        {!! $project->links() !!}
    </div>
</body>

</html>