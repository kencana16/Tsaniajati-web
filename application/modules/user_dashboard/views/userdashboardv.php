<!------- MY ACCOUNT ------->
    <div class="row col-md-9 ml-3 mt-3">
      <div class="col-md-12">
        <h4 class="alert alert-light font-weight-bold"><i class="fas fa-usd mr-2"></i>Transaksi</h4>
        <?php
          if (!$cart->result() ) { ?>
            <div class="col-md-12 mt-5 mb-5">
              <div class="col-md-12">
                <strong class="text-danger">Keranjang belanja kosong!</strong> silahkan memilih produk terlebih dahulu.
              </div>
              <img class="mt-3" alt="foto" src="<?php echo base_url('assets/dist/img/box-null.png')?>" style="width:150px;"><br>
              <a class="mt-5" href="<?php echo base_url('produk')?>"><div class="btn btn-md text-white" style="background-color:#8a8542;">
                <i class="fas fa-cart-plus"></i> Belanja Sekarang
              </div></a>
            </div>
          <?php } else { ?>
            <div class="row col-md-12">
              <div class="col-md-6">
                <table class="table table-bordered">
                  <thead style="background-color:#8a8542;">
                    <tr>
                      <th class="text-center text-white" width="1px">NO</th>
                      <th class="text-center text-white" text-white>Pesanan Anda</th>
                      <th class="text-center text-white" width="120px">Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                    $no=1;
                    $total_bayar = 0;
                    foreach ($cart->result() as $row){ ?>
                      <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo $row->prod_name; ?></td>
                        <td align="center"><?php echo anchor('cart/delete_cart_transaction/'.$row->prod_id,'<div class="btn btn-sm btn-danger mx-auto"><i class="fas fa-trash"></i></div>')?></td>
                      </tr>
                  <?php $total_bayar+=$row->total_harga; }?>
                </table>
                <div class="row">
                  <a href="<?php echo base_url('cart')?>"><div class="btn btn-dark btn-sm"><i class="fas fa-shopping-cart"></i> Keranjang Belanja</div></a>
                </div>
              </div>
              <div class="row col-md-1">
              </div>
              <div class="row col-md-5">
                <table class="table">
                  <?= form_open_multipart('cart/order_now'); ?>
                  <tr>
                    <td class="p-1">Jasa Pengiriman</td>
                    <td class="p-1">:</td>
                    <td>
                        <select name="jasakirim" id="jasakirim">
                            <option value="JNE">JNE</option>
                            <option value="JNT">JNT</option>
                            <option value="POS">POS INDONESIA</option>
                        </select><br>
                        <span style="font-size:12px;"><a class="font-italic text-danger" href="https://berdu.id/cek-ongkir" target="blank">Cek Ongkos Kirim</a></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-1">Bukti Pembayaran</td>
                    <td class="p-1">:</td>
                    <td class="p-1"><input type="file" id="buktitf" name="buktitf" required/></td>
                  </tr>
                  <tr>
                    <td class="p-1">Jumlah Produk</td>
                    <td class="p-1">:</td>
                    <td class="p-1"><?php echo $sum_jumlah->jumlah; ?></td>
                  </tr>
                  <tr>
                    <td class="p-1">Total Bayar</td>
                    <td class="p-1">:</td>
                    <td class="font-weight-bold text-success p-1">Rp. <?php echo number_format($total_bayar, 0,',','.') ?>,-</td>
                  </tr>
                </table>
                <div class="text-right">
                  <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-money"></i> Checkout</button>
                </div>
                </form>
                
              </div>
            </div>
        <?php } ?>

        <h4 class="alert alert-light font-weight-bold"><i class="fas fa-usd mr-2"></i>Pree Order</h4>
        
        <div class="col-md-12">
          <table class="table table-bordered">
              <thead class="text-white" style="background:#8a8542">
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th>
                          Produk
                      </th>
                      <th>
                          Harga
                      </th>
                      <th width="1px">
                          Tanggal
                      </th>
                      <th>
                          ID Cust
                      </th>
                      <th>
                          Kurir
                      </th>
                      <th>
                          Bukti Tf
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
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
        </div>

      </div>

    </div>