<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('../css_dashboard/style.css')}}">
</head>

<body>
    @include('layoutsss.navbar')
    <div class="wrapper-admin">
        @include('layoutsss.sidebar')
        <div class="admin-content">
            <div class="admin-header">
                <h1>Edit Category</h1>
                <p><a href="{{route('categories.index')}}" style="text-decoration: none;">Categories</a> / Edit</p>
            </div>

            <div class="form-create">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group-admin">
                        <label for="name">Name : </label>
                        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}">
                    </div>
            
                    <div class="button-group-admin">
                        <button type="submit">Save</button>
                        <a href="{{ route('categories.index') }}">Cancel</a>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
</body>

</html>