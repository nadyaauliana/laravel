<?php
$caraKerja_post = [
[
    'icon' => 'ph-map-pin-area',
    'title' => 'Lokasi',
    'description' => 'Pengunjung Datang ke lokasi Labersa Riau Fantasi'
],
[

    'icon' => 'ph-magnifying-glass',
    'title' => 'Lihat Wahana',
    'description' => 'Pengunjung dapat melihat berbagai macam wahana'
],
[
    'icon' => 'ph-ticket',
    'title' => 'Tiket',
    'description' => 'Pengunjung dapat membeli tiket di loket'
],
[
    'icon' => 'ph-money-wavy',
    'title' => 'Pembayaran',
    'description' => 'Pengunjung melakukan pembayaran'
],
[
    'icon' => 'ph-user',
    'title' => 'Bermain',
    'description' => 'Pengunjung datang dan bersenang - senang'
]
];

$wahana_post = [
    [
        'image' => 'image/image 3.png',
        'title' => 'Lazy Rivel Pool',
        'description' => 'Lazy river pool adalah kolam dangkal panjang di taman air yang dirancang dengan arus lambat dan tenang yang mendorong pengunjung untuk mengapung santai di atas rakit, ban, atau hanya dengan tubuh mereka untuk menikmati pengalaman santai di taman hiburan.'
    ],
    [
        'image' => 'image/image 6.png',
        'title' => 'Kolam Petualangan',
        'description' => 'Adventure pool merupakan karena kolam yang memiliki wahana petualangan. Di sini anak-anak bisa mencoba berbagai permainan, seperti permainan outbound. Permainan yang tersedia bisa melatih kecepatan dan keberanian anak terhadap rintangan yang mereka hadapi.'
    ],
    [
        'image' => 'image/image 4.png',
        'title' => 'Bianglala',
        'description' => 'Bianglala adalah nama lain untuk pelangi (fenomena optik alam yang menampilkan spektrum warna di langit) dan juga untuk wahana hiburan berbentuk kincir raksasa yang berputar perlahan membawa penumpang menikmati pemandangan.'
    ],
    [
        'image' => 'image/image 7.png',
        'title' => 'Kora Kora',
        'description' => 'Kora-Kora adalah nama sebuah perahu tradisional dari Kepulauan Maluku Indonesia, yang digunakan untuk keperluan perdagangan maupun peperangan, dan juga wahana permainan di taman hiburan.' 
    ]
 ];

 $faq_post = [
    [
        'question' => 'Dimana lokasi Labersa Riau Fantasi?',
        'answer' => 'Labersa Riau Fantasi terletak di Jl. Labersa, Simpang Tiga, Kec. Siak Hulu, Kabupaten Kampar, Riau 28284'
    ],
    [
        'question' => 'Apa saja wahana yang tersedia?',
        'answer' => ' Terdapat 4 wahana yang tersedia, yaitu pada waterpark terdapat lazy rivel pool dan adventure pool. Untuk wahana theme park terdapat bianglala dan kora kora.'
    ],
    [
        'question' => 'Berapa harga tiket masuk?',
        'answer' => ' Harga tiket masuk untuk weekdays Rp 40.000 dan untuk weekend Rp 60.000'
    ],
    [
        'question' => 'Apakah boleh membawa makanan dari luar?',
        'answer' => ' Untuk membawa makanan dari luar tidak boleh, tetapi kamu dapat membeli makanan yang tersedia pada kantin yang tersedia pada wahana waterpark dan theme park.'
    ],
    [
        'question' => 'Jam operasionalnya kapan?',
        'answer' => ' Untuk weekdays jam 09.00-17.00 WIB dan untuk weekend jam 09.00-18.00 WIB'
    ],
];

