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
<body>
<div class="flex flex-col justify-between h-screen pt-30">
        <div class="flex justify-center items-center max-w-6xl w-full mx-auto shadow-lg rounded-xl overflow-hidden ">
            <div class="w-1/2 hidden h-100 lg:block">
                <img src="{{ asset('assets/image/image 14.png') }}" alt="Placeholder Image" class="object-cover h-full">
            </div>
            <!-- Right: Login Form -->
            <div class= "w-full lg:w-1/2">
                <div class="flex flex-col justify-center ">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <h2 class="text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masuk</h2>
                    </div>

                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form action="{{'' }}" method="POST" class="space-y-6">
                            @csrf
                            @method('POST')
                            <div>
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" type="email" name="email" required autocomplete="email"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                                    <div class="text-sm">
                                        <a href="#" class="font-semibold text-[#142e50] hover:text-gray-600">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input id="password" type="password" name="password" required
                                        autocomplete="current-password"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#142e50] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs cursor-pointer hover:scale-101 transition focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                    in</button>
                            </div>
                        </form>

                        <p class="mt-5 text-center text-sm/6 text-gray-500">
                            Belum punya akun?
                            <a href="#" class="font-semibold text-[#142e50] hover:text-gray-600">Daftar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
</body>
</html>
