<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Employee</h1>
                        <a {{-- href="{{ route('admin/products/create') }}" --}} class="btn btn-primary">Add Employee</a>
                    </div>
                    <hr />
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>ID No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Date Hired</th>
                                <th>Last updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
{{--                             @forelse ($inventories as $inventory)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $inventory->item_name }}</td>
                                <td class="align-middle">{{ $inventory->unit_price }}</td>
                                <td class="align-middle">{{ $inventory->stock_qty }}</td>
                                <td class="align-middle">{{ $inventory->inventory_value }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin/inventory/edit', ['id'=>$inventory->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                        <a href="{{ route('admin/inventory/delete', ['id'=>$inventory->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Product not found</td>
                            </tr>
                            @endforelse --}}

                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">20240929</td>
                                <td class="align-middle">Employee Name 1</td>
                                <td class="align-middle">Urdaneta City</td>
                                <td class="align-middle">Active</td>
                                <td class="align-middle">September 17, 2024</td>
                                <td class="align-middle">September 29, 2024</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a {{--href="{{ route('admin/inventory/edit', ['id'=>$inventory->id]) }}"--}} type="button" class="btn btn-secondary">Edit</a>
                                        <a {{--href="{{ route('admin/inventory/delete', ['id'=>$inventory->id]) }}"--}} type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">2</td>
                                <td class="align-middle">20240929</td>
                                <td class="align-middle">Employee name 2</td>
                                <td class="align-middle">Manaog</td>
                                <td class="align-middle">Active</td>
                                <td class="align-middle">September 29, 2024</td>
                                <td class="align-middle">September 29, 2024</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a {{--href="{{ route('admin/inventory/edit', ['id'=>$inventory->id]) }}"--}} type="button" class="btn btn-secondary">Edit</a>
                                        <a {{--href="{{ route('admin/inventory/delete', ['id'=>$inventory->id]) }}"--}} type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