?>

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
              <li><a href="{{url('user/login')}}" class="bg-yellow-600 text-white px-3 py-1 rounded-lg cursor-pointer">Login</a></li>
              <li><button class="bg-yellow-600 text-black px-3 py-1 rounded-lg cursor-pointer">ID</button></li>
              <li><button class="bg-yellow-600 text-black px-3 py-1 rounded-lg cursor-pointer">EN</button></li>
          </div>
      </nav>
     
	

    <section id="hero_section" class="m-auto">
      <div class="relative">
        <!-- Teks di tengah -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center space-y-5">
          <h1 class="montserrat text-4xl text-black font-Pica font-bold">
            SELAMAT DATANG DI LABERSA RIAU FANTASI
          </h1>
          <h2 class="montserrat text-lg text-black font-semibold">
            Rasakan keceriaan liburan bersama keluarga dan sahabat
          </h2>
        </div>
    
    
        <!-- Gambar background -->
        <img src="image/image 14.png" alt="bg-labersa" class="object-cover object-center w-full h-200">
      </div>
    </section>


		<!-- Section Tentang -->
    <section class="w-full py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-black mb-6">CARA KERJA</h2>
        
        <!-- 5 Kolom Fasilitas -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            <?php 
            for ($i = 0; $i <count ($CarakerjaPost); $i ++) {


                ?>
          <div class="bg-green-100 h-full  shadow-md flex flex-col justify-center items-center p-6 aspect-square">
              <i class="ph <?php echo $CarakerjaPost[$i]['icon']; ?> text-4xl mb-2"> </i>
              <h3 class="text-xl font-semibold text-black mb-3"> <?php echo $CarakerjaPost[$i]['title']; ?> </h3>
            <p class="text-xs text-center leading-tight break-words"> <?php echo $CarakerjaPost[$i]['description']; ?> </p>
          </div>
          <?php } ?>

          </div>
        </div>
    </section>

    <section class="w-full py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-black mb-6">WAHANA YANG TERSEDIA</h2>

		<!-- Grid Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
         <?php
         for ($i = 0; $i <count ($WahanatersediaPost); $i ++) {
         ?>

      <!-- Card 1 -->
      <div class="bg-green-100 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
        <img src="<?php echo $WahanatersediaPost[$i]['image']; ?>" alt="lazy" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold mb-2"> <?php echo $WahanatersediaPost[$i]['title']; ?> </h3>
          <p class="text-sm text-gray-700 leading-relaxed">
           <?php echo $WahanatersediaPost[$i]['description']; ?>
          </p>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</section>


<section class="w-full py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 flex justify-end relative">
    
    <!-- Bingkai Foto (foto besar + 123) -->
    <div class="grid grid-cols-2 gap-1 w-[726px] h-[402px]">
      
      <!-- Foto besar -->
      <div class="relative">
        <img src="image/image 12.png" alt="kolam" 
             class="w-500 h-100 object-cover shadow">
      </div>

      <!-- Foto 123 -->
      <div class="grid grid-cols-2 grid-rows-2 gap-1">
        <!-- Gambar 1 -->
        <img src="image/image 11.png" alt="kolam" class="col-span-2 w-180 h-50 object-cover shadow">
        <!-- Gambar 3 -->
        <img src="image/image 10.png" alt="kolam" class="col-span-2 w-180 h-50 object-cover shadow">
      </div>
    </div>

    <!-- Kotak Rekomendasi (mentok kiri) -->
    <div class=" absolute left-6 top-1/2 bottom-8 transform -translate-y-1/2 
                bg-green-100 text-black p-8  shadow-md 
                w-[400px] h-[330px] flex flex-col justify-center">
      <h2 class="text-2xl font-bold mb-4">Rekomendasi Kami</h2>
      <p class="mb-6 leading-relaxed">
        Cari tempat liburan penuh keseruan? Nikmati berbagai wahana air & permainan seru hanya di 
        Labersa Riau Fantasi, destinasi wisata nomor satu di Riau.
        <ul class="text-gray-700 mb-6 space-y-2">
          <li>✓ Theme Park & Waterpark</li>
          <li>✓ Event & Promo Spesial</li>
        </ul>
      </p>
      <div>
        <a href="#"
        class="inline-flex items-center bg-white text-black px-4 py-2 shadow bg-white transition">
       Lihat 
       <span class="ml-2"><i class="ph ph-arrow-right flex items-center"></i></span>
     </a>
      </div>
    </div>
  </div>
</section>


<section class="w-full py-15 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-[#1E392A] mb-6">FAQ</h2>
      <div class="space-y-4 text-left">
      <?php
         for ($i = 0; $i <count ($FaqPost); $i ++) {
         ?>
          <div>
              <button class="bg-green-100 text-black w-full px-6 py-4 flex justify-between items-center font-semibold cursor-pointer rounded"> <?php echo $FaqPost[$i]['question']; ?> <i class="ph ph-caret-down"></i></button>
          </div>
          <?php } ?>
      </div>
  </div>
</section>


<section class="w-full py-10 bg-green-100">
  <div class="max-w-6xl mx-auto px-6 text-center">
      <div class="grid grid-cols-4 gap-6">
          <div class="text-left">
              <div>
                  <span class="text-xl font-semibold">Alamat Kami</span>
              </div>
              <div class="flex items-center mb-3">
                  <div class="h-[1px] w-40 bg-sky-300"></div>
                  <div class="ml-1 h-px w-10 bg-white"></div>
              </div>
              <p class=" text-base mb-2 text-gray-500">Jl. Labersa, Simpang Tiga,<br>
                Kec. Siak Hulu, <br>
                Kabupaten Kampar, <br>
                Riau 28284</p>
              <img src="image/image 13.png" alt="maps" class="mb-2">
              <p class="text-sm mb-2 text-gray-500">Email: labersariaufantasi@gmail.com</p>
              <p class="text-base text-gray-500">Tel: +62 898-2675-9077</p>
          </div>

          <div class="text-left">
              <div>
                  <span class="text-xl font-semibold">Jelajahi</span>
              </div>
              <div class="flex items-center mb-3">
                  <div class="h-[1px] w-40 bg-sky-300"></div>
                  <div class="ml-1 h-px w-10 bg-white"></div>
              </div>
              <ul>
                  <li><a href="#" class="text-base hover:text-white text-gray-500">BERANDA</a></li>
                  <li><a href="#" class="text-base hover:text-white text-gray-500">TENTANG</a></li>
                  <li><a href="#" class="text-base hover:text-white text-gray-500">KONTAK</a></li>
              </ul>
          </div>

          <div class="text-left">
              <div>
                  <span class="text-xl font-semibold">Jam Kerja</h4></span>
              </div>
              <div class="flex items-center mb-3">
                  <div class="h-[1px] w-40 bg-sky-300"></div>
                  <div class="ml-1 h-px w-10 bg-white"></div>
              </div>
              <p class="text-left text-base mb-2 text-gray-500">WEEKDAY : 09.00 - 17.00 WIB</p>
              <p class="text-left text-base mb-2 text-gray-500">WEEKEND : 09.00 - 18.00 WIB</p>
          </div>

          <div class="text-left">
              <div>
                  <span class="text-xl font-semibold">Media Sosial</h4></span>
              </div>
              <div class="flex items-center mb-3">
                  <div class="h-[1px] w-40 bg-sky-300"></div>
                  <div class="ml-1 h-px w-10 bg-white"></div>
              </div>
              <div class="flex justify-center items-center mt-2 space-x-5">
                  <div class="h-[50px] w-[50px] bg-green-800 shadow-md flex justify-center items-center hover:bg-yellow-600 hover:text-white transition">
                      <i class="ph ph-facebook-logo text-2xl text-white/90"></i>
                  </div>
                  <div class="h-[50px] w-[50px] bg-green-800 shadow-md flex justify-center items-center hover:bg-yellow-600 hover:text-white transition">
                      <i class="ph ph-instagram-logo text-2xl text-white/90"></i>
                  </div>
                  <div class="h-[50px] w-[50px] bg-green-800 shadow-md flex justify-center items-center hover:bg-yellow-600 hover:text-white transition">
                      <i class="ph ph-tiktok-logo text-2xl text-white/90"></i>
                  </div>
                  <div class="h-[50px] w-[50px] bg-green-800 shadow-md flex justify-center items-center hover:bg-yellow-600 hover:text-white transition">
                      <i class="ph ph-whatsapp-logo text-2xl text-white/90"></i>
                  </div>
      </div>
  </div>
</section>
	</body>
</html>
