<div class="ticket" id="ticket" style="display: flex; flex-wrap: wrap; ">
    <div style="width: 50%; overflow-y: auto">

        <?php $ticket = mysqli_query($koneksi, "SELECT * FROM ticket");
        if(isset($_GET['qty']) && isset($_GET['id_ticket'])){
            $qty = $_GET['qty'];
            $id_ticket = $_GET['id_ticket'];
        }else{
            $qty=0;
            $id_ticket = 0;
        }

        while ($row = mysqli_fetch_array($ticket)) {
        ?>

            <div>
                <h3><?= $row['jenis'] ?></h3>
                <img src="assets/images/vip.png" style="width: 95%;" alt="">
                <form method="get" action="#ticket" style="display: flex; padding: 20px; width: 90%; border-radius: 10px; border: 3px orange solid; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div style="display: flex; height: 40px; justify-content: space-between; align-items: center;">
                            <h3>Description</h3>
                            <h1>></h1>
                        </div>
                        <p style="margin: 0; padding: 0;"><?= $row['deskripsi'] ?></p>

                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <p>Price</p>
                            <h3>IDR <?= $row['harga'] ?></h3>
                        </div>
                        <div style="display: flex; gap: 30px; align-items: center; ">
                            <select name="qty" id="" style="width: 50px; height: 40px;border-radius: 10px; border: gray 2px solid; font-size: 18x; padding: 10px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <input type="hidden" value="<?= $row['id'] ?>" name="id_ticket">
                
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <button type="submit" style="width: 150px; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;">Buy Now</button>
                    </div>

                </form>
            </div>
            <!-- JANGAN LUPA DI IMPORT D INDEX -->
             <?php
if(  $id_ticket  == $row['id']){
    $show = 'flex';
}else{
    $show = 'none';
}
             ?>
            <div class="modal" id="purchase<?= $row['id'] ?>"  style="font-family: 'League'; display: <?= $show ?>;" >
                <div class="modal-content" style="width: 1000px; height: 600px; background-color: #fff; ">
                    <div class="" style=" height:60px;background-color: #250043; justify-content: center; align-items: center;">
                        <span onclick="openmodal('purchase<?= $row['id'] ?>',false)" style="cursor: pointer; font-size: 30px; font-weight: 600; top: 12px; left: 20px; position: relative; color:#fff; padding: 10px;">x</span>

                    </div>
                    <form action="controller/beliticket.php" method="post" style="padding: 30px; display: flex;">
                        <div style="width: 50%; display: flex; flex-direction: column ; gap: 10px; overflow-x: auto; height: 500px;">
                            <h3>Personal Information</h3>
                            <div>
                                <label for="">Name</label>
                                <input type="text" name="nama" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                            </div>
                            <div style="display: flex; gap: 20px;">
                                <div style="display: flex; width: 50%; flex-direction: column;">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="no_hp" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                                </div>
                                <div style="display: flex; width: 50%; flex-direction: column;">
                                    <label for="">Email</label>
                                    <input type="text" name="email" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                                </div>
                            </div>
                            <label for="">Gender</label>
                            <div>
                                <input type="radio" name="kel" value="man">
                                <label for="">Man</label>
                            </div>
                            <div>
                                <input type="radio" name="kel" value="woman">
                                <label for="">Woman</label>
                            </div>
                            <h3>Billing address</h3>
                            <div>
                                <label for="">City</label>
                                <input type="text" name="kota" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                            </div>
                            <div>
                                <label for="">Province</label>
                                <input type="text" name="provinsi" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                            </div>
                            <div>
                                <label for="">Completing Address</label>
                                <input type="text" name="alamat_lanjutan" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                            </div>
                            <div>
                                <label for="">Postal Kode</label>
                                <input type="text" name="kode_pos" style="width: 100%; height: 30px; background-color:#D9D9D9; border: none; border-radius: 10px;">
                            </div>
                            <h3>Payment Method</h3>
                            <div style="display: flex; flex-wrap: wrap;">
                                <div style="display: flex; width: 50%; align-items: center;">
                                    <input type="radio" name="payment" value="qris">
                                    <img style="height: 100px; object-fit: cover;" src="assets/images/qris.jpeg" alt="">
                                </div>
                                <div style="display: flex; width: 50%; align-items: center;">
                                    <input type="radio" name="payment" value="mastercard">
                                    <img style="height: 40px; object-fit: cover;" src="assets/images/mastercard.png" alt="">
                                </div>
                                <div style="display: flex; width: 50%; align-items: center;">
                                    <input type="radio" name="payment" value="paypal">
                                    <img style="height: 30px; object-fit: cover;" src="assets/images/paypal.png" alt="">
                                </div>
                                <div style="display: flex; width: 50%; align-items: center;">
                                    <input type="radio" name="payment" value="visa">
                                    <img style="height: 30px; object-fit: cover;" src="assets/images/visa.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="margin: 20px 0 0 0 ; padding: 0;">Payment Method</h3>
                            <div style="display: flex;">
                                <p style="color: gray; font-weight: 600;">
                                    Event Name: <br>
                                    Ticket Number: <br>
                                    Category: <br>
                                    Ticket Quantity: <br>
                                    Ticket Price: <br>
                                    Payment Date: <br>
                                    Time: <br>
                                    <span style="font-weight: 600;">Total</span>
                                </p>
                                <p style="color: gray; font-weight: 600;">
                                    Bruno on Stage<br>
                                    1277810<br>
                                    <?= $row['jenis'] ?><br>
                                    <input type="hidden" name="id" value=" <?= $row['id'] ?>">
                                    <input type="hidden" name="id_konser" value=" <?= $row['id_konser'] ?>">
                                    <?= $qty ?> Ticket<br>
                                    <?= $row['harga'] ?><br>
                                    Sep 13 & 14, 2024<br>
                                    09:00 PM WIB<br>
                                    <span style="font-weight: 600;">IDR  <?php 
                                    $total = $qty*$row['harga'];
                                    echo $total; ?></span>
                                    <input type="hidden" name="id" value=" <?= $total ?>">
                                </p>
                            </div>
                            <p style="color: blueviolet;">Confirmation of approval of concert regulations</p>
                            <input type="checkbox">I agree with the terms
                            <!-- <button style="width: 100px; margin-top: 10px; display: block; height: 40px; font-weight: 00; color: #000; font-size: 20px; background-color: #D1AB34; border-radius: 20px; border: none;"><a href="payment.php">Submit</a></button> -->
                            <button type="submit" style="width: 100px; margin-top: 10px; display: block; height: 40px; font-weight: 00; color: #000; font-size: 20px; background-color: #D1AB34; border-radius: 20px; border: none;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>





        <?php } ?>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <h2 style="margin-bottom: 2px orange solid;">TICKET AND MERCHANDISE</h2>
        <p>If you want to buy tickets and don't know how to buy them, please click the button below</p>
        <button data-modal="#howtoorder" onclick="openmodal('howtoorder',true)" style="width: 150px; float: left; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;">How to Order</button>
        <p>Some of the benefits you get if you buy a number of tickets are:</p>
        <div>
            <div style="display: flex; flex-direction: row; justify-content: space-around; margin: 20px 10px; gap: 20px ; ">
                <img src="assets/images/sonic.jpg" style="width: 100px; height: 100px;" alt="">
                <img src="assets/images/ticketfinal.png" style="height: 100px; object-fit: cover;" alt="">
                <span style="position: relative; right: 20px; font-weight: 600; ">3X</span>
                <p style="width: 100px;">1 LPs for 3 ticket purchases in Cat 1 region</p>
            </div>
            <div style="display: flex; flex-direction: row; justify-content: space-around; margin: 20px 10px; gap: 20px ; ">
                <img src="assets/images/baju.webp" style="width: 100px; height: 100px;" alt="">
                <img src="assets/images/ticketfinal.png" style="height: 100px; object-fit: cover;" alt="">
                <span style="position: relative; right: 20px; font-weight: 600; ">2X</span>
                <p style="width: 100px;">1 exclusive sweater for purchasing 2 tickets for the Cat 2 area</p>
            </div>
            <div style="display: flex; flex-direction: row; justify-content: space-around; margin: 20px 10px; gap: 20px ; ">
                <img src="assets/images/buku.webp" style="width: 100px; height: 100px;" alt="">
                <img src="assets/images/ticketfinal.png" style="height: 100px; object-fit: cover;" alt="">
                <span style="position: relative; right: 20px; font-weight: 600; ">1X</span>
                <p style="width: 100px;">1 button pack for purchasing 1 ticket for Festival A area</p>
            </div>
        </div>
        <button style="width: 150px; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;" onclick="openmodal('seemore',true)">SEE MORE</button>
    </div>
</div>