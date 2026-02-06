<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category | Index</title>
    <script src="https://kit.fontawesome.com/ad86009f10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('../css_dashboard/style.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        table th,
        table td {
            padding: 12px 16px;
            border-bottom: 10px solid #ccc;
            text-align: left;
        }

        table th {
            background-color: #bdc3c7;

        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .admin-header h1 {
            font-size: 24px;
            color: #333;
        }

        .admin-header a {
            font-size: 20px;
            color: #27ae60;
            text-decoration: none;
        }

        .admin-header a:hover {
            color: #2ecc71;
        }

        form button {
            background: none;
            border: none;
            color: #e74c3c;
            cursor: pointer;
            font-size: 16px;
        }

        form button:hover {
            color: #c0392b;
        }
    </style>
</head>

<body>
    @include('layoutsss.navbar')
    <div class="wrapper-admin">
        @include('layoutsss.sidebar')
        <div class="admin-content">
            <div class="admin-header">
                <h1>Category Data</h1>
                <a href="{{ route('categories.create') }}"><i class="fa-solid fa-plus"></i></a>
            </div>

            <table border="1">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    @forelse($category as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name}}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $data->id) }}" method="post">
                                @csrf
                                <a href="{{ route('categories.edit', $data->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr colspan='3'>Data Not Found.</tr>
                    @endforelse
                </tbody>
            </table>


        </div>
    </div>
</body>

</html>