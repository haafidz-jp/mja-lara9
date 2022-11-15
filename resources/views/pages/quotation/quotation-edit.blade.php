<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Data Quotation') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Quotation</a></div>
            <div class="breadcrumb-item"><a href="{{ route('quotation') }}">Edit Data Quotation</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-quotation action="updateQuotation" :quotationId="request()->quotationId" />
    </div>
</x-app-layout>
