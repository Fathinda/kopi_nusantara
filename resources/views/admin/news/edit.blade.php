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
                <h1>Create News</h1>
                <p><a href="{{route('news.index')}}" style="text-decoration: none;">News</a> / Create</p>
            </div>

            <div class="form-create">
                <form action="{{ route('news.update', $news->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group-admin">
                        <label for="title">Title : </label>
                        <input type="text" name="title" id="title" value="{{ $news->title }}">
                    </div>

                    <div class="form-group-admin">
                        <label for="description">Description : </label>
                        <textarea name="description" id="description" cols="30" rows="10">{{ $news->description }}</textarea>
                    </div>

                    <div class="form-group-admin">
                        <label for="user_id">Author : </label>
                        <select name="user_id" id="user_id">
                            @foreach($users as $data)
                                <option value="{{ $data->id }}" {{ $news->user_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group-admin">
                        <label for="category_id">Category : </label>
                        <select name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $news->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="button-group-admin">
                        <button type="submit">Save</button>
                        <a href="{{ route('news.index') }}">Cancel</a>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
</body>

</html>