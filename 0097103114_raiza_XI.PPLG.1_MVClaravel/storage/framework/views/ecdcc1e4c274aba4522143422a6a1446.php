<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Produk</title> 
    <!-- Bootstrap CSS --> 
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet"> 
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            font-weight: 700;
            color: #343a40;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head> 
<body> 
    <div class="container my-5"> 
        <div class="card shadow-lg border-0">
            <div class="card-body p-4">
                <h1 class="text-center mb-4">✏️ Edit Produk</h1> 
                <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST"> 
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('PUT'); ?> 
     
                    <div class="mb-3"> 
                        <label class="form-label">Nama Produk</label> 
                        <input type="text" name="name" class="form-control" 
                               value="<?php echo e($product->name); ?>" required> 
                    </div> 
     
                    <div class="mb-3"> 
                        <label class="form-label">Harga</label> 
                        <input type="number" name="price" class="form-control" 
                               value="<?php echo e($product->price); ?>" required> 
                    </div> 
     
                    <div class="mb-3"> 
                        <label class="form-label">Deskripsi</label> 
                        <textarea name="description" class="form-control" rows="3"><?php echo e($product->description); ?></textarea> 
                    </div> 
     
                    <div class="mb-3"> 
                        <label class="form-label">Stok</label> 
                        <input type="number" name="stock" class="form-control" 
                               value="<?php echo e($product->stock); ?>" required> 
                    </div> 
     
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">
                            ⬅️ Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            💾 Update Produk
                        </button> 
                    </div>
                </form> 
            </div>
        </div>
    </div> 
</body> 
</html>
<?php /**PATH C:\belajar-laravel\laravel-project1\resources\views/products/edit.blade.php ENDPATH**/ ?>