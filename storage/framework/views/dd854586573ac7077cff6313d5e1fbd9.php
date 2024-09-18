
<?php $__env->startSection('admincontent'); ?>
<style>
  .mdc-button.outlined-button--delete:not(:disabled) {
    border-color: #ee0000 !important;
  }
  .mdc-button.outlined-button--delete:not(:disabled) {
    color: #ee0000 !important;
  }
  .mdc-button.outlined-button--edit:not(:disabled) {
    border-color: #00ee47 !important;
  }
  .mdc-button.outlined-button--edit:not(:disabled) {
    color: #00ee47 !important;
  }
.price-wrapper{
  position: relative; 
  display: inline-block;
}

.price-slash{
  position: relative;
  width: 100%;
  height: 0;
  border-top: 1px solid red;
  top: 10px;
}

/* .price{ font-size: 10px;} */

</style>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <?php if(session('status')): ?>
                <div class="row">
                    <div class="col-md-4 ms-auto">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <?php echo e(session('status')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="container">
                <div class="row mb-4">
                  <div class="mdc-card ">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Transaction Pembayaran</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Detail</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transactions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                      <?php echo e($transactions->id_transaction); ?>

                                    </td>
                                    <td class="text-center"><?php echo e($transactions->user->name ?? 'No user found'); ?></td>
                                    <td class="text-center">
                                      <?php echo e($transactions->date); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php echo e($transactions->category); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($transactions->detail_transaction->detail ?? 'No Detail Found'); ?>,
                                        <?php echo $transactions->voucher ? $transactions->voucher : '<i class="text-danger">TANPA VOUCHER</i>'; ?>

                                    </td>
                                    
                                        <td class="text-center">
                                          <div class="price-wrapper">
                                            <div class="price-slash"></div>
                                            <div class="price"><small><?php echo e('Rp ' . number_format($transactions->harga_asli, 0, ',', '.')); ?></small></div>
                                          </div>
                                          <h5 class="fw-bold mt-1"><?php echo e('Rp ' . number_format($transactions->total, 0, ',', '.')); ?></>
                                        </td>                                  
                                      
                                      <td class="text-center">
                                        <?php if($transactions->status == 'declined'): ?>
                                            <div class="btn btn-danger rounded-pill"><?php echo e($transactions->status); ?></div>
                                        <?php elseif($transactions->status == 'pending'): ?>
                                            <div class="btn btn-warning rounded-pill"><?php echo e($transactions->status); ?></div>
                                        <?php else: ?>
                                            <div class="btn btn-success rounded-pill"><?php echo e($transactions->status); ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                      <a type="button" data-bs-toggle="modal" data-bs-target="#EditModalM<?php echo e($transactions->id_transaction); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                    </div>
                                  </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                              <tr>
                                  <th class="text-center">Nomor</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">Tanggal</th>
                                  <th class="text-center">Category</th>
                                  <th class="text-center">Detail</th>
                                  <th class="text-center">Total</th>
                                  <th class="text-center">Status</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="mdc-card ">
                    <div class="d-flex justify-content-between align-items-center py-2 pb-4 ">
                        <h6 class="card-title card-padding pb-0">Data Transaction Trainer Sesi</h6>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Sesi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Total Sesi</th>
                                    <th class="text-center">Jumlah Kehadiran</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $transactionsesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transactionsesis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                  <td class="text-center"><?php echo e($transactionsesis->id_session); ?></td>
                                    <td class="text-center"><?php echo e($transactionsesis->user->name ?? 'No user found'); ?></td>
                                    <td class="text-center">
                                      <?php echo e($transactionsesis->hargasesi->name ?? 'Harga Sesi Not Found'); ?>

                                    </td>
                                    <td class="text-center">
                                      <?php if($transactionsesis->status == 'non-active'): ?>
                                          <div class="btn btn-danger rounded-pill"><?php echo e($transactionsesis->status); ?></div>
                                      <?php elseif($transactionsesis->status == 'pending'): ?>
                                          <div class="btn btn-warning rounded-pill"><?php echo e($transactionsesis->status); ?></div>
                                      <?php else: ?>
                                          <div class="btn btn-success rounded-pill"><?php echo e($transactionsesis->status); ?></div>
                                      <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                      <?php echo e($transactionsesis->total_sesi); ?>

                                    </td>
                                    <td class="text-center">
                                      <div class="btn btn-secondary fw-bold">
                                        <small><?php echo e($transactionsesis->jumlah_kehadiran); ?></small>
                                      </div>
                                    </td>
                                    <td class="text-center">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal1<?php echo e($transactionsesis->id_session); ?>" class="mdc-button mdc-button--outlined shaped-button outlined-button--edit mdc-ripple-upgraded mx-2"> Edit </a>
                                      </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                              <tr>
                                  <th class="text-center">Nomor</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">Sesi</th>
                                  <th class="text-center">Status</th>
                                  <th class="text-center">Total Sesi</th>
                                  <th class="text-center">Jumlah Kehadiran</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </tfoot>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>  
<?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transactions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="EditModalM<?php echo e($transactions->id_transaction); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data transaction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('transactions.update', $transactions->id_transaction)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="nama" class="fw-bold mt-3">Nama</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e($transactions->user->name ?? 'No user found'); ?>" class="form-control" id="name" placeholder="Masukkan Nama" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Category</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e(old('category') ?? $transactions->category); ?>" name="category" class="form-control" id="no_rek" placeholder="Masukkan No Rekening" readonly>
                </div>   
                <label for="nama" class="fw-bold mt-3">Detail</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e($transactions->detail_transaction->detail ?? 'No Detail Found'); ?> <?php echo $transactions->detail_transaction->voucher ? $transactions->detail_transaction->voucher : 'TANPA VOUCHER'; ?>" class="form-control" id="name" placeholder="Masukkan Nama" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Harga Asli</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e(old('harga_asli') ?? $transactions->harga_asli); ?>" name="harga_asli" class="form-control" id="harga_asli" placeholder="Masukkan Harga Asli" <?php if($transactions->status != "pending"): ?> readonly <?php endif; ?>>
                </div>  
                <label for="nama" class="fw-bold mt-3">Potongan</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e(old('potongan') ?? $transactions->potongan); ?>" name="potongan" class="form-control" id="potongan" placeholder="Masukkan Potongan Harga" <?php if($transactions->status != "pending"): ?> readonly <?php endif; ?>>
                </div>  
                <label for="nama" class="fw-bold mt-3">Voucher</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e(old('voucher') ?? $transactions->voucher); ?>" name="voucher" class="form-control" id="voucher" placeholder="Masukkan Voucher Harga" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Total</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e(old('total') ?? $transactions->total); ?>" name="total" class="form-control" id="total" placeholder="Masukkan Total Harga" <?php if($transactions->status != "pending"): ?> readonly <?php endif; ?>>
                </div>  
                <label for="nama" class="fw-bold mt-3">Metode</label>
                <div class="input-group input-group-outline w-100">
                    <input type="text" value="<?php echo e($transactions->metode->name ?? 'No Metode found'); ?>" class="form-control" id="no_rek" placeholder="Masukkan No Rekening" readonly>
                </div>  
                <label for="nama" class="fw-bold mt-3">Foto</label>
                <div class="py-2" style="width: 300px; height: 200px">
                    <img class="w-100 h-100 object-fit-cover" src="<?php echo e(asset('storage/'.$transactions->picture)); ?>" alt="">
                </div> 
                <label for="nama" class="fw-bold mt-3">Status</label>
                <div class="input-group input-group-outline w-100">
                    <select class="form-control w-100" name="status" id="status">
                        <option value="" disabled selected>Masukkan status</option>
                        <option value="approved" <?php echo e($transactions->status == 'approved' ? 'selected' : ''); ?>>Approved</option>
                        <option value="pending" <?php echo e($transactions->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                        <option value="declined" <?php echo e($transactions->status == 'declined' ? 'selected' : ''); ?>>Declined</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
<?php $__currentLoopData = $transactionsesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transactionsesis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="EditModal1<?php echo e($transactionsesis->id_session); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data transaction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?php echo e(route('session_transactions.update', $transactionsesis->id_session)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?> 
                <label for="nama" class="fw-bold mt-3">Status</label>
                <div class="input-group input-group-outline w-100">                                      
                    <select class="form-control w-100" name="status" id="status">
                        <option value="" disabled selected>Masukkan status</option>
                        <option value="active" <?php echo e($transactionsesis->status == 'active' ? 'selected' : ''); ?>>Active</option>
                        <option value="pending" <?php echo e($transactionsesis->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                        <option value="non-active" <?php echo e($transactionsesis->status == 'non-active' ? 'selected' : ''); ?>>Non-Active</option>
                    </select>
                </div>  
                <button type="submit" class="btn btn-warning my-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
  <!-- partial:admindashboard/admindashboard/partials/_footer.html -->
  <footer>
    
  </footer>

  <!-- partial -->
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- plugins:js -->
<script src="<?php echo e(asset('admindashboard/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?php echo e(asset('admindashboard/assets/vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo e(asset('admindashboard/assets/js/material.js')); ?>"></script>
<script src="<?php echo e(asset('admindashboard/assets/js/misc.js')); ?>"></script>
<!-- endinject -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>
<script>
  new DataTable('#example1', {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
 
                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
 
                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    },
    fixedHeader: {
        footer: true
    }
});
  new DataTable('#example2', {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
 
                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
 
                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    },
    fixedHeader: {
        footer: true
    }
});
</script>
</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/transactions/index.blade.php ENDPATH**/ ?>