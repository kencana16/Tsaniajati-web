<div class="col-md-7 mx-auto"><?= $this->session->flashdata('message');?></div>

<div class="row col-md-12 mx-auto p-5 bg-light">
    <div class="col-md-12 mx-auto">
    <?php foreach($preorder as $pr){ ?>
        <h1 class="text-black font-weight-bold text-center">PRE-ORDER</h1>
        <h3 class="text-black font-weight-bold text-center m-0"><?php echo $pr['prod_name']; ?></h3>
    <br>
    </div>
    <div class="row col-md-12 mx-auto">
        <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
    </div>

    <!-- FORM -->
    <div class="row col-md-10 bg-white mt-3 mx-auto shadow rounded p-5">
        <div class="col-md-4 border p-2">
            <img class="d-block w-100" src="<?= base_url('gambar/'). $pr['prod_img'];?>" alt="First slide">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 border p-3 rounded">
            <h5 class="badge badge-warning"><?= $pr['cat_name']; ?></h5>
            <h4 class="font-weight-bold"><?= $pr['prod_name']; ?></h4>
            <span class="font-weight-bold font-italic text-gray">"</span>
            <small class="font-italic text-gray">
                <?php
                if(!$pr['prod_desc']){
                    echo 'Tidak ada deskripsi';
                }else{
                    echo $pr['prod_desc'];
                }
                ?>
            </small>
            <span class="font-weight-bold font-italic text-gray">"</span>
            <hr>
            <table>
                <tr valign="top">
                    <td width="50px"><h6 class="text-gray font-italic">Harga</h6></td>
                    <td>
                        <h4 class="text-danger font-weight-bold ml-3">Rp. <?= number_format($pr['prod_price']) ?>,-</h4>
                    </td>
                </tr>
            </table>
            <hr>
            <div class="row col-md-5">
                <?= form_open_multipart('cart/po'); ?>
                    <table class="table">
                        <tr>
                            <input type="hidden" name="prod_id" value="<?= $pr["prod_id"]?>">
                            <input type="hidden" name="prod_name" value="<?= $pr["prod_name"]?>">
                            <input type="hidden" name="prod_price" value="<?= $pr["prod_price"]?>">

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
                    </table>
                    <div class="text-right">
                        <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-money"></i> Checkout Pree Order</button>
                    </div>
                </form>
            </div>
                <div class="alert alert-light mt-2" role="alert">
                    <b class="text-danger">Peringatan!</b> total bayar, belum termasuk dengan <b class="text-dark">Ongkos Kirim</b>
                </div>
        </div>
    </div>

    <?php } ?>
</div>