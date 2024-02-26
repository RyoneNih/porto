<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas B Indl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <h1>
            Dicoding Pak Ari
        </h1>
        <p>    
            <p>Pada suatu hari yang cerah di Wikrama..</p>
    
            <p>Lokasi : Kantin</p>
            <p>Minggu : Produktif</p>
            
            <p>1 : Haloo 2 yang sangat tampan dan rajin menabung</p>
            <p>2 : haa kenapa?</p>
            <p>1 : gpp nyapa doang</p>
            
            <p>Jeda beberapa detik</p>
            
            <p>1 : Eh 2, Tugas dari pak ari udah belum?</p>
            <p>2 : Yg mana?</p>
            <p>1 : itu project kemarin, kan ada</p>
            <p>2 : Projectku kan beda dengan kalian, aku dapat project mandiri kemarin</p>
            <p>1 : Ini loo, yang membuat sertifikat di Dicoding, aku belum selesai</p>
            <p>2 : wah asli?</p>
            <p>1 : Iya asliii, bantuin dong</p>
            <p>2 : bantu kek mana</p>
            <p>1 : Yaaa kodingin hehe (Senyum)</p>
            <p>2 : Dih enak aja...., udah panjang, lama, males, mana belum tentu keterima juga</p>
            <p>1 : Udh pasti keterima, kamu kan jagoooo</p>
            <p>2 : boro boro ngodingin project mu, aku aja lagi pusing ma project ku</p>
            <p>1 : ku kasih bayaran deh</p>
            <p>2 : berapa coba</p>
            <p>1 : eeee goceng deh</p>
            <p>2 : Dih goceng, 20 rebu lah minimal gilaa</p>
            <p>1 : yaudah 15, gimana?</p>
            <p>2 : untung nya gw ngodingin kau apaan coba</p>
            <p>1 : ya dapat duit</p>
            <p>2 : udah gtu doang? mana cuma 15</p>
            <p>1 : pliss dongg, bantu gw pliss, otak gw udah mo meledak</p>
            <p>2 : (jeda sekitar beberapa detik dengan wajah berpikir)</p>
            <p>1 : yaudah ntar jatah makan malam gw lu ambil aja deh</p>
            <p>2 : Asli?</p>
            <p>1 : iyaaa, mangkanya mau dong</p>
            <p>2 : bener ya?</p>
            <p>1 : iyaaa aslii (nyentil kuping)</p>
            <p>2 : Oke, gw bantu</p>
            <p>1 : YESSS makasihh</p>
            <p>2 : hmm</p>
            
           <p> Si 2 pun membuat code yang di minta untuk membantu 1 dan akhirnya mendapat jatah makan malam dan uang 15k</p>
        </p>
    <a href="?page=chat" class="btn btn-primary">Chat Anggota Kelompok</a>
    </div>
    <?php
    if (isset($_GET['page'])){
        $halaman = $_GET['page'];

        switch ($halaman) {
            case 'chat';
            include 'chat.php';
            break;
        }
    }
    ?>
</body>
</html>