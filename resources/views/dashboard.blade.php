<x-app-layout>
    <div class="text-xl font-semibold mb-6">
        Selamat Datang, {{ Auth::user()->name }}
    </div>

    <!-- Statistik -->
    <!-- <div class="grid grid-cols-1 gap-4 mb-6">
        <div class="bg-white rounded-xl p-4 shadow flex items-center">
            <div class="flex-1">
                <h2 class="text-sm text-gray-600">Total Order</h2>
                <p class="text-2xl font-bold text-primary">123</p>
            </div>
        </div>

        <div class="bg-white rounded-xl p-4 shadow flex items-center">
            <div class="flex-1">
                <h2 class="text-sm text-gray-600">Total Produk</h2>
                <p class="text-2xl font-bold text-primary">45</p>
            </div>
        </div>

        <div class="bg-white rounded-xl p-4 shadow flex items-center">
            <div class="flex-1">
                <h2 class="text-sm text-gray-600">Total Pendapatan</h2>
                <p class="text-2xl font-bold text-primary">Rp 12.500.000</p>
            </div>
        </div>
    </div> -->

    <!-- Transaksi Terbaru -->
    <!-- <div class="bg-white rounded-xl p-4 shadow mb-6">
        <h2 class="text-lg font-semibold mb-2">Transaksi Terbaru</h2>
        <ul class="text-sm text-gray-600 space-y-2">
            <li>- Order #1234 berhasil</li>
            <li>- Order #1233 menunggu pembayaran</li>
            <li>- Produk baru ditambahkan</li>
        </ul>
    </div> -->

    <!-- Mobile Navigation -->
    <x-mobile-nav active="dashboard" />
</x-app-layout>