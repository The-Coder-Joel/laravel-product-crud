<!DOCTYPE html>
<html>

    <head>
        <title>Edit Product</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body class="container py-5">
        <div class="row">
            <div class="col-md-10">
                <h1 class="h2 mb-4">Edit Product</h1>
            </div>
            <div class="col-md-12 text-end">
                <a href="{{ route('products.index') }}" class="btn btn-primary mb-3"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
        </div>
        <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Price<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="price" value="{{ $product->price }}" step="0.01" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Quantity<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Upload Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    @if($product->image)
                                        <div class="text-start mt-4">
                                            <img src="{{ asset($product->image) }}" width="150">
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" rows="4" value="{{ $product->description }}"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Update Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
