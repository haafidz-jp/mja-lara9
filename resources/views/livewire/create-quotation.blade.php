<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Product') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data product baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama_product" value="{{ __('Nama Product') }}" />
                <small>Minimal 5 Karakter</small>
                <x-jet-input id="nama_product" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="product.nama_product" />
                <x-jet-input-error for="product.nama_product" class="mt-2" />
            </div>
            
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="harga_product" value="{{ __('Harga Product') }}" />
                <small>Range 0 - 999999999 ( 9 digits) </small>
                <x-jet-input id="harga_product" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="product.harga_product" />
                <x-jet-input-error for="product.harga_product" class="mt-2" />
            </div>
            
            {{-- @if ($action == "createProduct") --}}
            {{-- <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="kode_product" value="{{ __('Kode Product') }}" />
                <small>Minimal 8 karakter</small>
                <x-jet-input id="kode_product" type="kode_product" class="mt-1 block w-full form-control shadow-none" wire:model.defer="product.kode_product" />
                <x-jet-input-error for="product.kode_product" class="mt-2" />
            </div> --}}

            {{-- <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <small>Minimal 8 karakter</small>
                <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password_confirmation" />
                <x-jet-input-error for="user.password_confirmation" class="mt-2" />
            </div> --}}
            {{-- @endif --}}
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
