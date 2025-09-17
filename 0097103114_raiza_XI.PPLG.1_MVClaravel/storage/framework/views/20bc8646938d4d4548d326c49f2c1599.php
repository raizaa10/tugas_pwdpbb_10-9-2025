<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
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
        table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-sm {
            border-radius: 20px;
            padding: 5px 12px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg border-0">
            <div class="card-body">
                <h1 class="text-center mb-4">📦 Daftar Produk</h1>
                <div class="d-flex justify-content-end mb-3">
                    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">
                        ➕ Tambah Produk
                    </a>
                </div>
                <table class="table table-hover table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><strong><?php echo e($product->name); ?></strong></td>
                            <td class="text-success fw-bold">
                                <?php echo e('Rp ' . number_format($product->price, 0, ',', '.')); ?>

                            </td>
                            <td><?php echo e($product->description); ?></td>
                            <td>
                                <?php if($product->stock > 0): ?>
                                    <span class="badge bg-success">Tersedia (<?php echo e($product->stock); ?>)</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Habis</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>" 
                                   class="btn btn-warning btn-sm">
                                   ✏️ Edit
                                </a>
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" 
                                      method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php if($products->isEmpty()): ?>
                    <p class="text-center text-muted">Belum ada produk tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\belajar-laravel\laravel-project1\resources\views/products/index.blade.php ENDPATH**/ ?>