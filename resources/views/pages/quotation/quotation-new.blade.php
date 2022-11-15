<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Data Quotation Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Quotation</a></div>
            <div class="breadcrumb-item"><a href="{{ route('quotation') }}">Buat Data Quotation Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-quotation action="createQuotation" />
    </div>
</x-app-layout>
