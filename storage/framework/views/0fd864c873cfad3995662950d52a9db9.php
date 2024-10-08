
<?php $__env->startSection('admincontent'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="<?php echo e(route('dashboard')); ?>">
              <i class="fa fa-home text-success"></i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a class="" href="<?php echo e(route('participants.index')); ?>">Member</a>
        </li>
        <li class="breadcrumb-item active text-secondary">
          <i>Tambah Data Member</i>
        </li>
      </ol>
    </nav>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h4>Tambah Data Member</h4>
                </div>
                <div class="card-body">
                  <form action="<?php echo e(route('participants.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="title" class=" mt-3">Tanggal Pendaftaran</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Pendaftaran" value="<?php echo e(date('Y-m-d')); ?>">
                    </div>
                    <label for="roles" class=" mt-3">Roles</label>
                    <div class="input-group input-group-outline w-100">
                        <select class="form-control w-100" name="roles" id="roles">
                            <option value="" disabled selected>Masukkan Roles</option>
                            <option value="member">Member</option>
                            <option value="trainer">Trainer</option>
                        </select>
                    </div>
                    <label for="time" class=" mt-3">Code Sales</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="code_sales" class="form-control" id="code_sales" placeholder="Masukkan Code Sales">
                    </div>
                    <label for="time" class=" mt-3">Code Referal</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="code_referal" class="form-control" id="code_referal" placeholder="Masukkan Code Referal">
                    </div>
                    <label for="time" class=" mt-3">Nama</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <label for="time" class=" mt-3">Email</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <label for="time" class=" mt-3">Tanggal Lahir</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <label for="time" class=" mt-3">Nomor Telephone</label>
                    <div class="input-group input-group-outline w-100">
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan Nomor Telephone">
                    </div>
                    <section class="roles-member">
                        <div class="form-group mt-3">
                            <label for="location_id">Pilih Club</label>
                            <select name="location_id" id="location_id" class="form-control select2" required>
                                <option value="">Pilih Location</option>
                                <option value="All Club">All Club</option>
                                <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lct->id_location); ?>">
                                        <?php echo e($lct->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="packaged_id" class="mt-3">Pilih Packaged</label>
                            <select name="packaged_id" id="packaged_id" class="form-control select2" required>
                                <option value="">Pilih Packaged</option>
                                <?php $__currentLoopData = $packaged; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pkg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($pkg->id_packaged); ?>" 
                                        data-category="<?php echo e($pkg->category); ?>" 
                                        data-name="<?php echo e($pkg->name); ?>"
                                        data-price="<?php echo e($pkg->price); ?>">
                                    <?php echo e($pkg->category); ?> (<?php echo e($pkg->name); ?>)
                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="time" class=" mt-3">Category Membership</label>
                                <div class="input-group input-group-outline w-100">
                                    <input type="text" name="category_m" class="form-control" id="category_m" placeholder="Masukkan Kategori Membership" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="time" class=" mt-3">Nama Membership</label>
                                <div class="input-group input-group-outline w-100">
                                    <input type="text" name="name_m" class="form-control" id="name_m" placeholder="Masukkan Nama Membership" readonly>
                                </div>
                            </div>
                        </div>
                        <label for="time" class="mt-3">Harga Membership</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="text" name="harga_m" class="form-control" id="harga_m" placeholder="Masukkan Harga Membership" readonly>
                        </div>
                    </section>
                    <section class="roles-trainer">
                        <label for="time" class=" mt-3">Foto Trainer</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="file" name="foto_trainer" class="form-control" id="foto_trainer" placeholder="Masukkan Foto">
                        </div>
                        <label for="time" class=" mt-3">Total Client</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="text" name="total_client" class="form-control" id="total_client" placeholder="Masukkan Total Client">
                        </div>
                        <label for="time" class=" mt-3">Rating</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="double" name="rating" class="form-control" id="rating" placeholder="Masukkan Rating">
                        </div>
                        <label for="time" class=" mt-3">Instagram</label>
                        <div class="input-group input-group-outline w-100">
                            <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Masukkan Instagram">
                        </div>
                    </section>

                    <button type="submit" class="btn btn-success my-3">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</main>
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

<script>
    const rolesDropdown = document.getElementById('roles');
    const packagedDropdown = document.getElementById('packaged_id');
    const categoryField = document.getElementById('category_m');
    const nameField = document.getElementById('name_m');
    const hargaField = document.getElementById('harga_m');
    const PriceRadio = document.getElementById('price');
    const radioGroup = document.getElementById('radio');
    const rolesMemberSection = document.querySelector('.roles-member');
    const rolesTrainerSection = document.querySelector('.roles-trainer');

    function updateFields() {
        const selectedOption = packagedDropdown.options[packagedDropdown.selectedIndex];
        const category = selectedOption.getAttribute('data-category');
        const name = selectedOption.getAttribute('data-name');
        const price = selectedOption.getAttribute('data-price');

        categoryField.value = category;
        nameField.value = name;
        hargaField.value = price;
    }

    function updateFormState() {
        const role = rolesDropdown.value;
        const isTrainer = role === 'trainer';
        
        // Toggle visibility of sections
        rolesMemberSection.style.display = isTrainer ? 'none' : 'block';
        rolesTrainerSection.style.display = isTrainer ? 'block' : 'none';

        // Disable or enable form fields based on role
        packagedDropdown.disabled = isTrainer;
        yearlyRadio.disabled = isTrainer;
        monthlyRadio.disabled = isTrainer;

        if (isTrainer) {
            // Clear fields if role is trainer
            categoryField.value = '';
            nameField.value = '';
            hargaField.value = '';
        } else {
            // Update fields based on current selection
            updateFields();
        }
    }

    rolesDropdown.addEventListener('change', updateFormState);
    packagedDropdown.addEventListener('change', updateFields);
    yearlyRadio.addEventListener('change', updateFields);
    monthlyRadio.addEventListener('change', updateFields);

    // Initial update in case there's a pre-selected value
    updateFields();
    updateFormState();
</script>



</body>

<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:20:08 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\flashfit\resources\views/participants/create.blade.php ENDPATH**/ ?>