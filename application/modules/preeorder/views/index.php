<div class="content-wrapper">
    <div class="container-pills">
        <div id="list-kat" class="w3-container pills">
            <!-- Content Header (Page header) --> 
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pree Order</h1>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Daftar Pree Order</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-white" style="background:#8a8542">
                                <tr>
                                    <th style="width:1px">
                                        No
                                    </th>
                                    <th style="width:1px">
                                        Produk
                                    </th>
                                    <th style="width:1px">
                                        Harga
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        ID Cust
                                    </th>
                                    <th style="width:1px">
                                        Kurir
                                    </th>
                                    <th>
                                        Bukti Tf
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($preeorder as $po){ ?>
                                    <tr>
                                        <td width="1px"><?php echo $po['order_num']; ?></td>
                                        <td width="20%"><?php echo $po['prod_name']; ?> (<?php echo $po['qty']; ?>)</td>
                                        <td width="1px"><?php echo number_format($po['prod_price']); ?></td>
                                        <td width="20%"><?php echo $po['order_date']; ?></td>
                                        <td width="1px" align="center"><?php echo $po['id_user']; ?>
                                        </td>
                                        <td width="1px"><?php echo $po['kurir']; ?></td>
                                        <td width="1px">
                                            <img src="<?= base_url('bukti_po/' .$po['bukti_tf']); ?>" style="width:100px">
                                        </td>
                                        <td width="1px">
                                            <center>
                                                <a class="btn btn-success btn-sm" href="<?php echo base_url('cart/podelete/'.$po['order_num'])?>" onclick="return confirm('Yakin untuk menghapus data order ini?')"><i class="fas fa-trash"></i> Ready</a>
                                            <center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">Kategori Produk TSANIAJATI</div>
                </div>
            </section>
        </div>

        <div id="add-kat" class="w3-container pills" style="display:none;"> 
            <!-- Content Header (Page header) --> 
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                            <button class="btn bg-warning btn-sm" onclick="openPills('list-kat')"><i class="fas fa-book"></i> Kategori Produk</button>
                            </li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="card-title">Tambah Kategori</h3>
                    </div>
                    <div class="card-body">
                        <form class="user" method="POST" action="<?php echo base_url(). 'category/tambah_aksi'; ?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-5">
                                    <input type="text" name="cat_name" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <input class="btn btn-danger" type="submit" name="btnSubmit" value="Tambah Kategori">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-right">TSANIAJATI © 2020 - by Anisya</div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-kategori" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title">Edit Kategori Produk</h4>
                <button aria-hidden="true" data-dismiss="modal" class="text-white close" type="button">×</button>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('category/update')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-12 col-sm-12 control-label">Nama Kategori</label>
                        <div class="col-lg-12">
                            <input type="hidden" id="cat_id" name="cat_id">
                            <input type="text" class="form-control" id="cat_name" name="cat_name">
                        </div>
                    </div>
                </div>
                     
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>