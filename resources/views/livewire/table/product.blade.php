<div>
    <x-data-table :data="$data" :model="$products">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nama_product')" role="button" href="#">
                    Nama Product
                    @include('components.sort-icon', ['field' => 'nama_product'])
                </a></th>
                <th><a wire:click.prevent="sortBy('harga_product')" role="button" href="#">
                    Harga
                    @include('components.sort-icon', ['field' => 'harga_product'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kode_product')" role="button" href="#">
                    Kode Product
                    @include('components.sort-icon', ['field' => 'kode_product'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_by_product')" role="button" href="#">
                    Dibuat Oleh :
                    @include('components.sort-icon', ['field' => 'created_by_product'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($products as $product)
                <tr x-data="window.__controller.dataTableController({{ $product->id }})">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama_product }}</td>
                    <td>{{ $product->harga_product }}</td>
                    <td>{{ $product->kode_product }}</td>
                    <td>{{ $product->created_by_product }}</td>
                    <td>{{ $product->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/product/edit/{{ $product->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
