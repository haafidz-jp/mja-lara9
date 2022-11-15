<?php

namespace App\Traits;


trait WithDataTable {
    
    public function get_pagination_data ()
    {
        switch ($this->name) {
            case 'user':
                $users = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.user',
                    "users" => $users,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('user.new'),
                            'create_new_text' => 'Buat User Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

            case 'product':
                $products = $this->model::search($this->search)
                    ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                    ->paginate($this->perPage);

                return [
                    "view" => 'livewire.table.product',
                    "products" => $products,
                    "data" => array_to_object([
                        'href' => [
                            'create_new' => route('product.new'),
                            'create_new_text' => 'Buat Product Baru',
                            'export' => '#',
                            'export_text' => 'Export'
                        ]
                    ])
                ];
                break;

                case 'quotation':
                    $quotations = $this->model::search($this->search)
                        ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                        ->paginate($this->perPage);
    
                    return [
                        "view" => 'livewire.table.quotation',
                        "quotations" => $quotation,
                        "data" => array_to_object([
                            'href' => [
                                'create_new' => route('quotation.new'),
                                'create_new_text' => 'Buat Quotation Baru',
                                'export' => '#',
                                'export_text' => 'Export'
                            ]
                        ])
                    ];
                    break;

            default:
                # code...
                break;
        }
    }
}