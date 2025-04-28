@props(['active'])

<nav class="fixed bottom-0 left-0 right-0 bg-white shadow-md flex justify-around py-2 text-xs text-gray-600">
    <a href="{{ route('dashboard') }}" class="flex flex-col items-center {{ $active == 'dashboard' ? 'text-primary' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 12l2-2m0 0l7-7 7 7m-9 2v7a2 2 0 002 2h2a2 2 0 002-2v-7m5 3l2 2m0 0l-2 2m2-2H3" />
        </svg>
        Dashboard
    </a>
    <a href="{{ route('master.produk') }}" class="flex flex-col items-center {{ $active == 'produk' ? 'text-primary' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2zm0 0v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7" />
        </svg>
        Produk
    </a>
    <a href="#" class="flex flex-col items-center {{ $active == 'order' ? 'text-primary' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M9 17v-6h13m0 0v6m0 0H9" />
        </svg>
        Order
    </a>
    <a href="#" class="flex flex-col items-center {{ $active == 'setting' ? 'text-primary' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M10.325 4.317c.426-1.756 3.276-1.756 3.702 0a1.724 1.724 0 002.591 1.072c1.39-.556 2.857.676 2.3 2.086a1.724 1.724 0 001.072 2.591c1.756.426 1.756 3.276 0 3.702a1.724 1.724 0 00-1.072 2.591c.556 1.39-.676 2.857-2.086 2.3a1.724 1.724 0 00-2.591 1.072c-.426 1.756-3.276 1.756-3.702 0a1.724 1.724 0 00-2.591-1.072c-1.39.556-2.857-.676-2.3-2.086a1.724 1.724 0 00-1.072-2.591c-1.756-.426-1.756-3.276 0-3.702a1.724 1.724 0 001.072-2.591c-.556-1.39.676-2.857 2.086-2.3.999.4 2.134-.234 2.591-1.072z" />
        </svg>
        Setting
    </a>
</nav>