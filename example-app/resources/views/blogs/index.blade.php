<!DOCTYPE html>
<html>
<head>
    <title>Blog List</title>
</head>
<body>
    <h1>Blog List</h1>
    <a href="/blogs/create">Create</a>

    <ul>
        <?php for ($i = 0; $i < count($blogs); $i++) { ?>
            <li>
                <h2>{{ $blogs[$i]['title'] }}</h2>
                <p><strong>Category:</strong> {{ $blogs[$i]['category'] }}</p>
                <p>{{ $blogs[$i]['description'] }}</p>
                <a href="/blogs/{{$blogs[$i]['id']}}/edit">Edit</a>

                <form action="{{ route('blogs.destroy', $blogs[$i]['id']) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="display: inline-block" onclick="return confirm('Are you sure you want to delete this blog?');">
                Delete
            </button>
        </form>
            </li>
        <?php } ?>
    </ul>
</body>
</html>