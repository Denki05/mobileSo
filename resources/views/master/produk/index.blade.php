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
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Code - Name</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Brand</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Category</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    @foreach ($products as $product)
                    <tr>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $product['code'] ?? '-' }}<br><strong>{{ $product['name'] ?? '-' }}</strong></td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $product['brand_name'] ?? '-' }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $product['category_name'] ?? '-' }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">
                            @if ($product['status'] == 1)
                                <span class="text-green-600 font-semibold">Active</span>
                            @elseif ($product['status'] == 2)
                                <span class="text-red-600 font-semibold">Inactive</span>
                            @else
                                <span class="text-gray-600 font-semibold">Unknown</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>