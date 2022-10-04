@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    // Payment Section
    [
        "href" => [
            [
                "section_text" => "Payment",
                "section_list" => [
                    ["href" => "user", "text" => "Data Payment"],
                    ["href" => "user.new", "text" => "Tambah Payment"]
                ]
            ]
        ],
        "text" => "Payment",
        "is_multi" => true,
    ],
    // Produk Section
    [
        "href" => [
            [
                "section_text" => "Produk",
                "section_list" => [
                    ["href" => "user", "text" => "Data Produk"],
                    ["href" => "user.new", "text" => "Tambah Produk"]
                ]
            ]
        ],
        "text" => "Produk",
        "is_multi" => true,
    ],
    // Purchase Order Section
    [
        "href" => [
            [
                "section_text" => "Purchase Order",
                "section_list" => [
                    ["href" => "user", "text" => "Data PO"],
                    ["href" => "user.new", "text" => "Tambah PO"]
                ]
            ]
        ],
        "text" => "Purchase Order",
        "is_multi" => true,
    ],
    // Surat Jalan Section
    [
        "href" => [
            [
                "section_text" => "Surat Jalan",
                "section_list" => [
                    ["href" => "user", "text" => "Data Surat Jalan"],
                    ["href" => "user.new", "text" => "Tambah Surat Jalan"]
                ]
            ]
        ],
        "text" => "Surat Jalan",
        "is_multi" => true,
    ],
    // Invoice Section
    [
        "href" => [
            [
                "section_text" => "Invoice",
                "section_list" => [
                    ["href" => "user", "text" => "Data Invoice"],
                    ["href" => "user.new", "text" => "Tambah Invoice"]
                ]
            ]
        ],
        "text" => "Invoice",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "User",
                "section_list" => [
                    ["href" => "user", "text" => "Data User"],
                    ["href" => "user.new", "text" => "Buat User"]
                ]
            ]
        ],
        "text" => "User",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">CV. MULIA JAYA AGUNG</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            <li class="menu-header">{{ $link->text }}</li>
            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @else
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>
