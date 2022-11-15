<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Quotation') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Quotation</a></div>
            <div class="breadcrumb-item"><a href="{{ route('quotation') }}">Data Quotation</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="quotation" :model="$quotation" />
    </div>
</x-app-layout>
