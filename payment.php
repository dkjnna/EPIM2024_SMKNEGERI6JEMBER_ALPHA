<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin: 0; padding: 0; ">
    <div style="display: flex; gap: 20px; padding: 20px 300px 150px 250px; background-color: #250043;  width: 100vw; height: 200px;  align-items: center;">
        <img style="height: 150px; object-fit: cover;" src="assets/images/logo.png" alt="">
        <a style="color: #fff; font-size: 24px; text-decoration: none; border-bottom: #fff 2px solid;" href="#">Payment</a>
        <a style="color: #fff; font-size: 24px; text-decoration: none;" href="#">Get ticket</a>
    </div>
    <div style="width: 70vw; margin: 0 auto; background-color: #fff; padding: 50px; display: flex; gap: 50px; box-shadow:7px 7px rgb(1, 1, 1, 0.2) ; flex-direction: row; flex-wrap: wrap; position: relative; top: -200px;">
        <div style="width: 45%; display: flex; flex-direction: column; gap: 20px;"> 
            <p>You are making a payment via QRIS. Please complete the payment by scanning the QR code below</p>
            <div style="display: flex; gap: 10px; border-radius:20px ; border: #FCCD00 2px solid; overflow: hidden;">
                <h3 style="width: 100px; margin: 0; height: 100%; background-color: #FCCD00; display: flex; align-items: center; justify-content: center;">2:00:00</h3>
                <p style="display: flex; margin: 0; align-items: center; justify-content: center;">If the time limit is exceeded, the order will be canceled</p>
            </div>    
            <div style="display: flex;">
                <img style="height: 200px; object-fit: cover;" src="assets/images/qrcode.jpeg" alt="">
                <div>
                    <h4>Scan the QR code below to make payment</h4>
                    <p>
                        1. Open your banking or e-wallet app.<br>
                        2. Select 'Scan QR.'<br>
                        3. Scan the QRIS code.<br>
                        4. Verify payment details.<br>
                        5. Confirm the payment.<br>
                        6. Enter your PIN or use biometric authentication.<br>
                        7. Receive confirmation.<br>
                        8. Save the receipt. <br>
                    </p>
                    <button style="width: 230px; height: 50px; font-weight: 600; color: #000; font-size: 20px; background-color:transparent;   border: 2px #FCCD00 solid;border-radius: 20px;">
                        Confirm Payment
                    </button>
                </div>
            </div>
        </div>
        <div style="width: 45%; display: flex; flex-direction: column; background-color:rgb(218, 190, 254,0.2) ; padding: 10px; border-radius: 20px;">
            <h3 style="border-bottom: 2px #000 solid;">order number</h3>
            <p style="text-align: end; width: 100%; margin: 0;">089812769</p>
            <h3 style="border-bottom: 2px #000 solid;">order details</h3>
            <p style="text-align: end; width: 100%; margin: 0;">Bruno Mars Concert Tickets</p>
            <p style="text-align: end; width: 100%; margin: 0;">Live in Jakarta - Cat 1</p>
            <p style="text-align: end; width: 100%; margin: 0;">1</p>
            <p style="text-align: end; width: 100%; margin: 0;">September 14th 2024</p>
            <h3 style="border-bottom: 2px #000 solid;">payment details</h3>
            <p style="text-align: end; width: 100%; margin: 0;">IDR 7,560,000.00</p>
            <p style="text-align: end; width: 100%; margin: 0;">QRIS Payment Method</p>
        </div>
    </div>
</body>

</html>