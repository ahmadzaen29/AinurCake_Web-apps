<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AinurCake</title>
    <link rel="shortcut icon" href="../uploads/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../sweetalert2/sweetalert2.min.css">
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="dashboard-main-wrapper">

        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#"><img src="../uploads/logo.png" class="img-fluid" width="90"
                        height="auto" alt="" style="margin-right: -20px;"> AinurCake</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../uploads/User.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $admin_username; ?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="account_admin.blade.php"><i
                                        class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="admin.login"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i
                                        class="fa fa-fw fa-rocket"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.view_users') }}"><i
                                        class="fa fa-fw fa-user-circle"></i>Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fas fa-fw fa-chart-pie"></i>Category</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.view_category') }}">View
                                                category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.add_category') }}">Add
                                                category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-4" aria-controls="submenu-4"><i
                                        class="fab fa-product-hunt"></i>Products</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.view_product') }}">View
                                                products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add_product.php">Add products</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.view_orders') }}"><i
                                        class="fas fa-shopping-cart"></i>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.pengeluaran') }}"><i
                                        class="fas fa-fw fa-arrow-down"></i>Pengeluaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.laporan_bulanan') }}"><i
                                        class="fas fa-table"></i>Laporan
                                    Bulanan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->

        <div class="dashboard-wrapper">=
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Pengeluaran</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi
                                . Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Pengeluaran</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary">Sumber Pengeluaran</h4>
                            </div>
                            <div class="card-body">
                                @foreach ($sumberData as $sumber)
                                    <h4 class="small font-weight-bold">{{ $sumber['nama'] }}<span
                                            class="float-right">Rp.
                                            {{ number_format($sumber['jumlah'], 2, ',', '.') }}</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-{{ $loop->index % 4 == 0 ? 'danger' : ($loop->index % 4 == 1 ? 'warning' : ($loop->index % 4 == 2 ? 'info' : 'primary')) }}"
                                            role="progressbar" style="width: {{ $sumber['count'] }}%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            {{ $sumber['count_text'] }} Kali</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- Collapsable Card Example -->
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h4 class="m-0 font-weight-bold text-primary">Catatan 1</h4>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="card-body">
                                    {{ $catatan1->catatan }}
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                                <h4 class="m-0 font-weight-bold text-primary">Catatan 2</h4>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample1">
                                <div class="card-body">
                                    {{ $catatan2->catatan }}
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal"
                            data-target="#myModalCatatan"><i class="fa fa-edit"> Catatan</i></button><br>
                    </div>
                </div>

                <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal"
                    data-target="#myModalTambah"><i class="fa fa-plus"> Keluaran</i></button><br>
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Transaksi Keluar</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Pengeluaran</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Sumber</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- Tampilkan data pengeluaran -->
                                        @foreach ($transaksi_pengeluaran as $transaksi)
                                            <tr>
                                                <td>{{ $transaksi->id_pengeluaran }}</td>
                                                <td>{{ $transaksi->tgl_pengeluaran }}</td>
                                                <td>Rp. {{ number_format($transaksi->jumlah, 2, ',', '.') }}</td>
                                                <td>{{ $transaksi->nama_sumber }}</td>
                                                <td>{{ $transaksi->deskripsi }}</td>
                                                <td>
                                                    <!-- Button untuk modal -->
                                                    <a href="#" type="button"
                                                        class=" fa fa-edit btn btn-primary btn-md" data-toggle="modal"
                                                        data-target="#myModal{{ $transaksi->id_pengeluaran }}"></a>
                                                </td>
                                            </tr>
                                            <!-- Modal Edit Mahasiswa-->
                                            <div class="modal fade" id="myModal{{ $transaksi->id_pengeluaran }}"
                                                role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ubah Data Pengeluaran</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" id="editForm"
                                                                action="{{ route('admin.pengeluaran') }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <!-- Tampilkan data pengeluaran yang sesuai -->
                                                                <input type="hidden" name="id_pengeluaran"
                                                                    value="{{ $transaksi->id_pengeluaran }}">
                                                                <!-- Isian lainnya -->
                                                            </form>

                                                            <!-- Tampilkan data pengeluaran yang sesuai -->
                                                            <input type="hidden" name="id_pengeluaran"
                                                                value="{{ $transaksi->id_pengeluaran }}">
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <input type="date" name="tgl_pengeluaran"
                                                                    class="form-control"
                                                                    value="{{ $transaksi->tgl_pengeluaran }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Jumlah</label>
                                                                <input type="text" name="jumlah"
                                                                    class="form-control"
                                                                    value="{{ $transaksi->jumlah }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Sumber</label>
                                                                <select class="form-control" name='id_sumber'>
                                                                    <!-- Tampilkan opsi berdasarkan transaksi yang dipilih -->
                                                                    @foreach ($sumberData as $sumber)
                                                                        <option
                                                                            value="{{ $sumber['id_sumber'] ?? '' }}"
                                                                            {{ isset($sumber['id_sumber']) && $sumber['id_sumber'] == $trans ? 'selected' : '' }}>
                                                                            {{ $sumber['nama'] ?? '' }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Deskripsi</label>
                                                                <textarea name="deskripsi" class="form-control" rows="5">{{ $transaksi->deskripsi }}</textarea>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-success">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Batal</button>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#editForm').submit(function(event) {
                // Menghentikan perilaku bawaan formulir pengeditan
                event.preventDefault();

                // Mendapatkan URL formulir action
                var url = $(this).attr('action');

                // Mendapatkan data formulir
                var formData = $(this).serialize();

                // Mengirim permintaan AJAX ke server
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        // Periksa apakah pengeditan berhasil
                        if (response.success) {
                            // Perbarui tampilan halaman jika berhasil
                            // Misalnya, tampilkan pesan sukses atau perbarui tabel data
                            alert('Data berhasil diedit');
                            // Contoh: reload tabel data
                            window.location.reload();
                        } else {
                            // Tampilkan pesan kesalahan jika pengeditan gagal
                            alert('Gagal mengedit data');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Tangani kesalahan jika terjadi
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>



    <!-- Content Column -->


    <!-- ============================================================== -->
    <!-- end content -->
    <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../js/main-js.js"></script>
