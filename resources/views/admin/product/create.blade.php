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
                <h1>Create Product</h1>
                <p><a href="{{route('products.index')}}" style="text-decoration: none;">Products</a> / Create</p>
            </div>

            <div class="form-create">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group-admin">
                        <label for="name">Name : </label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="form-group-admin">
                        <label for="images">Images : </label><br>
                        <input type="file" name="images" id="images" accept="image/*">
                    </div>

                    <br>

                    <div class="form-group-admin">
                        <label for="category_id">Category : </label>
                        <select name="category_id" id="category_id">
                            @foreach($category as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group-admin">
                        <label for="description">Description : </label>
                        <textarea name="description" id="description" rows="4"></textarea>
                    </div>

                    
                    <div class="button-group-admin">
                        <button type="submit">Save</button>
                        <a href="{{ route('products.index') }}">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>