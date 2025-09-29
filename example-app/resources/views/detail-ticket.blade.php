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
              <img class="h-15" src="{{ asset('image/logolabersa.png') }}" alt="Logolabersa">
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
    
<section class="bg-gray-100 py-30">
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="p-6 md:p-8 border-b border-gray-200">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-900 mb-2">Pesanan Tiket Anda</h1>
                <p class="text-sm text-gray-600 mb-3">Order ID : {{ $order->invoice_number }}</p>
            </div>

            <div class="p-6 md:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Ticket Details -->
                    <div class="lg:col-span-2">
                        <!-- Ticket Item -->
                        <div class="flex items-center p-5 bg-blue-50 rounded-xl border border-blue-100 mb-6">
                            <div class="flex-1">
                                <p class="text-sm text-gray-500 uppercase tracking-wide font-medium mb-1">Tiket Masuk
                                </p>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Labersa Riau Fantasi</h3>
                                <div class="flex items-center space-x-4 text-sm text-gray-600 mt-1">
                                    <span>Tanggal Kunjungan:
                                        {{ \Carbon\Carbon::parse($order->date_of_visit)->format('d-m-Y') }} </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-semibold text-gray-900">Rp
                                    {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $order->payment_status == 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }} mt-1">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <button class="flex items-center justify-between w-full mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Ringkasan Pesanan</h3>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div class="space-y-3">
                                <div class="flex justify-between text-gray-600">
                                    <span>Tiket {{ $order->orderItem->product->product_name }}</span>
                                    <span>Rp {{ number_format($order->orderItem->product->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between text-gray-600">
                                    <span>Quantity</span>
                                    <span>{{ $order->orderItem->quantity }}</span>
                                </div>
                                <div class="flex justify-between text-gray-600">
                                    <span>Subtotal</span>
                                    <span>{{ number_format($order->total_amount, 0, ',', '.') }}</span>
                                </div>
                                <hr class="border-gray-300">
                                <div class="flex justify-between text-lg font-semibold text-gray-900">
                                    <span>Total</span>
                                    <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Info Sidebar -->
                    <div class="space-y-6">
                        <!-- Customer Information -->
                        <div class="bg-white border border-gray-200 rounded-xl p-5">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Pelanggan</h3>
                            </div>
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">{{ $order->customer->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $order->orderItem->quantity }} Tiket</p>
                                </div>
                            </div>
                        </div>

                        <!-- Customer Details -->
                        <div class="bg-white border border-gray-200 rounded-xl p-5">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Informasi Pelanggan</h3>
                                {{-- <button class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </button> --}}
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3 text-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-700">{{ $order->customer->email }}</span>
                                </div>
                                <div class="flex items-center space-x-3 text-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-700">{{ $order->customer->phone }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Button -->
                        <button id="pay-button"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-xl transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 cursor-pointer">
                            <div class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                    </path>
                                </svg>
                                @if ($order->payment_status === 'pending')
                                    <span>Bayar Sekarang</span>
                                @else
                                    <span>Unduh Tiket</span>
                                @endif
                            </div>
                        </button>
                    </div>
                </div>
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
              <img src="{{ asset('image/image 13.png') }}" alt="maps" class="mb-2">
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

    @if ($order->payment_status === 'pending')
        <!-- Midtrans Snap Script -->
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
        </script>
        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function() {
                snap.pay('{{ $snap_token }}', {
                    onSuccess: function(result) {
                        window.location.href = "{{ url('user/tickets/list-order') }}"
                    },
                    onPending: function(result) {},
                    onError: function(result) {}
                });
            };
        </script>
    @endif

</body>
</html>