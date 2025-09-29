<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
</head>
<body>
    <h1>Create Blog</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label>Category:</label>
            <input type="text" name="category" value="{{ old('category') }}">
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

         <div>
            <label>Total View:</label>
            <input type="text" name="total_view" value="{{ old('total_view') }}">
        </div>
        

        <button type="submit">Save Blog</button>
    </form>
</body>
</html> 