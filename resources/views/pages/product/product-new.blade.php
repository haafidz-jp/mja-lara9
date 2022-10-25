<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Data Product Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Product</a></div>
            <div class="breadcrumb-item"><a href="{{ route('product') }}">Buat Data Product Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-product action="createProduct" />
    </div>
</x-app-layout>
