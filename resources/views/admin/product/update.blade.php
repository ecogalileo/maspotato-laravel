<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Product</h1>
                    <hr />
                    <form action="{{ route('admin/products/update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="item_name" class="form-control" placeholder="Product Name" value="{{$products->item_name}}">
                                @error('item_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Unit Price</label>
                                <input type="text" name="unit_price" class="form-control unitPrice" placeholder="Unit Price" value="{{$products->unit_price}}">
                                @error('unit_price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Stock Qty</label>
                                <input type="text" name="stock_qty" class="form-control stockQty" placeholder="Stock Qty" onkeyup="myFunction()" value="{{$products->stock_qty}}">
                                @error('stock_qty')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Inventory Value</label>
                                <input type="text" name="inventory_value" class="form-control inventoryValue" placeholder="Inventory Value" value="{{$products->inventory_value}}">
                                @error('inventory_value')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

 <script>
    function myFunction() {
    $(".inventoryValue").val($(".unitPrice").val() * $(".stockQty").val());
    }

    // window.onload = function() {
    // $(".inventoryValue").val($(".unitPrice").val() * $(".stockQty").val());
    // }
</script>
