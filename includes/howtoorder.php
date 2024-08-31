<!-- JANGAN LUPA DI IMPORT D INDEX -->
<div class="modal" id="howtoorder">
    <div class="modal-content" style="width: 1000px; height: 600px; background-color: #fff; ">
        <span onclick="openmodal('howtoorder',false)" style="cursor: pointer; font-size: 50px; font-weight: 600; top: 12px; left: 20px; position: relative;">&times;</span>
        <div style="padding: 30px; display: flex;">
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
                        <input type="radio" name="payment">
                        <img style="height: 100px; object-fit: cover;" src="assets/images/qris.jpeg" alt="">
                    </div>
                    <div style="display: flex; width: 50%; align-items: center;">
                        <input type="radio" name="payment">
                        <img style="height: 40px; object-fit: cover;" src="assets/images/mastercard.png" alt="">
                    </div>
                    <div style="display: flex; width: 50%; align-items: center;">
                        <input type="radio" name="payment">
                        <img style="height: 30px; object-fit: cover;" src="assets/images/paypal.png" alt="">
                    </div>
                    <div style="display: flex; width: 50%; align-items: center;">
                        <input type="radio" name="payment">
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
                    Payment Method: <br>
                    Payment Date: <br>
                    Time: <br>
                    <span style="font-weight: 600;">Total</span>
                </p>
                <p style="color: gray; font-weight: 600;">
                    Bruno on Stage<br>
                    1277810<br>
                    Gold VIP<br>
                    2 Ticket<br>
                    7.650.000<br>
                    QRIS<br>
                    Sep 13 & 14, 2024<br>
                    09:00 PM WIB<br>
                    <span style="font-weight: 600;">IDR 7.650.000</span>
                </p>
                </div>
                <p style="color: blueviolet;">Confirmation of approval of concert regulations</p>
                <input type="checkbox">I agree with the terms
                <button style="width: 100px; margin-top: 10px; display: block; height: 40px; font-weight: 00; color: #000; font-size: 20px; background-color: #D1AB34; border-radius: 20px; border: none;">Submit</button>
            </div>
        </div>
    </div>
</div>