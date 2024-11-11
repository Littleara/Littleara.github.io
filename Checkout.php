<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="new-launching.php">Produk New Launching</a></li>
            <li><a href="best-seller.php">Best Seller</a></li>
            <li><a href="checkout.php">Checkout</a></li>
        </ul>
    </nav>
    <header>
        <h1>Checkout</h1>
        <form action="process_checkout.php" method="POST">
            <label for="name">Nama Lengkap:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="address">Alamat Pengiriman:</label><br>
            <input type="text" id="address" name="address"><br><br>
            <label for="payment">Metode Pembayaran:</label><br>
            <select id="payment" name="payment">
                <option value="credit">Kartu Kredit</option>
                <option value="bank">Transfer Bank</option>
            </select><br><br>
            <input type="submit" value="Selesaikan Pembelian">
        </form>
    </header>
</body>
</html>
