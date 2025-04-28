<x-app-layout>
    <x-mobile-nav active="produk" />

    <div class="mb-6">
        <h1 class="text-2xl font-bold">List Produk</h1>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Code - Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Brand</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Status</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    {{-- Contoh data dummy --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">10042/P - Moonlight</td>
                        <td class="px-6 py-4 whitespace-nowrap">GCF</td>
                        <td class="px-6 py-4 whitespace-nowrap">Lifestyle</td>
                        <td class="px-6 py-4 whitespace-nowrap">Active</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <a href="#" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <a href="#" class="text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    {{-- Data berikutnya --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>