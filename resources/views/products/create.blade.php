<x-app-layout title="Create Product">
    <div class="d-flex align-items-center justify-content-center">
        <div style="width: 600px;">
            <a href="{{ url()->previous() }}" class="fw-bolder btn btn-secondary my-3"><i class="bi bi-backspace"></i>Back</a>
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="p-3 bg-white">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-product-form action="Create" :categories="$categories" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
