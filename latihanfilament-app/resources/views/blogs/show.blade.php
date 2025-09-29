<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $blog->title }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="max-w-4xl mx-auto py-10 px-5">
    <div class="bg-white p-8 rounded-2xl shadow-lg">
      
      <!-- Judul -->
      <h1 class="text-4xl font-extrabold text-gray-900 mb-4 border-b-4 border-blue-600 inline-block pb-2">
        {{ $blog->title }}
      </h1>
      
      <!-- Author + tanggal -->
      <div class="flex flex-col sm:flex-row justify-between text-sm text-gray-500 mb-6">
        <span class="flex items-center gap-2">
          ✍️ <span>{{ $blog->author ?? 'Admin' }}</span>
        </span>
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-6">
          <span> Created: {{ $blog->created_at->format('d M Y') }}</span>
          <span> Updated: {{ $blog->updated_at->format('d M Y') }}</span>
        </div>
      </div>

      <!-- Gambar -->
      <div class="mb-6 overflow-hidden rounded-lg">
        <img src="{{ asset('storage/'. $blog->image) }}" 
             alt="{{ $blog->title }}" 
             class="w-full rounded-lg shadow-md transform hover:scale-105 transition duration-500">
      </div>

      <!-- Deskripsi -->
      <p class="text-gray-700 leading-relaxed text-lg">
        {{ $blog->description }}
      </p>

      <!-- Tombol kembali -->
      <div class="mt-10">
        <a href="{{ route('blogs.index') }}" 
           class="inline-block px-5 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
           ← Kembali ke Daftar Blog
        </a>
      </div>
    </div>
  </div>

</body>
</html>
