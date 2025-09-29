<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,150..800;1,150..800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/style/style.css" />
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
    .font-script { font-family: 'Great Vibes', cursive; }
    .font-body { font-family: 'Quicksand', sans-serif; }
  </style>
		<title>LABERSA RIAU FANTASI</title>
	</head>
	<body class="font-body bg-white-50">
      <!-- Navbar -->
      <nav class="fixed top-0 z-50 bg-[white] w-full h-[80px] flex items-center shadow-md">
          <div class="max-w-6xl mx-auto text-center w-full flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center h-full">
              <img class="h-15" src="image/logolabersa.png" alt="Logo labersa">
            </div>
            <!-- Menu -->
            <ul class="flex space-x-6 items-center">
              <li><a href="#" class="text-yellow-600">Beranda</a></li>
              <li><a href="#" class="text-yellow-600">Tentang</a></li>
              <li><a href="#" class="text-yellow-600">Kontak</a></li>
              <li><button class="bg-yellow-600 text-white px-3 py-1 rounded-lg cursor-pointer">Login</button></li>
              <li><button class="bg-yellow-600 text-black px-3 py-1 rounded-lg cursor-pointer">ID</button></li>
              <li><button class="bg-yellow-600 text-black px-3 py-1 rounded-lg cursor-pointer">EN</button></li>
          </div>
      </nav>

       <section id="hero_section" class="m-auto">
      <div class="relative">
        <!-- Teks di tengah -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center space-y-5">
          <h1 class="montserrat text-4xl text-white font-Pica font-bold">
            KONTAK KAMI
          </h1>
        </div>
    
    
        <!-- Gambar background -->
        <img src="image/image 21.png" alt="bg-labersa" class="object-cover object-center w-full h-200">
      </div>
    </section>

    <!-- Content Section -->
    <section class="p-8 bg-gray-50">
        <div class="max-w-6xl mx-auto ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Information Section -->
                <div class="bg-green-100 p-8 rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">INFORMASI KAMI</h2>
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class=" p-2 rounded-full">
                                <i class="ph ph-map-pin text-black text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-700 leading-relaxed">Jl. Labersa, Simpang Tiga, Kec. Siak Hulu, Kabupaten Kampar, Riau 28284</p>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="p-2 rounded-full">
                                <i class="ph ph-phone text-black text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-700">+62 898-2675-0077</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="p-2 rounded-full">
                                <i class="ph ph-envelope-simple text-black text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-700">labersariaufantasi@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-8">
                        <a href="#" class="bg-green-700 p-3 rounded-full text-white hover:bg-green-700 transition-colors">
                            <i class="ph ph-facebook-logo text-lg"></i>
                        </a>
                        <a href="#" class=" bg-green-700 p-3 rounded-full text-white hover:bg-green-700 transition-colors">
                            <i class="ph ph-instagram-logo text-lg"></i>
                        </a>
                        <a href="#" class="bg-green-700 p-3 rounded-full text-white hover:bg-green-700 transition-colors">
                            <i class="ph ph-tiktok-logo text-lg"></i>
                        </a>
                        <a href="#" class="bg-green-700 p-3 rounded-full text-white hover:bg-green-700 transition-colors">
                            <i class="ph ph-whatsapp-logo text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Contact Form Section -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">KIRIM PESAN</h2>
                    
                    <form class="space-y-6">
                        <div>
                            <input 
                                type="text" 
                                placeholder="Nama Lengkap" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-gray-100 text-gray-700 placeholder-gray-500"
                            >
                        </div>
                        
                        <div>
                            <input 
                                type="tel" 
                                placeholder="Nomor Telepon/Email" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-gray-100 text-gray-700 placeholder-gray-500"
                            >
                        </div>
                        
                        <div>
                            <textarea 
                                placeholder="Pesan Anda" 
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-gray-100 text-gray-700 placeholder-gray-500 resize-none"
                            ></textarea>
                        </div>
                        
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-green-200 text-green-800 py-3 px-6 rounded-lg font-medium hover:bg-green-300 transition-colors"
                            >
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    
</body>
</html>