<div style="display: flex; margin: 40px; flex-direction: row; font-family: 'League'; padding-top: 60px; align-items: center; justify-content: center;" id="ticket">
    <div style="width: 50%; overflow-y: auto">
        <div>
            <h3>Gold vip</h3>
            <img src="assets/images/vip.png" style="width: 95%;" alt="">
            <div style="display: flex; padding: 20px; width: 90%; border-radius: 10px; border: 3px orange solid; flex-direction: column;">
                <div style="display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="display: flex; height: 40px; justify-content: space-between; align-items: center;">
                        <h3>Description</h3>
                        <h1>></h1>
                    </div>
                    <p style="margin: 0; padding: 0;">Experience the concert from an exclusive area with the best views and premium amenities. Enjoy unparalleled comfort and luxury as you immerse yourself in the event from our Gold VIP section, designed for those who desire an extraordinary concert experience.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                    <p>Price</p>
                    <h3>IDR 70000</h3>
                    </div>
                    <div style="display: flex; gap: 30px; align-items: center;">
                        <h3>0</h3>
                        <button style="width: 50px; height: 40px; font-weight: 600; color: #fff; font-size: 30px; background-color: #250043; border-radius: 10px;">+</button>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                    <p>Total</p>
                    <h3>IDR 70000</h3>
                    </div>
                    <button onclick="openmodal('howtoorder',true)" style="width: 150px; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;">Buy Now</button>
                </div>

            </div>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <h2 style="margin-bottom: 2px orange solid;">TICKET AND MERCHANDISE</h2>
        <p>If you want to buy tickets and don't know how to buy them, please click the button below</p>
        <button data-modal="#howtoorder" onclick="openmodal('howtoorder',true)" style="width: 150px; float: left; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;">How to Order</button>
        <p>Some of the benefits you get if you buy a number of tickets are:</p>
        <div >
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
                <img src="assets/images/buku.webp"style="width: 100px; height: 100px;" alt="">
                <img src="assets/images/ticketfinal.png" style="height: 100px; object-fit: cover;" alt="">
                <span style="position: relative; right: 20px; font-weight: 600; ">1X</span>
                <p style="width: 100px;">1 button pack for purchasing 1 ticket for Festival A area</p>
            </div>
        </div>
        <button style="width: 150px; height: 40px; font-weight: 400; color: #fff; font-size: 20px; background-color: #250043; border-radius: 10px;">SEE MORE</button>
    </div>
</div>