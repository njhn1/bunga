<?php
// 1. Parent Class: Bunga
class Bunga {
    public $namaBunga;
    public $warnaBunga;

    public function __construct($namaBunga, $warnaBunga) {
        $this->namaBunga = $namaBunga;
        $this->warnaBunga = $warnaBunga;
    }

    public function getInfoBunga() {
        return "Nama Bunga: " . $this->namaBunga .
               "<br>Warna Bunga: " . $this->warnaBunga;
    }
}

// 2. Child Class: BungaMawar
class BungaMawar extends Bunga {
    public $jumlahKelopak;

    public function __construct($namaBunga, $warnaBunga, $jumlahKelopak) {
        parent::__construct($namaBunga, $warnaBunga);
        $this->jumlahKelopak = $jumlahKelopak;
    }

    public function getInfoBunga() {
        return parent::getInfoBunga() .
               "<br>Jumlah Kelopak: " . $this->jumlahKelopak;
    }
}

// 3. Child Class: BungaAnggrek
class BungaAnggrek extends Bunga {
    public $jumlahTangkai;

    public function __construct($namaBunga, $warnaBunga, $jumlahTangkai) {
        parent::__construct($namaBunga, $warnaBunga);
        $this->jumlahTangkai = $jumlahTangkai;
    }

    public function getInfoBunga() {
        return parent::getInfoBunga() .
               "<br>Jumlah Tangkai: " . $this->jumlahTangkai;
    }
}

// 4. Membuat objek BungaMawar
$bungaMawar = new BungaMawar("Mawar", "Merah", 20);

// 5. Membuat objek BungaAnggrek
$bungaAnggrek = new BungaAnggrek("Anggrek", "Ungu", 3);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Bunga</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background: #fdf2f8;
            background-image:
                radial-gradient(at 0% 0%, rgba(236, 72, 153, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(167, 139, 250, 0.15) 0px, transparent 50%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            color: #1e293b;
        }

        .container {
            width: 100%;
            max-width: 800px;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header .emoji {
            font-size: 3rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #831843;
            line-height: 1.1;
        }

        .subtitle {
            color: #9d174d;
            opacity: 0.7;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 700px) {
            .grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .card {
            background: white;
            border-radius: 24px;
            padding: 1.8rem;
            box-shadow: 0 10px 30px rgba(190, 24, 93, 0.08);
            border: 1px solid #fce7f3;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(190, 24, 93, 0.12);
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
        }

        .card.mawar::before {
            background: linear-gradient(90deg, #f43f5e, #fb7185);
        }

        .card.anggrek::before {
            background: linear-gradient(90deg, #8b5cf6, #c084fc);
        }

        .badge {
            display: inline-block;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 1.2rem;
        }

        .mawar .badge {
            background: #ffe4e6;
            color: #be123c;
        }

        .anggrek .badge {
            background: #ede9fe;
            color: #6d28d9;
        }

        .card h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            color: #1e293b;
        }

        .card p {
            line-height: 2;
            font-size: 0.95rem;
            color: #475569;
        }

        .card p br {
            margin-bottom: 0.2rem;
        }

        .footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.85rem;
            color: #9d174d;
            opacity: 0.6;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <span class="emoji">🌸</span>
            <h1>Klasifikasi Bunga</h1>
            <p class="subtitle">Inheritance • 1 Induk (Bunga) + 2 Anak (Mawar & Anggrek)</p>
        </div>

        <div class="grid">
            <div class="card mawar">
                <span class="badge">🌹 Bunga Mawar</span>
                <h2>Informasi Bunga Mawar</h2>
                <p>
                    <?php echo $bungaMawar->getInfoBunga(); ?>
                </p>
            </div>

            <div class="card anggrek">
                <span class="badge">💜 Bunga Anggrek</span>
                <h2>Informasi Bunga Anggrek</h2>
                <p>
                    <?php echo $bungaAnggrek->getInfoBunga(); ?>
                </p>
            </div>
        </div>

        <p class="footer">Dibuat dengan PHP OOP - Class Bunga</p>
    </div>

</body>
</html>