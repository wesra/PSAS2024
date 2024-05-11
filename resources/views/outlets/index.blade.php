<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Import Export Excel to Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa-solid fa-user"></i> Tugas Mahendra Haris</h3>
        <div class="card-body">
            <a href="{{ route('outlets.create') }}" class="btn"><i class="fa-solid fa-plus">Tambah</i></a>
            <table class="table table-bordered mt-3">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Created_at</th>
                    <th>update_at</th>
                    <th>Action</th>
                </tr>
                @foreach($outlets as $outlet)
                <tr>
                    <td>{{ $outlet->id }}</td>
                    <td>{{ $outlet->code }}</td>
                    <td>{{ $outlet->name }}</td>
                    <td>{{ $outlet->status }}</td>
                    <td>{{ $outlet->address }}</td>
                    <td>{{ $outlet->phone }}</td>
                    <td>{{ $outlet->created_at }}</td>
                    <td>{{ $outlet->updated_at }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('outlets.destroy', $outlet->id) }}" method="POST">
                            <a href="{{ route('outlets.edit', $outlet->id) }}" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn"><i class="fa-solid fa-trash"></i></button>
                        </form>
                </tr>
                @endforeach
            </table>
    
        </div>
    </div>
</div>
       
</body>
<footer>
    <div class="container"
    style="text-align:center; background-color:azure">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by Mahendra Haris Web Programming 11
    </div>
</footer>
</html>