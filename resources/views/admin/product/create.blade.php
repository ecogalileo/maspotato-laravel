<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Add Product</h1>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif
                    <p><a href="{{ route('admin/products') }}" class="btn btn-primary">Go Back</a></p>
 
                    <form action="{{ route('admin/products/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="item_name" class="form-control" placeholder="Item Name">
                                @error('item_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" name="unit_price" class="form-control unitPrice" placeholder="Unit Price">
                                @error('unit_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" name="stock_qty" class="form-control stockQty" onkeyup="myFunction()" placeholder="Stock Qty">
                                @error('stock_qty')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="inventory_value" class="form-control inventoryValue" placeholder="Inventory Value">
                                @error('inventory_value')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

 <script>
    $(document).ready(function(){
        // $("#stockQty").keyup(function(){
        //     // $inventory = $(".unitPrice").val() * $(".stockQty").val();
        //     // $(".inventoryValue").val($(".unitPrice").val() * $(".stockQty").val());
        //     console.log('test');
        // });
        // $("#stockQty").val('1000');
        console.log('test');
    });
    function myFunction() {
    $(".inventoryValue").val($(".unitPrice").val() * $(".stockQty").val());
    }
</script>

