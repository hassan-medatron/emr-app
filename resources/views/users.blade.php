<x-app-layout>
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 breadcrum-control-left">
                <x-breadcrumb title="Users" />
            </div>
        </div>

        <div class="card">
            <div class="card-header">Users List</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    @push('scripts')
        {{ $dataTable->scripts() }}
    @endpush
</x-app-layout>
