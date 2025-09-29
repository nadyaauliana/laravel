<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-6 sm:p-10">
        {{-- Heading --}}
        <h1 class="text-4xl font-extrabold text-gray-900 mb-10 border-b-4 border-blue-600 inline-block pb-2">
            Blog
        </h1>

        {{-- Grid untuk blog list --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @foreach($blogs as $blog)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                
                {{-- Gambar --}}
                <div class="overflow-hidden">
                    <img src="{{ asset('storage/'.$blog->image) }}" 
                         alt="{{ $blog->title }}" 
                         class="w-full h-56 object-cover transform hover:scale-105 transition duration-500" />
                </div>

                {{-- Konten --}}
                <div class="p-6 flex flex-col justify-between h-full">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">
                            {{ $blog->title }}
                        </h2>

                        <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                            {{ $blog->description }}
                        </p>

                        <a href="{{ route('blogs.show', $blog->id) }}" 
                           class="inline-block px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
                            Detail
                        </a>
                    </div>

                    {{-- Footer info --}}
                    <div class="flex justify-between items-center text-gray-400 text-xs mt-6">
                        <span class="italic"> {{ $blog->author ?? 'Admin' }}</span>
                        <span>{{ $blog->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
