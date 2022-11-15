<div>
    <x-data-table :data="$data" :model="$quotations">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    No
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('tanggal_quotation')" role="button" href="#">
                    Tanggal Quotation
                    @include('components.sort-icon', ['field' => 'tanggal_quotation'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nomor_quotation')" role="button" href="#">
                    Nomor Quotation
                    @include('components.sort-icon', ['field' => 'nomor_quotation'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kode_product')" role="button" href="#">
                    Terakhir Diperbarui
                    @include('components.sort-icon', ['field' => 'kode_product'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_by_product')" role="button" href="#">
                    Dibuat Oleh
                    @include('components.sort-icon', ['field' => 'created_by_product'])
                </a></th>
                {{-- <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th> --}}
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($quotations as $quotation)
                <tr x-data="window.__controller.dataTableController({{ $quotation->id }})">
                    <td>{{ $quotation->id }}</td>
                    <td>{{ $quotation->nama_product }}</td>
                    <td>{{ $quotation->harga_product }}</td>
                    <td>{{ $quotation->kode_product }}</td>
                    <td>{{ $quotation->created_by_product }}</td>
                    <td>{{ $quotation->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/quotation/edit/{{ $quotation->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
