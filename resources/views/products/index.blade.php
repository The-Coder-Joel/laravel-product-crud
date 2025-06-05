<!DOCTYPE html>
<html>
    <head>
        <title>Product List</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body class="container py-5">
        <h1 class="mb-4">Product List</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 text-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add New Product</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" width="80">
                                @else
                                    <span class="text-muted">No image available</span>
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>₹ {{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->description ? $product->description : '-' }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning me-3">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form method="POST" action="{{ route('products.destroy', $product) }}" style="display:inline-block">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>