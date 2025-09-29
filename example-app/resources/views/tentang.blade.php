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
          <div class="max-w-6xl mx-auto  text-center w-full flex justify-between items-center ">
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
            TENTANG KAMI
          </h1>
        </div>
    
    
        <!-- Gambar background -->
        <img src="image/image 20.png" alt="bg-labersa" class="object-cover object-center w-full h-200">
      </div>
    </section>

    <!-- Content Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto ">
            
            <!-- About Section with Icons -->
            <div class="flex flex-col lg:flex-row items-start gap-8 mb-16">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">TENTANG LABERSA RIAU FANTASI</h2>
                    <p class="text-gray-700 leading-relaxed text-justify">
                      Labersa Riau Fantasi adalah destinasi rekreasi terpadu terbesar di Pekanbaru, Riau, yang menghadirkan petualangan seru untuk seluruh keluarga melalui dua zona utama kami: Water Park dengan beragam seluncuran dan kolam, serta Theme Park yang penuh wahana menantang, semuanya dengan komitmen untuk memberikan pengalaman liburan yang aman dan penuh kegembiraan.
                </div>
                
                <!-- Side Icons -->
                <div class="flex lg:flex-col flex-row gap-4 lg:ml-8">
                    <div class="bg-green-600 p-4 rounded-full">
                        <i class="ph ph-island text-white text-2xl"></i>
                    </div>
                    <div class="bg-green-600 p-4 rounded-full">
                        <i class="ph ph-users-four text-white text-2xl"></i>
                    </div>
                    <div class="bg-green-600 p-4 rounded-full">
                        <i class="ph ph-cable-car text-white text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Vision and Mission Section -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">VISI DAN MISI LABERSA RIAU FANTASI</h2>
                <p class="text-gray-700 leading-relaxed text-justify">
                    Visi kami adalah menjadi destinasi rekreasi keluarga terkemuka dan terlengkap di Sumatera, Misi yang kami wujudkan dengan menyediakan beragam wahana dan fasilitas rekreasi air serta darat yang inovatif, aman, dan berkualitas tinggi, sambil menciptakan lingkungan yang ramah dengan pelayanan prima dan berkontribusi pada kemajuan pariwisata daerah.
                </p>
            </div>

            <!-- Ticket and Facilities Section -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">TIKET MASUK DAN FASILITAS LABERSA RIAU FANTASI</h2>
                <p class="text-gray-700 leading-relaxed text-justify">
                    Untuk menikmati semua wahana dan keseruan di Labersa Riau Fantasi, Anda bisa membeli tiket masuk dengan harga yang sangat terjangkau. Tiket untuk weekday  seharga Rp 35.000, sementara pada hari libur (weekend) harganya menjadi Rp 50.000. Anda bisa menikmati beragam fasilitas di dua zona utama yaitu Water Park yang penuh dengan seluncuran dan kolam, serta Theme Park yang menyediakan berbagai wahana seru. Tersedia juga fasilitas pendukung seperti area parkir yang luas, food court, serta toilet dan mushola yang bersih.
                </p>
            </div>

            <!-- Gallery Section -->
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">GALERI KAMI</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- Gallery Image 1 - Placeholder -->
                    <div class="bg-cover bg-center h-64 rounded-lg">
                        <div class="relative">
                            <img src="image/image 12.png" alt="kora" 
                                class="w-200 h-85 object-cover shadow">
                        </div>
                    </div>
                    
                    <!-- Gallery Image 2 - Roller Coaster -->
                    <div class="bg-cover bg-center h-64 rounded-lg">
                        <div class="relative">
                            <img src="image/image 19.jpeg" alt="kolam" 
                                class="w-200 h-85 object-cover shadow">
                        </div>
                    </div>
                    
                    <!-- Gallery Image 3 - Water Park -->
                   <div class="bg-cover bg-center h-64 rounded-lg">
                        <div class="relative">
                            <img src="image/image 18.jpeg" alt="kolamrenang" 
                                class="w-200 h-85 object-cover shadow">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
</body>
</html>