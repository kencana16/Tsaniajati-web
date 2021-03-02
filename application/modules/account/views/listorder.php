<!------- MY ACCOUNT ------->
<div class="row col-md-9 ml-3 mt-3">
      <div class="col-md-12">
        <h4 class="alert alert-light font-weight-bold"><i class="fas fas fa-book mr-2"></i>Riwayat Pembelian</h4>
            <div class="row col-md-12">
                <table class="table table-bordered">
                    <thead class="text-white" style="background:#8a8542">
                        <tr>
                            <th class="text-center">
                                No
                            </th>
                            <th class="text-center">
                                Tanggal
                            </th>
                            <th class="text-center">
                                ID Cust
                            </th>
                            <th class="text-center">
                                Nama Produk
                            </th>
                            <th class="text-center">
                                Jumlah
                            </th>
                            <th class="text-center">
                                Harga
                            </th>
                            <th class="text-center">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" align="center" class="text-danger">Riwayat pesanan masih kosong!</td>
                        </tr>
                    </tbody>
                    <!-- <tbody>
                        <?php 
                        $no=1;
                        foreach ($Order as $o){ ?>
                            <tr>
                                <td class="text-center" width="1px"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $o['order_date']; ?></td>
                                <td><?php echo $o['id_user']; ?></td>
                                <td><?php echo $o['prod_name']; ?></td>
                                <td class="text-center"><?php echo $o['quantity']; ?></td>
                                <td class="text-right">Rp. <?php echo number_format($o['prod_price']) ?></td>
                                <td width="20%">
                                    <center>
                                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('order/deleteitems/'.$o['order_num'])?>" onclick="return confirm('Yakin untuk menghapus kategori produk ini?')"><i class="fas fa-trash"></i> Delete</a>
                                    <center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody> -->
                </table>
            </div>
      </div>

    </div>