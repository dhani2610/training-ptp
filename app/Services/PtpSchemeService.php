<?php

namespace App\Services;

use Illuminate\Support\Str;

class PtpSchemeService
{
    /**
     * Daftar 6 Master Program Training Operator PTP (Pesawat Tenaga dan Produksi) Profesional & Sertifikasi Resmi
     */
    public static function getMasterPrograms(): array
    {
        return [
[
                'title' => 'Training Operator Penggerak Mula (Genset, Motor Diesel & Turbin PTP)',
                'slug' => 'training-operator-penggerak-mula-genset-diesel-turbin',
                'category' => 'Operator Penggerak Mula PTP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 3850000,
                'rating' => 4.9,
                'reviews_count' => 340,
                'badge' => 'Sertifikasi Operator Penggerak Mula Resmi',
                'description' => 'Program pelatihan dan sertifikasi kompetensi pengoperasian mesin penggerak mula industri, meliputi generator set (genset), motor diesel pembakaran dalam, dan turbin tenaga berkapasitas besar.',
                'overview' => 'Mesin Penggerak Mula merupakan tulang punggung penyedia energi kinetik dan daya listrik di kawasan industri, pabrik manufaktur, pertambangan, dan fasilitas komersial. Pelatihan Operator Penggerak Mula (Pesawat Tenaga dan Produksi) dirancang untuk membekali operator dengan pemahaman komprehensif mengenai prinsip kerja motor bakar diesel, turbin gas/uap, sistem transmisi fluida, dan generator listrik industri. Peserta dibimbing melakukan pemeriksaan pra-operasional (pre-operational checks), pemantauan parameter krusial saat unit beroperasi (suhu oli pelumas, tekanan pendingin, getaran bearing, RPM mesin, dan exhaust gas temperature), serta tindakan tanggap darurat saat terjadi ketidaknormalan (overspeed, oil pressure drop, overheat, atau surging) guna menjamin keandalan suplai daya dan keselamatan kerja maksimal.',
                'target_audience' => [
                    'Operator genset pembangkit listrik industri, pabrik, dan gedung komersial',
                    'Teknisi mesin diesel dan mekanik utilitas pembangkit tenaga mekanik',
                    'Operator turbin uap, turbin gas, dan motor bakar industri',
                    'Supervisor utilitas daya dan penanggung jawab kelistrikan pabrik',
                    'Personel K3 dan safety officer divisi utilitas mekanik industri'
                ],
                'curriculum' => [
                    'Prinsip Dasar dan Regulasi Standar Keselamatan Pesawat Tenaga dan Produksi (PTP)',
                    'Termodinamika Dasar dan Siklus Kerja Motor Diesel 4-Langkah & 2-Langkah',
                    'Anatomi dan Komponen Utama Penggerak Mula: Blok Silinder, Crankshaft, Piston, Turbocharger, dan Governor',
                    'Sistem Pelumasan, Filtrasi Oli, dan Analisis Viskositas Pelumas Mesin',
                    'Sistem Pendinginan Mesin: Radiator, Heat Exchanger, Water Jacket, dan Kualitas Coolant',
                    'Sistem Bahan Bakar Diesel: Common Rail Fuel Injection, Water Separator, dan Fuel Purifier',
                    'Prosedur Start-Up, Warming-Up, Synchronization, dan Shut-Down Generator Set',
                    'Proteksi Keamanan Penggerak Mula: Sensor Overspeed, Low Oil Pressure, High Water Temp, dan Interlock',
                    'Inspeksi Getaran (Vibration Check) dan Analisis Suara Abnormal Bantalan Poros',
                    'Uji Evaluasi Teori dan Praktik Pengoperasian Penggerak Mula PTP'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK Jurusan Teknik Mesin, Otomotif, Listrik, atau sederajat',
                    'Berbadan sehat jasmani dan rohani, tidak buta warna, dibuktikan dengan surat keterangan dokter',
                    'Memiliki pengalaman atau ketertarikan di bidang pemeliharaan dan pengoperasian mesin pembangkit',
                    'Pasfoto resmi berlatar belakang merah ukuran 3x4 (3 lembar)',
                    'Fotokopi ijazah terakhir dan kartu identitas diri (KTP/SIM)'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Operator Penggerak Mula PTP Resmi & Lisensi Kartu Operator',
                    'Buku Modul Teknis Lengkap & SOP Pengoperasian Penggerak Mula Industri',
                    'Akses Workshop Praktik Unit Genset Industri & Engine Test Bed Modern',
                    'Instruktur Senior Bersertifikasi Praktisi Ahli Mesin Pembangkit',
                    'Training Kit Eksklusif (Safety Vest, Helmet, Wearpack Emblem, Buku Saku)',
                    'Konsumsi Makan Siang, Snack, dan Coffee Break selama Pelatihan'
                ],
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Operator Penggerak Mula (Genset & Mesin Diesel PTP) | Sertifikasi Resmi',
                'meta_description' => 'Pelatihan dan sertifikasi resmi operator penggerak mula PTP. Kuasai pengoperasian aman genset industri, motor diesel, turbin daya, dan prosedur keselamatan mesin pembangkit.'
            ],
            [
                'title' => 'Training Operator Mesin Perkakas & Pemesinan Logam (Bubut, Frais, CNC & Grinding)',
                'slug' => 'training-operator-mesin-perkakas-pemesinan-logam-cnc',
                'category' => 'Operator Mesin Perkakas PTP',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 4200000,
                'rating' => 4.9,
                'reviews_count' => 312,
                'badge' => 'Sertifikasi Operator Mesin Perkakas Resmi',
                'description' => 'Pelatihan keahlian pengoperasian aman mesin perkakas pemotongan dan pembentukan logam presisi: mesin bubut (lathe), mesin frais (milling), mesin CNC, dan mesin gerinda industri.',
                'overview' => 'Mesin Perkakas merupakan peralatan vital dalam industri manufaktur, bengkel rekayasa teknik (machining workshop), dan fabrikasi logam. Tingginya putaran spindel mesin perkakas menimbulkan risiko kecelakaan fatal seperti terlilit benda kerja, terlempar serpihan tatal tajam (chips), atau patahnya pahat pemotong. Pelatihan Operator Mesin Perkakas (PTP) membekali peserta dengan keterampilan teknis pengoperasian mesin bubut konvensional dan CNC, mesin frais vertikal/horizontal, mesin sekrap, gurdi (drilling), serta mesin gerinda (grinding machine). Penekanan utama diberikan pada kepatuhan penggunaan alat pelindung mesin (chuck guard, chip shield), pemilihan cutting speed & feed rate yang aman, penanganan benda kerja berbobot berat, prosedur ring test batu gerinda, serta pembiasaan budaya keselamatan kerja (zero contact risk).',
                'target_audience' => [
                    'Operator mesin perkakas konvensional (bubut, frais, bor, gerinda, sekrap)',
                    'Operator dan programmer mesin CNC bubut (turning) dan CNC milling',
                    'Toolmaker, teknisi mold and die, serta mekanik workshop fabrikasi',
                    'Supervisor produksi bengkel pemesinan dan rekayasa mekanik',
                    'Ahli K3 dan inspektur keselamatan kerja bengkel pemesinan'
                ],
                'curriculum' => [
                    'Regulasi Keselamatan Kerja Pengoperasian Mesin Perkakas Pesawat Tenaga dan Produksi',
                    'Karakteristik dan Dinamika Pemotongan Logam: Gaya Potong, Kecepatan Spindel, dan Laju Pemakanan',
                    'Keselamatan Mesin Bubut (Lathe): Pemasangan Chuck Guard, Penyetelan Tool Post, dan Penjepitan Benda Kerja Aman',
                    'Mitigasi Bahaya Terlilit (Entanglement Hazard): Larangan Sarung Tangan Longgar, Pakaian Ketat Khusus, dan Pelindung Rambut',
                    'Keselamatan Mesin Frais (Milling Machine): Pemasangan Ragum Presisi, Klem Meja, dan Pengarah Tatal Logam',
                    'Prosedur Pengoperasian Aman Mesin Pusat Pemesinan CNC: Safety Door Interlock, Dry Run, dan Emergency Stop',
                    'Standar Keselamatan Mesin Gerinda (Grinding): Pemeriksaan Suara Batu Gerinda (Ring Test), Flange Mount, dan Tool Rest Gap',
                    'Sistem Penyaluran Cairan Pendingin (Coolant Mist Extraction) dan Penanganan Bahaya Debu Logam Halus',
                    'Prosedur Lockout Tagout (LOTO) saat Pembersihan Tatal dan Penggantian Mata Pahat',
                    'Uji Teori Standar Perkakas dan Praktik Pemesinan Benda Uji Presisi Bersertifikat'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK Jurusan Teknik Pemesinan, Mekanik Industri, atau sederajat',
                    'Sehat jasmani dan rohani, ketajaman visual baik dan tidak buta warna',
                    'Memiliki pengalaman dasar atau bertugas di unit bengkel mesin perkakas',
                    'Membawa safety shoes dan wearpack kerja standar workshop',
                    'Pasfoto resmi 3x4 latar belakang merah (3 lembar) dan fotokopi KTP'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Operator Mesin Perkakas PTP Resmi & Lisensi Operator',
                    'Buku Panduan Standar Operasional Pemesinan Aman & Modul Workshop',
                    'Akses Fasilitas Mesin Bubut, Milling, CNC, dan Grinding Workshop Lengkap',
                    'Instruktur Master Pemesinan Industri & Praktisi K3 Mesin Bersertifikat',
                    'Perlengkapan APD Praktik (Kacamata Safety ANSI Z87, Earplug, Rompi Safety)',
                    'Konsumsi Makan Siang, Snack, dan Sertifikat Kelulusan Resmi'
                ],
                'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Operator Mesin Perkakas (Bubut, Frais, CNC, Grinding) PTP | Sertifikasi Resmi',
                'meta_description' => 'Pelatihan dan sertifikasi operator mesin perkakas PTP resmi. Standar keselamatan bubut, frais, CNC turning/milling, dan gerinda industri berstandar nasional.'
            ],
            [
                'title' => 'Training Operator Mesin Produksi & Press Stamping Logam PTP',
                'slug' => 'training-operator-mesin-produksi-press-stamping-logam',
                'category' => 'Operator Mesin Produksi PTP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 3950000,
                'rating' => 4.9,
                'reviews_count' => 295,
                'badge' => 'Sertifikasi Operator Mesin Produksi & Press Resmi',
                'description' => 'Pelatihan kompetensi pengoperasian mesin press mekanik/hidrolik, stamping logam, mesin potong plat (shearing), mesin bending, dan mesin injection molding industri.',
                'overview' => 'Mesin Produksi dan Press Stamping merupakan peralatan pembentuk logam berenergi tinggi yang memiliki titik bahaya jepit (pinch point) berdaya hancur puluhan hingga ratusan tonase. Tanpa kepatuhan prosedur pengamanan, risiko kecelakaan kerja seperti amputasi jari tangan dan benturan material sangat tinggi. Pelatihan Operator Mesin Produksi & Press Stamping Logam (PTP) memfokuskan pada pemahaman menyeluruh terhadap arsitektur keselamatan mesin press: pengujian sensor tirai cahaya inframerah (light curtain), sistem kendali dua tangan (two-hand control system), interlock gerbang fisik, serta mekanisme rem kopling (clutch and brake system). Peserta juga dilatih melakukan prosedur setup cetakan (die setup & clamping) yang benar, pengoperasian mesin potong plat (shearing machine), mesin tekuk (press brake), serta mesin cetak plastik injeksi dengan penekanan pada prinsip zero accident.',
                'target_audience' => [
                    'Operator mesin press mekanik (power press) dan press hidrolik (hydraulic press)',
                    'Operator mesin stamping logam otomotif dan komponen elektronik',
                    'Operator mesin shearing (potong plat) dan press brake (tekuk plat)',
                    'Operator mesin roll forming dan mesin injection molding plastik industri',
                    'Supervisor lini produksi fabrikasi logam dan safety officer stamping'
                ],
                'curriculum' => [
                    'Regulasi Standar Keselamatan Mesin Produksi Pesawat Tenaga dan Produksi',
                    'Klasifikasi Mesin Press: Part Revolution vs Full Revolution Clutch Press System',
                    'Identifikasi Titik Bahaya Operasi (Point of Operation Danger Zones) pada Matriks Cetakan (Die)',
                    'Sistem Pengaman Sensorik: Prinsip Kerja, Jarak Aman (Safety Distance), dan Uji Tirai Cahaya (Light Curtain)',
                    'Sistem Kendali Dua Tangan (Two-Hand Control): Standar Waktu Sinkronisasi dan Anti-Tie Down',
                    'Prosedur Aman Pemasangan dan Penyetelan Cetakan (Die Setting, Bolster Clamping, dan Counterbalance)',
                    'Standar Keselamatan Mesin Potong Plat (Guillotine Shearing): Finger Guard dan Hold-Down Clamp',
                    'Standar Keselamatan Mesin Bending (Press Brake): Back Gauge Setup dan Laser Guarding System',
                    'Prosedur Penguncian Energi Bahaya (LOTO) dan Penggunaan Safety Die Block saat Maintenance',
                    'Evaluasi Uji Kompetensi Teori dan Praktik Pengoperasian Mesin Press PTP'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK sederajat',
                    'Sehat fisik dan mental, memiliki refleks motorik yang baik dan bebas cacat fungsi tangan',
                    'Bebas buta warna, dibuktikan dengan surat keterangan sehat dari dokter',
                    'Pasfoto resmi berlatar belakang merah 3x4 (3 lembar) dan fotokopi KTP',
                    'Memiliki komitmen disiplin tinggi terhadap standar proteksi keselamatan mesin'
                ],
                'facilities' => [
                    'Sertifikat Lisensi Resmi Operator Mesin Produksi / Press PTP Nasional',
                    'Buku Pedoman Keselamatan Mesin Press & Checklist Inspeksi Titik Jepit',
                    'Akses Workshop Praktik Mesin Press & Perangkat Simulasi Safety Light Curtain',
                    'Bimbingan Instruktur Ahli Keselamatan Mesin Manufaktur Berpengalaman',
                    'Perlengkapan Training Kit Eksklusif (Wearpack, Safety Shoes Cover, Buku Catatan)',
                    'Konsumsi Makan Siang, Snack Box, dan Fasilitas Ruang Kelas Ber-AC'
                ],
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Operator Mesin Press & Mesin Produksi PTP | Sertifikasi Resmi',
                'meta_description' => 'Pelatihan dan sertifikasi resmi operator mesin produksi & press stamping logam PTP. Kuasai sistem proteksi light curtain, two-hand control, dan keselamatan mesin forming.'
            ],
            [
                'title' => 'Training Operator Tanur & Dapur Peleburan Logam (Furnace & Smelter PTP)',
                'slug' => 'training-operator-tanur-dapur-peleburan-furnace-smelter',
                'category' => 'Operator Tanur & Dapur Peleburan PTP',
                'duration' => '4 Hari (32 Jam Pelajaran)',
                'price' => 4500000,
                'rating' => 4.9,
                'reviews_count' => 280,
                'badge' => 'Sertifikasi Operator Tanur & Furnace Resmi',
                'description' => 'Program sertifikasi keselamatan tingkat tinggi bagi operator dapur peleburan logam, tanur induksi (induction furnace), tanur busur listrik (EAF), tanur kupola, dan tungku perlakuan panas.',
                'overview' => 'Pengoperasian Dapur Peleburan Logam (Furnace) dan instalasi peleburan bijih (smelter) melibatkan energi termal luar biasa dengan temperatur mencapai lebih dari 1.600 derajat Celsius. Paparan radiasi panas tinggi, bahaya ledakan uap air pada cairan logam (steam explosion), pelepasan gas beracun (CO, SO2, NOx), dan semburan kerak cair (slag eruption) merupakan ancaman fatal yang mengintai setiap detik kerja. Program Training Operator Tanur & Dapur Peleburan Logam (PTP) memberikan penguasaan mendalam mengenai struktur refraktori dinding tanur, sistem pendingin jaket air (water-cooling circuit), deteksi dini kebocoran coil induksi, manajemen pemuatan bahan baku kering (charge material drying), teknik penuangan (tapping & ladle handling), serta penggunaan Alat Pelindung Diri (APD) aluminium tahan panas ekstrem.',
                'target_audience' => [
                    'Operator tanur induksi (induction furnace) dan electric arc furnace (EAF) industri baja/besi cor',
                    'Operator tanur kupola (cupola furnace) dan tanur putar (rotary kiln)',
                    'Operator tungku perlakuan panas logam (heat treatment, annealing, tempering)',
                    'Petugas penuangan logam cair (furnace tapper, ladle operator, caster)',
                    'Pengawas K3 dan inspektur keselamatan pabrik peleburan logam dan smelter'
                ],
                'curriculum' => [
                    'Standar Regulasi Keselamatan Pengoperasian Dapur Peleburan Pesawat Tenaga dan Produksi',
                    'Termodinamika Peleburan Logam dan Karakteristik Dapur Induksi, EAF, dan Cupola',
                    'Integritas Dinding Lapisan Tahan Api (Refractory Lining) dan Pengukuran Sisa Ketebalan Dinding',
                    'Sistem Pendingin Sirkulasi Air Tertutup (Closed Cooling Water Circuit) dan Alarm Aliran Darurat',
                    'Bahaya Fatal Ledakan Uap Air (Moisture Explosion) dan SOP Pengeringan Bahan Baku Masukan (Scrap Charging)',
                    'Pengendalian Bahaya Gas Buang Beracun, Fume Extraction System, dan Dust Collector',
                    'Prosedur Penuangan Logam Cair (Tapping Process), Pengoperasian Ladle, dan Penanganan Terak (Slag)',
                    'APD Khusus Suhu Ekstrem: Aluminized Proximity Suit, Face Shield Emas Tahan Radiasi, dan Safety Gaiters',
                    'Rencana Tanggap Darurat: Kebocoran Dinding Tanur (Burn-Through), Pemadaman Darurat, dan Penanganan Luka Bakar Logam',
                    'Uji Teori Komprehensif dan Evaluasi Prosedur Operasional Standar Dapur Peleburan PTP'
                ],
                'requirements' => [
                    'Pendidikan minimal SLTA / SMK Jurusan Metalurgi, Teknik Mesin, Kimia, atau sederajat',
                    'Kondisi fisik prima, memiliki daya tahan terhadap lingkungan kerja bersuhu tinggi',
                    'Bebas penyakit pernapasan, jantung, dan gangguan penglihatan warna',
                    'Pasfoto berlatar merah 3x4 (3 lembar) dan fotokopi KTP / SIM yang masih berlaku',
                    'Surat keterangan sehat dan pemeriksaan medis dari klinik atau rumah sakit'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi & Lisensi Resmi Operator Tanur / Dapur Peleburan PTP',
                    'Buku Pedoman Teknis Keselamatan Termal & Penanganan Logam Cair Industri',
                    'Akses Fasilitas Ruang Workshop Peleburan dan Simulasi Kontrol Tanur',
                    'Bimbingan Instruktur Spesialis Metalurgi & Ahli Keselamatan Termal Pabrik',
                    'Alat Pelindung Diri Standar Workshop & Training Kit Peserta Lengkap',
                    'Konsumsi Makan Siang, Snack Harian, dan Sertifikat Lisensi Fisik'
                ],
                'image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Operator Tanur & Dapur Peleburan (Furnace & Smelter PTP) | Sertifikasi Resmi',
                'meta_description' => 'Pelatihan dan lisensi resmi operator tanur & dapur peleburan logam PTP. Kuasai keselamatan tanur induksi, EAF, penanganan cairan logam panas, dan proteksi termal industri.'
            ],
            [
                'title' => 'Training Teknisi Pemeliharaan Transmisi Tenaga Mekanik, Poros & Roda Gigi PTP',
                'slug' => 'training-teknisi-pemeliharaan-transmisi-tenaga-mekanik-poros-roda-gigi',
                'category' => 'Teknisi Transmisi Mekanik PTP',
                'duration' => '3 Hari (24 Jam Pelajaran)',
                'price' => 3750000,
                'rating' => 4.9,
                'reviews_count' => 265,
                'badge' => 'Sertifikasi Teknisi Transmisi Mekanik PTP Resmi',
                'description' => 'Pelatihan kompetensi pemeliharaan sistem transmisi tenaga mekanik: poros transmisi (shaft), roda gigi (gearbox), puli sabuk (belt and pulley), rantai transmisi, dan kopling industri.',
                'overview' => 'Transmisi Tenaga Mekanik menghubungkan daya kinetik dari penggerak mula ke mesin-mesin produksi di seluruh lintasan operasional pabrik. Kegagalan mekanik pada komponen transmisi berputar—seperti keausan roda gigi, deviasi kelurusan poros (misalignment), pelonggaran rantai, atau putusnya sabuk v-belt—dapat memicu kerusakan katastropik, kebakaran gesekan, hingga kecelakaan jepit yang fatal bagi personel pemeliharaan. Program Training Teknisi Transmisi Tenaga Mekanik (PTP) melatih mekanik dan teknisi dalam melakukan inspeksi berkala, pelumasan presisi, alignment poros berbasis laser (laser shaft alignment), analisis getaran mekanik spektrum FFT, penyeimbangan massa putar (balancing), serta perancangan dan pemasangan penutup pengaman transmisi (fixed guarding and interlock systems) berstandar keselamatan nasional.',
                'target_audience' => [
                    'Teknisi pemeliharaan mekanik pabrik (mechanical maintenance technician)',
                    'Mekanik transmisi industri, gearbox, pompa, dan kompresor berkapasitas besar',
                    'Millwright dan teknisi instalasi mesin produksi manufaktur',
                    'Inspektur keandalan mesin (reliability engineer) dan analis getaran mekanik',
                    'Supervisor maintenance dan pengawas K3 mekanikal pabrik'
                ],
                'curriculum' => [
                    'Regulasi Standar Keselamatan Transmisi Tenaga Mekanik Pesawat Tenaga dan Produksi',
                    'Dinamika Transmisi Mekanik: Torsi, Kecepatan Sudut, Rasio Transmisi, dan Efisiensi Daya',
                    'Inspeksi dan Pemeliharaan Poros Transmisi (Shaft): Deteksi Bengkok, Retak Lelah (Fatigue Crack), dan Keyway Wear',
                    'Bantalan (Bearing): Karakteristik Bola vs Roll, Pemilihan Gemuk Pelumas (Grease), dan Analisis Kerusakan Bearing',
                    'Sistem Transmisi Roda Gigi (Spur, Helical, Bevel, Planetary Gearbox): Backlash Check dan Pola Kontak Gigi',
                    'Transmisi Sabuk (V-Belt, Timing Belt) & Puli: Pengukuran Ketegangan (Tensioning) dan Pencegahan Slip',
                    'Transmisi Rantai & Sprocket: Pelumasan Rantai, Keausan Pin, dan Penyetelan Kelonggaran (Slack)',
                    'Teknik Alignment Poros Fleksibel Menggunakan Indikator Dial dan Alat Ukur Laser Alignment',
                    'Pemasangan Tutup Pengaman Transmisi (Safety Guards) Sesuai Standar Jarak Aman Mesin',
                    'Uji Evaluasi Teori dan Praktik Pengukuran Presisi Kelurusan Transmisi PTP'
                ],
                'requirements' => [
                    'Pendidikan minimal SMK Jurusan Mesin, Otomotif, Mekatronika, atau D3/S1 Teknik',
                    'Sehat jasmani dan rohani, tidak buta warna',
                    'Memiliki pengalaman dasar penggunaan alat ukur mekanik (jangka sorong, mikrometer, dial gauge)',
                    'Pasfoto berlatar belakang merah 3x4 (3 lembar) dan fotokopi KTP',
                    'Membawa pakaian kerja wearpack dan safety shoes untuk sesi workshop'
                ],
                'facilities' => [
                    'Sertifikat Kompetensi Teknisi Transmisi Tenaga Mekanik PTP Resmi & Lisensi',
                    'Modul Pelatihan Lengkap Berisi Kalkulasi Mekanik & Prosedur Alignment Laser',
                    'Akses Alat Peraga Transmisi Poros, Gearbox Demonstrator, dan Rig Alignment',
                    'Bimbingan Instruktur Senior Spesialis Mekanikal & Reliability Engineering',
                    'Training Kit Eksklusif (Kalkulator Teknik, Wearpack Emblem, Buku Panduan Saku)',
                    'Konsumsi Makan Siang, Snack, dan Fasilitas Pelatihan Lengkap'
                ],
                'image' => 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Teknisi Pemeliharaan Transmisi Mekanik (Poros & Gearbox PTP) | Sertifikasi',
                'meta_description' => 'Pelatihan dan sertifikasi teknisi transmisi tenaga mekanik PTP resmi. Kuasai alignment laser poros, gearbox, puli sabuk, bearing, dan proteksi transmisi berputar.'
            ],
            [
                'title' => 'Training Teknisi K3 & Spesialis Pesawat Tenaga dan Produksi (PTP)',
                'slug' => 'training-teknisi-k3-spesialis-pesawat-tenaga-dan-produksi-ptp',
                'category' => 'Spesialis Pengawas & Teknisi K3 PTP',
                'duration' => '5 Hari (40 Jam Pelajaran)',
                'price' => 5500000,
                'rating' => 4.9,
                'reviews_count' => 380,
                'badge' => 'Sertifikasi Spesialis K3 Pesawat Tenaga & Produksi Resmi',
                'description' => 'Program sertifikasi tingkat ahli untuk pengawasan, inspeksi keselamatan, pengujian berkala, identifikasi bahaya, dan audit kepatuhan instalasi Pesawat Tenaga dan Produksi (PTP).',
                'overview' => 'Spesialis K3 Pesawat Tenaga dan Produksi memegang peranan kepemimpinan krusial dalam memastikan seluruh mesin penggerak mula, mesin perkakas, mesin produksi stamping/forming, tanur peleburan, dan transmisi mekanik di pabrik memenuhi standar integritas keselamatan mekanik tertinggi. Pelatihan Teknisi K3 & Spesialis Pesawat Tenaga dan Produksi (PTP) mencakup metodologi komprehensif pemeriksaan dan pengujian (Riksa Uji) berkala, pelaksanaan pengujian tidak merusak (Non-Destructive Testing / NDT) pada struktur mesin, verifikasi kinerja interlock keselamatan elektronik, analisis risiko mesin berbasis ISO 12100 / standar nasional, penerapan sistem Lockout Tagout (LOTO) multi-energi terpadu, serta investigasi kegagalan mekanik guna mewujudkan tempat kerja yang nihil kecelakaan (zero accident).',
                'target_audience' => [
                    'Ahli K3 umum yang ingin mengambil spesialisasi teknis Pesawat Tenaga dan Produksi',
                    'Inspektur keselamatan peralatan mekanikal pabrik dan engineer K3 manufaktur',
                    'Maintenance manager, plant engineer, dan workshop manager fasilitas industri',
                    'Auditor internal keselamatan mekanik dan konsultan rekayasa keselamatan',
                    'Calon penanggung jawab teknis riksa uji keselamatan mesin pabrik'
                ],
                'curriculum' => [
                    'Kerangka Hukum dan Regulasi Keselamatan Pesawat Tenaga dan Produksi Nasional',
                    'Metodologi Pemeriksaan dan Pengujian Berkala (Riksa Uji) Peralatan PTP',
                    'Identifikasi Bahaya Mekanik, Penilaian Risiko (HIRADC), dan Hierarki Pengendalian Risiko Mesin',
                    'Pengujian Tidak Merusak (NDT): Metode Penetrant Testing (PT), Magnetic Particle (MT), dan Ultrasonic Testing (UT)',
                    'Standar Keselamatan Rekayasa: Machine Guarding, Interlock Switches, dan Emergency Stop Circuits Kategori 4',
                    'Prosedur Penguncian dan Pelabelan Energi Bahaya Terpadu (Lockout / Tagout / Tryout - LOTOTO)',
                    'Uji Beban, Uji Kecepatan, dan Uji Tekanan pada Mesin Tenaga dan Produksi',
                    'Manajemen Pemeliharaan Preventif dan Prediktif Berbasis Keandalan (Reliability-Centered Maintenance)',
                    'Metodologi Investigasi Kecelakaan Kerja Mesin PTP dan Penyusunan Laporan Rekomendasi Teknis',
                    'Sidang Praktik Riksa Uji Lapangan dan Ujian Komprehensif Sertifikasi Spesialis PTP'
                ],
                'requirements' => [
                    'Pendidikan minimal D3 / S1 Jurusan Teknik (Mesin, Elektro, Industri, K3) atau berpengalaman di bidang mekanikal minimal 2 tahun',
                    'Sehat jasmani dan rohani, tidak buta warna, dibuktikan dengan surat dokter',
                    'Pasfoto berlatar merah ukuran 3x4 (4 lembar) dan fotokopi KTP / Ijazah terakhir',
                    'Surat rekomendasi penugasan dari perusahaan (apabila dikirim oleh instansi)',
                    'Komitmen menyelesaikan seluruh jam pelajaran teori dan evaluasi praktik lapangan'
                ],
                'facilities' => [
                    'Sertifikat Lisensi Resmi Spesialis K3 Pesawat Tenaga dan Produksi (PTP) Nasional',
                    'Buku Panduan Teknis Inspeksi & Audit Keselamatan Mesin PTP Lengkap (Hardcover & Digital)',
                    'Akses Peralatan Uji NDT (Dye Penetrant, Gauss Meter, Thickness Gauge) saat Praktik',
                    'Bimbingan Master Instruktur Praktisi Senior Pengawas K3 Mekanik Nasional',
                    'Executive Training Kit (Tas Eksklusif, Flashdisk Materi, Rompi Spesialis K3, Wearpack)',
                    'Coffee Break 2x, Makan Siang Prasmanan, dan Sertifikat Kelulusan Uji Kompetensi'
                ],
                'image' => 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=800&auto=format&fit=crop&q=80',
                'meta_title' => 'Training Teknisi K3 Spesialis Pesawat Tenaga dan Produksi (PTP) | Sertifikasi Resmi',
                'meta_description' => 'Program sertifikasi teknisi K3 & spesialis pesawat tenaga dan produksi (PTP) resmi. Kuasai riksa uji mesin, pengujian NDT, evaluasi guarding, LOTO, dan standar keselamatan pabrik.'
            ]
        ];
    }

    /**
     * Daftar 200 Template Judul Artikel Training Operator PTP
     */
    public static function get200ArticleTitles(): array
    {
        return [
"Training Operator PTP: Panduan Lengkap Standar Keselamatan Pesawat Tenaga dan Produksi di Wilayah {region}",
            "Training PTP Penggerak Mula: Prosedur Pengoperasian Genset Industri dan Motor Diesel Berkapasitas Besar di {region}",
            "Training Operator Mesin Perkakas: Standar Keselamatan Kerja Mesin Bubut Konvensional dan CNC di {region}",
            "Training Operator Mesin Press: Teknik Pencegahan Risiko Terjepit pada Mesin Stamping dan Hydraulic Press di {region}",
            "Training PTP Dapur Peleburan: Pengendalian Risiko Bahaya Logam Cair pada Tanur Induksi dan EAF di {region}",
            "Training Transmisi Tenaga Mekanik PTP: Pemeliharaan Preventif Poros, Roda Gigi, dan Pulley Sabuk di {region}",
            "Training Operator PTP: Tata Kelola Sistem Lockout Tagout (LOTO) pada Mesin Industri Berat di {region}",
            "Training Penggerak Mula PTP: Prosedur Inspeksi Harian dan Pengujian Proteksi Overspeed di {region}",
            "Training Operator Mesin Frais: Penyetelan Ragum Presisi dan Perlindungan Terhadap Serpihan Tatal di {region}",
            "Training Operator Mesin Potong Plat: Standar Keselamatan Shearing Machine dan Finger Guarding di {region}",
            "Training PTP Operator Tanur: Prosedur Pengeringan Bahan Baku Scrap Guna Mencegah Ledakan Uap di {region}",
            "Training Teknisi Transmisi PTP: Teknik Alignment Laser Poros Industri dan Reduksi Vibrasi di {region}",
            "Training Operator PTP: Analisis Bahaya Titik Jepit (Pinch Points) dan Rekayasa Pembatas Fisik di {region}",
            "Training Operator Genset PTP: Pemantauan Suhu Pelumas dan Proteksi Tekanan Oli Mesin Diesel di {region}",
            "Training Operator Mesin Bubut PTP: Bahaya Terlilit Putaran Benda Kerja dan Penggunaan Chuck Guard di {region}",
            "Training Operator Mesin Bending: Standar Keselamatan Press Brake dan Proteksi Tirai Sensor di {region}",
            "Training PTP Tanur Peleburan: Penanganan Kerak Terak (Slag) dan Protokol Penuangan Logam Panas di {region}",
            "Training Teknisi Transmisi Mekanik: Pelumasan Bantalan Poros dan Manajemen Beban Dinamis di {region}",
            "Training Operator PTP: Prosedur Tanggap Darurat Tombol Emergency Stop dan Interlock Mesin di {region}",
            "Training Penggerak Mula Turbin PTP: Pemantauan Siklus Termal dan Keselamatan Turbin Gas Industri di {region}",
            "Training Operator Mesin CNC: Verifikasi Kode Pemrograman, Uji Dry-Run, dan Safety Door Interlock di {region}",
            "Training Operator Mesin Stamping: Pengoperasian Sistem Kendali Dua Tangan (Two-Hand Control) di {region}",
            "Training PTP Peleburan Logam: Pencegahan Bahaya Gas Beracun Karbon Monoksida pada Tanur di {region}",
            "Training Transmisi Roda Gigi PTP: Pemeriksaan Backlash, Pola Kontak Gigi, dan Penggantian Pelumas di {region}",
            "Training Operator PTP: Standar Ergonomi Pengoperasian Mesin Produksi dan Pencegahan Kelelahan Operator di {region}",
            "Training Penggerak Mula PTP: Pengujian Sistem Pendingin Radiator dan Kualitas Cairan Coolant di {region}",
            "Training Operator Mesin Gerinda: Pengujian Keutuhan Roda Gerinda Melalui Metode Ring Test di {region}",
            "Training Operator Mesin Roll Forming: Standar Proteksi Silinder Penekan Plat di Kawasan Industri {region}",
            "Training PTP Operator Smelter: Standar Penggunaan APD Tahan Radiasi Termal dan Baju Aluminium di {region}",
            "Training Teknisi Transmisi Rantai PTP: Pemeriksaan Keausan Pin Sprocket dan Penyetelan Tegangan di {region}",
            "Training Operator PTP: Pemeriksaan Berkala Elemen Pengaman Mesin Berputar dan Tutup Pelindung di {region}",
            "Training Operator Motor Diesel PTP: Sistem Injeksi Common Rail dan Filtrasi Bahan Bakar di {region}",
            "Training Operator Mesin Gurdi PTP: Pengikatan Aman Benda Kerja pada Meja Bor Industri di {region}",
            "Training Operator Mesin Injection Molding: Pencegahan Bahaya Tekanan Hidrolik dan Suhu Barrel di {region}",
            "Training PTP Tanur Busur Listrik: Pengendalian Bahaya Busur Tegangan Tinggi dan Radiasi Kilatan di {region}",
            "Training Transmisi Sabuk V-Belt PTP: Pengukuran Kelurusan Puli dan Indikasi Gesekan Termal di {region}",
            "Training Spesialis K3 PTP: Metodologi Penilaian Risiko HIRADC pada Instalasi Mesin Pabrik di {region}",
            "Training Penggerak Mula PTP: Penyelarasan Frekuensi dan Prosedur Sinkronisasi Genset Paralel di {region}",
            "Training Operator Mesin Sekrap Logam: Pengaturan Langkah Pahat dan Jarak Bebas di Bengkel {region}",
            "Training Operator Mesin Press Hidrolik: Pemantauan Relief Valve dan Integritas Selang Bertekanan di {region}",
            "Training PTP Tungku Perlakuan Panas: Standar Keselamatan Proses Quenching dan Annealing Baja di {region}",
            "Training Teknisi Transmisi PTP: Penerapan Kopling Fluida dan Bantalan Fleksibel di Industri {region}",
            "Training Operator PTP: Protokol Izin Kerja Pemeliharaan Mesin Bergerak (Work Permit) di {region}",
            "Training Penggerak Mula PTP: Analisis Spektrum Getaran Poros Engkol Mesin Diesel di {region}",
            "Training Operator Mesin Wire Cut EDM: Penanganan Cairan Dielektrik dan Pencegahan Sengatan Listrik di {region}",
            "Training Operator Mesin Extruder Plastik: Manajemen Suhu Nozzle dan Pencegahan Semburan Polimer di {region}",
            "Training PTP Tanur Kupola: Pengaturan Udara Tiup (Blast Air) dan Pengawasan Jalur Logam Cair di {region}",
            "Training Transmisi Poros Panjang PTP: Penyangga Bantalan Antara dan Pencegahan Defleksi Kritis di {region}",
            "Training Spesialis K3 PTP: Pengujian Tidak Merusak (NDT Dye Penetrant) pada Rangka Mesin di {region}",
            "Training Penggerak Mula PTP: Perawatan Turbocharger dan Pengawasan Tekanan Udara Induksi di {region}",
            "Training Operator Mesin Bandsaw Logam: Pengaturan Tegangan Pita Gergaji dan Pelindung Pisau di {region}",
            "Training Operator Mesin Press Mekanik: Mekanisme Rem Gesek dan Kopling Putaran Parsial di {region}",
            "Training PTP Dapur Induksi: Pemeriksaan Rutin Ketebalan Lapisan Semen Tahan Api di {region}",
            "Training Transmisi Tenaga PTP: Analisis Kerusakan Bearing Berbasis Deteksi Ultrasonik di {region}",
            "Training Operator PTP: Standar Pencahayaan dan Kebisingan di Area Mesin Tenaga Berputar di {region}",
            "Training Penggerak Mula PTP: Pencegahan Terjadinya Fenomena Diesel Engine Runaway di {region}",
            "Training Operator Mesin Pemotong Plat CNC: Integrasi Pengaman Plasma Cutting dan Pembuangan Debu di {region}",
            "Training Operator Mesin Die Casting: Keselamatan Injeksi Logam Paduan Tekanan Tinggi di {region}",
            "Training PTP Operator Ladle: Prosedur Pengangkatan dan Penuangan Logam Cair yang Aman di {region}",
            "Training Teknisi Transmisi PTP: Penyetelan Dynamic Balancing Rotor Poros Penggerak di {region}",
            "Training Operator PTP: Rekayasa Penahan Benda Terlempar (Containment Shield) pada Mesin Cepat di {region}",
            "Training Penggerak Mula PTP: Pemeriksaan Kualitas Gas Buang dan Peredaman Suara Knalpot di {region}",
            "Training Operator Mesin Honing Silinder: Teknik Penjepit Presisi dan Sirkulasi Pelumas Asah di {region}",
            "Training Operator Mesin Stamping Otomatis: Sensor Deteksi Dobel Material (Double Sheet Detector) di {region}",
            "Training PTP Peleburan Logam: Mitigasi Bahaya Erupsi Terak Panas Akibat Kontak Zat Basah di {region}",
            "Training Transmisi Tenaga Mekanik: Standar Pemasangan Guarding dengan Sakelar Pengunci Otomatis di {region}",
            "Training Spesialis K3 PTP: Audit Keselamatan Berkala Pesawat Tenaga dan Produksi di Fasilitas {region}",
            "Training Penggerak Mula PTP: Manajemen Baterai Starter dan Sirkuit Pengisian Daya Generator di {region}",
            "Training Operator Mesin Gergaji Bundar Logam: Pemilihan Gigi Pisau dan Pelindung Kap Putar di {region}",
            "Training Operator Mesin Press Brake CNC: Kalibrasi Sudut Tekuk dan Jarak Aman Jari Operator di {region}",
            "Training PTP Tanur Crucible: Perawatan Wadah Peleburan Grafit dan Pengawasan Nyala Pembakar di {region}",
            "Training Teknisi Transmisi PTP: Identifikasi Frekuensi Rusak Roda Gigi Menggunakan FFT Spectrum di {region}",
            "Training Operator PTP: Tata Kelola Alat Bantu Angkat saat Pemasangan Cetakan Berat di {region}",
            "Training Penggerak Mula PTP: Pemeriksaan Governor Mekanik dan Pengendali Elektronik Putaran Mesin di {region}",
            "Training Operator Mesin Bubut Vertikal: Pengikatan Benda Kerja Berdiameter Besar Secara Aman di {region}",
            "Training Operator Mesin Shearing Hidrolik: Penyetelan Kerenggangan Pisau Potong Sesuai Tebal Plat di {region}",
            "Training PTP Dapur Peleburan Aluminium: Pencegahan Oksidasi dan Penanganan Fluks Kimia di {region}",
            "Training Transmisi Mekanik PTP: Pemilihan Viskositas Pelumas Gearbox Sesuai Suhu Lingkungan di {region}",
            "Training Operator PTP: Pengenalan Tanda Peringatan Bahaya Mesin dan Standar Jalur Evakuasi di {region}",
            "Training Penggerak Mula Turbin Uap PTP: Prosedur Pemanasan Lambat (Barring Gear) Poros Rotor di {region}",
            "Training Operator Mesin Slotter Logam: Kecepatan Langkah Pahat dan Pengamanan Zona Gerak di {region}",
            "Training Operator Mesin Stamping C-Frame: Mitigasi Defleksi Rangka dan Penguncian Penyetel Die di {region}",
            "Training PTP Tanur Smelter: Prosedur Penutupan Darurat Kran Pasokan Gas Bahan Bakar di {region}",
            "Training Teknisi Transmisi PTP: Pemasangan Pasak Poros (Keyway) Presisi Tanpa Picu Keretakan di {region}",
            "Training Spesialis K3 PTP: Pengukuran Level Getaran Seluruh Tubuh (Whole-Body Vibration) di {region}",
            "Training Penggerak Mula PTP: Penanganan Keadaan Darurat Kebocoran Jalur Pipa Bahan Bakar Solar di {region}",
            "Training Operator Mesin Milling Horizontal: Penggunaan Arbor dan Penyangga Pisau Mantap di {region}",
            "Training Operator Mesin Roll Bending Plat: Keselamatan Tangan saat Memandu Lembaran Plat Baja di {region}",
            "Training PTP Pemurnian Logam: Pengendalian Percikan Cairan Elektrolit Asam Kuat di {region}",
            "Training Transmisi Tenaga Mekanik: Pemasangan Tutup Pelindung Jaring Kawat Sesuai Dimensi Jari di {region}",
            "Training Operator PTP: Pemeriksaan Harian Kabel Listrik Kontrol dan Tombol Jogging Mesin di {region}",
            "Training Penggerak Mula PTP: Prosedur Pengujian Beban Resistif Menggunakan Dummy Load Bank di {region}",
            "Training Operator Mesin Centerless Grinding: Pengaturan Sudut Roda Pengatur dan Dudukan Benda di {region}",
            "Training Operator Mesin Punching Turret CNC: Prosedur Penggantian Stasiun Cetakan Berputar di {region}",
            "Training PTP Tanur Busur Listrik: Standar Penggantian Elektroda Grafit dan Penguncian Tenaga di {region}",
            "Training Teknisi Transmisi PTP: Perawatan Kopling Gesek Kering dan Pemeriksaan Ketebalan Kampas di {region}",
            "Training Operator PTP: Pelatihan Respon Tanggap Darurat Luka Bakar dan Pendarahan di Area Mesin {region}",
            "Training Penggerak Mula PTP: Pencegahan Kontaminasi Air pada Tangki Penyimpanan Bahan Bakar di {region}",
            "Training Operator Mesin Bubut Ulir: Sinkronisasi Lead Screw dan Pembubutan Ulir Presisi di {region}",
            "Training Operator Mesin Press H-Frame: Proteksi Ruang Samping dan Tirai Pengaman Belakang di {region}",
            "Training PTP Tanur Peleburan Tembaga: Keselamatan Pengikatan dan Pembuangan Terak Cair di {region}",
            "Training Transmisi Mekanik PTP: Mitigasi Resiko Gesekan Puli yang Mengakibatkan Pemanasan Berlebih di {region}",
            "Training Spesialis K3 PTP: Prosedur Verifikasi Kelayakan Teknis Sebelum Izin Operasi Diterbitkan di {region}",
            "Training Penggerak Mula PTP: Kalibrasi Sensor Tekanan Oli Digital dan Termokopel Silinder di {region}",
            "Training Operator Mesin Bor Radial: Penguncian Lengan Ayun dan Pemilihan Putaran Mata Bor Besar di {region}",
            "Training Operator Mesin Stamping Logam: Penggunaan Tong Penjepit Manual untuk Memasukkan Plat di {region}",
            "Training PTP Dapur Induksi Frekuensi Menengah: Pencegahan Kegagalan Isolasi Listrik Coil di {region}",
            "Training Teknisi Transmisi PTP: Teknik Pemasangan Bantalan Panas Menggunakan Induction Heater di {region}",
            "Training Operator PTP: Penataan 5R (Ringkas, Rapi, Resik, Rawat, Rajin) di Sekitar Mesin Produksi {region}",
            "Training Penggerak Mula PTP: Prosedur Penggantian Filter Udara Heavy Duty pada Lingkungan Berdebu di {region}",
            "Training Operator Mesin Surface Grinding: Pembersihan Meja Magnetik dan Pengikatan Benda Kerja di {region}",
            "Training Operator Mesin Press Mekanik: Pemeriksaan Redaman Pegas Balans dan Silinder Penyeimbang di {region}",
            "Training PTP Peleburan Logam: Standar Ventilasi Pengisap Asap Lokal (Local Exhaust Ventilation) di {region}",
            "Training Transmisi Tenaga Mekanik: Teknik Pelurusan Puli Sabuk Menggunakan Sinar Laser Pulley di {region}",
            "Training Operator PTP: Pemahaman Simbol Bahaya Internasional ISO pada Panel Pengendali Mesin di {region}",
            "Training Penggerak Mula Mesin Diesel PTP: Prosedur Bleeding Saluran Udara pada Sistem Bahan Bakar di {region}",
            "Training Operator Mesin Frais Universal: Penyetelan Kepala Pembagi (Dividing Head) Berpresisi di {region}",
            "Training Operator Mesin Tekuk Plat Otomatis: Pengoperasian Crowning Table dan Pencegahan Deformasi di {region}",
            "Training PTP Operator Tanur Gas: Prosedur Purging Udara Sebelum Penyalaan Pemantik Api di {region}",
            "Training Teknisi Transmisi Roda Gigi Cacing: Pemeriksaan Aus Gigi Perunggu dan Penggantian Pelumas Sintetis di {region}",
            "Training Spesialis K3 PTP: Pengujian Kebocoran Arus dan Pembumian (Grounding) Panel Mesin Pabrik di {region}",
            "Training Penggerak Mula PTP: Pemeriksaan Keausan Komutator dan Sikat Karbon Alternator Pembangkit di {region}",
            "Training Operator Mesin Gerinda Silindris: Pemasangan Steady Rest Penahan Benda Kerja Panjang di {region}",
            "Training Operator Mesin Forging Press: Penanganan Benda Tempa Membara dan Proteksi Getaran Tanah di {region}",
            "Training PTP Dapur Peleburan: Standar Pengelolaan Limbah Padat Dross dan Fly Ash Berbahaya di {region}",
            "Training Transmisi Tenaga PTP: Penerapan Sambungan Poros Universal Joint dan Pengaman Rantai Lepas di {region}",
            "Training Operator PTP: Standar Keselamatan Saat Mengoperasikan Panel Sentuh Layar HMI Mesin di {region}",
            "Training Penggerak Mula PTP: Analisis Kandungan Logam Keausan pada Sampel Oli Pelumas Mesin di {region}",
            "Training Operator Mesin Bor Duduk: Larangan Memegang Benda Kerja dengan Tangan Tanpa Ragum di {region}",
            "Training Operator Mesin Shearing Logam: Pemeriksaan Kesejajaran Pisau dan Pengaman Belakang di {region}",
            "Training PTP Tanur Pemanas Ulang (Reheating Furnace): Kontrol Atmosfer dan Pembentukan Kerak Baja di {region}",
            "Training Teknisi Transmisi Mekanik: Prosedur Pengujian Kekencangan Sabuk Menggunakan Pengukur Sonic di {region}",
            "Training Operator PTP: Prosedur Pengetesan Interlock Pintu Mesin Sebelum Memulai Giliran Kerja di {region}",
            "Training Penggerak Mula PTP: Standar Keselamatan Ruang Mesin Tertutup dan Sirkulasi Udara Masuk di {region}",
            "Training Operator Mesin Bubut Turret: Pengaturan Urutan Pahat Otomatis dan Pembatas Langkah di {region}",
            "Training Operator Mesin Press Hidrolik: Pencegahan Bahaya Jebolnya Silinder Akumulator Bertekanan di {region}",
            "Training PTP Dapur Peleburan Timbal: Pencegahan Pajanan Uap Logam Berat dan Pengawasan Biomonitoring di {region}",
            "Training Transmisi Poros PTP: Pengukuran Run-Out Poros Menggunakan Dial Test Indicator di {region}",
            "Training Spesialis K3 PTP: Audit Tingkat Ketahanan Pengaman Fisik Mesin Terhadap Benturan Material di {region}",
            "Training Penggerak Mula PTP: Penanganan Keadaan Darurat Suhu Tinggi Air Pendingin Tanpa Mematikan Paksa di {region}",
            "Training Operator Mesin Frais Vertikal: Pemilihan Diameter End Mill dan Kecepatan Sayat yang Tepat di {region}",
            "Training Operator Mesin Roll Plat 3-Roll: Keselamatan Pencegahan Terjepit di Antara Rol Berputar di {region}",
            "Training PTP Tanur Busur Api: Pengendalian Kebisingan Desibel Ekstrem saat Awal Proses Peleburan di {region}",
            "Training Teknisi Transmisi PTP: Standar Pemasangan Snap Ring dan Collet Penahan Bantalan Poros di {region}",
            "Training Operator PTP: Kewajiban Penggunaan Kacamata Pengaman Berstandar Benturan Tinggi di {region}",
            "Training Penggerak Mula PTP: Prosedur Pemeliharaan Rutin 250 Jam Kerja Genset Pembangkit di {region}",
            "Training Operator Mesin Gerinda Duduk: Penyetelan Jarak Tool Rest Maksimal 3 mm dari Permukaan Batu di {region}",
            "Training Operator Mesin Stamping Multi-Die: Pengawasan Sinkronisasi Feeder Otomatis dan Cetakan di {region}",
            "Training PTP Dapur Peleburan: Rencana Jalur Penyelamatan Cepat Ketika Terjadi Tumpahan Logam Cair di {region}",
            "Training Transmisi Sabuk Timing PTP: Pencegahan Loncat Gigi Sabuk Akibat Akselerasi Spindel Tiba-Tiba di {region}",
            "Training Operator PTP: Pencegahan Tindakan Bypass Pengaman Mesin Demi Mengejar Target Produksi di {region}",
            "Training Penggerak Mula Mesin Gas PTP: Standar Deteksi Kebocoran Pipa Gas dan Katup Solenoid Mati Cepat di {region}",
            "Training Operator Mesin Slotter Vertikal: Pengaturan Panjang Ayunan dan Pemasangan Pembatas Gerak di {region}",
            "Training Operator Mesin Press Kompresi Karet: Pengaturan Waktu Vulkanisasi dan Pengaman Tirai Samping di {region}",
            "Training PTP Tanur Industri: Pemeriksaan Ketahanan Isolasi Keramik Dinding Luar Suhu Rendah di {region}",
            "Training Teknisi Transmisi Mekanik: Pencegahan Keausan Dini Roda Gigi Akibat Kontaminasi Partikel Pasir di {region}",
            "Training Spesialis K3 PTP: Analisis Kegagalan Komponen Mesin Melalui Metodologi Root Cause Analysis di {region}",
            "Training Penggerak Mula PTP: Pemasangan Peredam Getaran (Vibration Damper Mount) pada Pondasi Mesin di {region}",
            "Training Operator Mesin CNC Turning: Pencegahan Tabrakan Pahat dengan Cakar Cekam (Chuck Crash) di {region}",
            "Training Operator Mesin Potong Plat Guillotine: Penggantian Pisau Potong Atas Bawah Secara Aman di {region}",
            "Training PTP Peleburan Besi Cor: Penggunaan Inokulan dan Pengawasan Suhu Penuangan Optimal di {region}",
            "Training Transmisi Mekanik PTP: Pemeliharaan Fluid Coupling dan Penggantian Fusible Safety Plug di {region}",
            "Training Operator PTP: Standar Komunikasi Sinyal Tangan Antar Operator pada Jalur Mesin Produksi Panjang di {region}",
            "Training Penggerak Mula PTP: Prosedur Pengujian Tekanan Kompresi Tiap Silinder Mesin Diesel di {region}",
            "Training Operator Mesin Bubut Konvensional: Larangan Mengukur Benda Kerja Saat Spindel Masih Berputar di {region}",
            "Training Operator Mesin Bending Hidrolik: Pencegahan Efek Springback Material Plat Tebal di {region}",
            "Training PTP Dapur Peleburan: Standar Pemasangan Dinding Penahan Percikan Logam (Splash Barrier) di {region}",
            "Training Teknisi Transmisi Roda Gigi Planet: Pemeliharaan Sun Gear dan Carrier Assembly di Pabrik {region}",
            "Training Operator PTP: Pemanfaatan Alat Pelindung Telinga pada Ruang Kerja Berbising Tinggi di {region}",
            "Training Penggerak Mula Turbin Gas PTP: Pengawasan Tekanan Kompresor Aksial dan Batas Suhu Gas Buang di {region}",
            "Training Operator Mesin Frais Gigi (Gear Hobbing): Pemasangan Pisau Hob dan Perhitungan Rasio Gigi di {region}",
            "Training Operator Mesin Stamping Transfer: Keselamatan Lengan Mekik Pneumatik Pengambil Material di {region}",
            "Training PTP Tanur Semen (Rotary Kiln): Pemantauan Pembentukan Ring Clinker dan Beban Motor Putar di {region}",
            "Training Transmisi Tenaga Poros: Standar Pemasangan Pengunci Baut Torsi Tinggi Menggunakan Kunci Torsi di {region}",
            "Training Spesialis K3 PTP: Penyelenggaraan Pelatihan Keselamatan Singkat (Toolbox Talk) Mesin di {region}",
            "Training Penggerak Mula PTP: Pencegahan Korosi pada Jaket Pendingin Silinder Menggunakan Inhibitor di {region}",
            "Training Operator Mesin Bor Radial Besar: Penahan Benda Kerja Menggunakan Baut T-Slot Kokoh di {region}",
            "Training Operator Mesin Press Mekanik: Pemeriksaan Keausan Liners Gib Panduan Luncuran Ram di {region}",
            "Training PTP Peleburan Seng & Kuningan: Pengendalian Bahaya Demam Asap Logam (Metal Fume Fever) di {region}",
            "Training Transmisi Puli Sabuk PTP: Pencegahan Terjadinya Listrik Statis pada Sabuk Berkecepatan Tinggi di {region}",
            "Training Operator PTP: Kewajiban Pengecekan Fungsi Sensor Penghenti Darurat Kabel Tarik (Pull Cord Switch) di {region}",
            "Training Penggerak Mula PTP: Standar Keselamatan Sistem Penyemprot Pemadam Otomatis di Ruang Genset {region}",
            "Training Operator Mesin Bubut Presisi: Pembubutan Tirus Menggunakan Eretan Atas dan Pengaman Pahat di {region}",
            "Training Operator Mesin Roll Plat Bending 4-Rol: Pemrosesan Pra-Tekuk Ujung Plat Logam yang Aman di {region}",
            "Training PTP Dapur Peleburan Baja: Pengawasan Tekanan Oksigen pada Pipa Tiup (Oxygen Lance) di {region}",
            "Training Teknisi Transmisi Mekanik: Deteksi Ketidaksejajaran Sudut Poros Menggunakan Laser Dual-Beam di {region}",
            "Training Operator PTP: Prosedur Aman Pengisian Minyak Pelumas dan Penampungan Limbah B3 di {region}",
            "Training Penggerak Mula PTP: Uji Beban Penuh 100% dan Evaluasi Penurunan Tegangan Listrik di {region}",
            "Training Operator Mesin Gerinda Alat Potong (Tool & Cutter Grinder): Penajaman Pahat Presisi di {region}",
            "Training Operator Mesin Press Stamping Logam: Pengaturan Batas Bawah Ram (Shut Height Adjustment) di {region}",
            "Training PTP Tanur Pemanas Tabung: Standar Inspeksi Sambungan Flensa Gas Pembakar Tanpa Kebocoran di {region}",
            "Training Transmisi Rantai Industri PTP: Pencegahan Patah Lelah Rantai Akibat Beban Kejut Berulang di {region}",
            "Training Spesialis K3 PTP: Pembentukan Tim Tanggap Darurat Evakuasi Korban Terjepit Mesin di {region}",
            "Training Penggerak Mula PTP: Kalibrasi Modul Kontrol Otomatis Start-Stop Genset (AMF/ATS) di {region}",
            "Training Operator Mesin Sekrap Serut Logam: Pengikatan Pahat HSS dan Penyetelan Sudut Potong di {region}",
            "Training Operator Mesin Potong Plat Hidrolik: Penyetelan Sudut Rake Pisau untuk Hindari Bengkok Plat di {region}",
            "Training PTP Tanur Peleburan Kaca: Pengendalian Suhu Viskositas Lelehan Silika dan Proteksi Radiasi di {region}",
            "Training Transmisi Tenaga Mekanik: Rekayasa Penutup Pelindung Berengsel dengan Sakelar Pengaman Magnetik di {region}",
            "Training Operator PTP: Sertifikasi Kompetensi Resmi dan Lisensi Sah Operator Pesawat Tenaga Produksi di {region}"
        ];
    }

    /**
     * Alias method untuk keselarasan dengan FrontController
     */
    public static function getArticleTopics(): array
    {
        return self::get200ArticleTitles();
    }

    /**
     * Generator Artikel Teknis Operator PTP Komprehensif (28 Bab Mendalam)
     * Mengkombinasikan penggerak mula, mesin perkakas, mesin produksi stamping/press,
     * dapur peleburan/tanur, transmisi tenaga mekanik, dan sertifikasi spesialis K3 PTP.
     * Bebas dari sebutan nama pemerintahan dan bebas dari indikator kuantitas buatan.
     */
    public static function generateDeepArticle(string $title, string $regionName = 'Indonesia', int $targetWords = 7000): array
    {
        $regUpper = strtoupper($regionName);
        $cleanTitle = trim($title);

        $chapters = [
            [
                'title' => "Bab 1: Definisi, Ruang Lingkup, dan Klasifikasi Pesawat Tenaga dan Produksi (PTP)",
                'content' => "Pesawat Tenaga dan Produksi (PTP) merupakan kelompok permesinan industri berdaya gerak mekanis atau termal yang dirancang untuk menghasilkan daya, memproses material mentah, atau mengubah bentuk benda kerja menjadi produk bernilai tambah. Di kawasan industri {$regionName}, keberadaan mesin PTP memegang peranan krusial sebagai urat nadi kegiatan produksi manufaktur, fabrikasi logam, pengolahan hasil tambang, dan fasilitas utilitas daya.
                
Secara garis besar, permesinan PTP diklasifikasikan ke dalam lima kelompok utama:
1. **Penggerak Mula (Prime Movers)**: Mesin yang mengubah energi potensial (kimia, termal, fluida) menjadi energi mekanik putar, seperti motor pembakaran dalam (genset diesel), turbin uap, turbin gas, dan turbin air.
2. **Mesin Perkakas & Pemesinan Logam**: Peralatan yang digunakan untuk memotong, meratakan, membentuk ulir, dan menghaluskan logam dengan prinsip pelepasan serpihan (chips removal), mencakup mesin bubut (lathe), frais (milling), gurdi (drilling), sekrap, dan gerinda (grinding).
3. **Mesin Produksi & Press Stamping**: Mesin bertekanan tinggi yang mencetak, memotong, dan menekuk lembaran plat atau material polimer, seperti mechanical power press, hydraulic press, shearing machine, press brake, dan mesin injection molding.
4. **Dapur Peleburan & Tanur (Furnace)**: Instalasi bersuhu termal tinggi untuk mencairkan atau memberikan perlakuan panas pada logam, meliputi tanur induksi listrik, tanur busur listrik (EAF), kupola, dan tungku heat treatment.
5. **Transmisi Tenaga Mekanik**: Rangkaian komponen penerus daya dari penggerak ke mesin kerja, mencakup poros transmisi (shafting), susunan roda gigi (gearbox), puli sabuk (belt & pulley), serta rantai konveyor industri.
                
Seluruh kelompok permesinan ini beroperasi dengan energi masif yang menuntut kompetensi terverifikasi dari operator yang mengendalikannya di wilayah {$regionName}."
            ],
            [
                'title' => "Bab 2: Kerangka Regulasi dan Standar Keselamatan Pengoperasian Mesin PTP",
                'content' => "Standar keselamatan pengoperasian Pesawat Tenaga dan Produksi diatur secara ketat dalam norma keselamatan kerja nasional untuk memastikan perlindungan menyeluruh bagi tenaga kerja dan keutuhan aset pabrik. Setiap perusahaan di {$regionName} yang memiliki atau mengoperasikan mesin PTP wajib memenuhi kriteria kelayakan instalasi teknis, prosedur pengujian berkala, serta penugasan operator berlisensi resmi.
                
Pilar utama regulasi keselamatan mesin PTP mencakup:
- **Kelaikan Teknis Mesin**: Setiap unit mesin yang dipasang harus melalui pemeriksaan pertama (initial inspection) dan pengujian berkala untuk memverifikasi struktur kekuatan mekanis, fondasi getaran, dan keandalan sistem rem/interlock.
- **Kualifikasi Personel Operator**: Larangan tegas bagi individu tanpa kompetensi terverifikasi untuk mengoperasikan mesin berisiko tinggi. Operator wajib memiliki lisensi resmi yang diperbarui secara teratur.
- **Pemasangan Perlengkapan Pengaman (Guarding)**: Semua bagian bergerak, titik jepit (pinch points), dan zona transmisi wajib dilengkapi pelindung fisik yang kokoh dan tidak mudah dilepas tanpa alat khusus.
- **Prosedur Tanggap Darurat & LOTO**: Ketersediaan tombol emergency stop di setiap stasiun kerja dan kepatuhan prosedur penguncian energi bahaya saat perbaikan mesin."
            ],
            [
                'title' => "Bab 3: Prinsip Keselamatan Mesin: Titik Bahaya (Pinch Points, Nip Points, & Rotating Shafts)",
                'content' => "Bahaya mekanik pada permesinan PTP timbul akibat gerakan relatif antara komponen mesin dengan material atau tubuh manusia. Di berbagai fasilitas pabrik {$regionName}, kecelakaan kerja mekanik sebagian besar terjadi pada tiga kategori titik bahaya utama:
                
1. **Titik Jepit (Pinch Points & Shear Points)**: Terjadi ketika dua bagian mesin bergerak saling mendekat, atau satu bagian bergerak mendekati bagian diam. Contoh nyata adalah gerakan ram turun pada mesin press stamping, pisau potong pada mesin shearing, dan cetakan pada mesin die casting. Tekanan yang dihasilkan mencapai puluhan ton per inci persegi dan dapat menyebabkan amputasi seketika.
2. **Titik Telan (Nip Points / In-Running Rolls)**: Terbentuk pada titik pertemuan dua silinder berputar berlawanan arah, atau antara komponen berputar dengan sabuk/rantai pembawa. Contohnya pada mesin roll bending plat, titik singgung v-belt dengan puli, dan roda gigi terbuka. Komponen ini memiliki kecenderungan menarik pakaian, sarung tangan, atau jari operator ke dalam putaran.
3. **Poros Berputar Terbuka (Rotating Shafts & Projections)**: Poros penggerak mesin yang berputar kencang tanpa tutup pelindung dapat melilit rambut panjang, dasi, atau ujung baju operator dalam hitungan sepersekian detik. Tonjolan kecil seperti pasak poros (keyway) atau baut pengikat kopling yang menonjol memperbesar risiko terlilit secara eksponensial."
            ],
            [
                'title' => "Bab 4: Spesifikasi dan Standar Pengoperasian Penggerak Mula (Genset, Diesel, Turbin)",
                'content' => "Mesin Penggerak Mula merupakan sumber daya utama yang menggerakkan roda perindustrian di {$regionName}. Pengoperasian genset diesel kapasitas besar dan turbin industri memerlukan tahapan operasional sistematis guna mencegah kerusakan internal mesin (engine seizure) dan bahaya kebakaran:
                
- **Pemeriksaan Pra-Start (Pre-Start Checklist)**: Verifikasi level oli pelumas berada pada batas normal dipstick, air pendingin radiator penuh, tidak ada kebocoran solar di jalur bahan bakar, tegangan baterai starter minimal 24-27 VDC, dan kran udara sirkulasi terbuka lebar.
- **Prosedur Start-Up & Warming Up**: Menyalakan mesin dalam kondisi tanpa beban (idle run) selama 3-5 menit untuk menstabilkan sirkulasi oli ke seluruh bantalan crankshaft dan turbocharger sebelum dibebani secara bertahap.
- **Sinkronisasi Generator Paralel**: Ketika mengoperasikan dua genset atau lebih secara paralel di {$regionName}, operator wajib memverifikasi empat parameter sinkronisasi: tegangan listrik sama, frekuensi sama (50 Hz), urutan fasa identik (R-S-T), dan sudut fasa sefasa (in-phase) yang dipantau melalui synchroscope.
- **Prosedur Cooling Down & Shut-Down**: Menurunkan beban secara bertahap hingga nol, membiarkan mesin berputar idle selama 5 menit guna mendinginkan rumah turbocharger, kemudian mematikan mesin secara normal."
            ],
            [
                'title' => "Bab 5: Sistem Pelumasan, Pendinginan, dan Pembuangan Gas Buang Penggerak Mula",
                'content' => "Keandalan jangka panjang unit penggerak mula di {$regionName} sangat bergantung pada kebersihan dan efisiensi tiga sistem fluida utama:
                
| Sistem Fluida | Fungsi Kritis | Parameter Normal | Indikasi Bahaya |
|---|---|---|---|
| Sistem Pelumasan | Membentuk lapisan film oli antara crankshaft, silinder, dan bantalan; meredam panas gesekan | Tekanan: 3.5 - 5.5 bar; Suhu oli: 85°C - 105°C | Tekanan drop < 2.0 bar (seizure risk), oli berbusa atau tercampur air |
| Sistem Pendinginan | Menyerap panas pembakaran di water jacket silinder menuju radiator / heat exchanger | Suhu coolant keluar: 80°C - 92°C; Tekanan cap: 0.9 bar | Suhu > 98°C (overheating), level ekspansi habis, selang bocor |
| Sistem Gas Buang | Membuang gas hasil pembakaran via manifold, turbocharger, dan muffler ke udara bebas | Suhu gas buang (EGT): 380°C - 520°C; Backpressure rendah | Asap hitam tebal (overload/injektor kotor), asap putih (kebocoran air/oli) |

Operator penggerak mula di {$regionName} dilatih menganalisis visual kondisi oli dan melakukan penggantian filter oli serta filter solar secara presisi sesuai jam operasi (running hours)."
            ],
            [
                'title' => "Bab 6: Proteksi Overheat, Overspeed, dan Getaran Berlebih pada Motor Penggerak",
                'content' => "Unit penggerak mula modern dilengkapi sistem proteksi otomatis yang dirancang untuk mematikan mesin sebelum terjadi kehancuran struktural mekanis. Dalam pelatihan PTP di {$regionName}, operator dibimbing memahami mekanisme kerja sistem proteksi kritis berikut:
                
1. **Proteksi Putaran Lebih (Overspeed Trip Mechanism)**:
Kondisi putaran mesin melebihi batas desain (biasanya > 115% rated RPM) dapat memicu pelemparan connecting rod menembus blok mesin akibat gaya sentrifugal ekstrem. Proteksi overspeed bekerja ganda: melalui sensor kecepatan pickup magnetik elektronik dan governor mekanik darurat yang langsung menutup katup pasokan udara (air shut-off flap).
                
2. **Proteksi Penurunan Tekanan Oli (Low Oil Pressure Switch)**:
Sakelar tekanan mendeteksi penurunan tekanan oli di bawah ambang batas aman. Ketika tekanan turun mendadak akibat kebocoran pipa atau kegagalan pompa oli, sistem memutus pasokan bahan bakar dalam tempo kurang dari 3 detik.
                
3. **Proteksi Suhu Tinggi (High Water Temperature Switch)**:
Mencegah terjadinya keretakan silinder head dan pemuaian piston yang memicu kemacetan mesin. Sensor termokopel akan membunyikan alarm peringatan pada suhu 95°C dan melakukan automatic shutdown pada 102°C.
                
4. **Proteksi Getaran Berlebih (High Vibration Sensor)**:
Sensor akselerometer yang dipasang pada pondasi genset memantau ketidakseimbangan mekanis akibat kelonggaran baut pengikat, kegagalan coupling, atau misalignment poros."
            ],
            [
                'title' => "Bab 7: Standar Keselamatan Mesin Perkakas: Bubut (Lathe) dan Pemesinan Rotasi",
                'content' => "Mesin bubut (engine lathe) merupakan mesin perkakas fundamental yang paling banyak digunakan di bengkel fabrikasi dan rekayasa di {$regionName}. Namun, mesin ini juga mencatat angka kecelakaan serius yang tinggi akibat sifat putaran benda kerja yang terbuka.
                
Standar keselamatan mutlak pengoperasian mesin bubut meliputi:
- **Pemasangan Pelindung Cekam (Chuck Guard)**: Pelindung transparan polikarbonat kokoh yang menutupi cekam putar 3-jaw atau 4-jaw. Guard wajib dilengkapi sakelar interlock listrik sehingga spindel mesin tidak dapat berputar bila pelindung terbuka.
- **Kunci Cekam Bersistem Pegas (Spring-Loaded Chuck Key)**: Penggunaan kunci cekam yang selalu melompat keluar dari lubang cekam saat dilepas. Mengabaikan kunci cekam tertinggal di dalam cekam saat mesin dihidupkan adalah penyebab utama cedera fatal akibat proyektil logam.
- **Larangan Penggunaan Sarung Tangan**: Operator dilarang keras mengenakan sarung tangan kain atau kulit saat membubut, karena serat sarung tangan sangat mudah tersangkut pada permukaan berputar dan menarik seluruh lengan operator ke dalam mesin.
- **Pembersihan Tatal Menggunakan Kait Khusus**: Serpihan tatal (chips) logam yang panjang dan tajam dilarang ditarik menggunakan tangan kosong; gunakan selalu kait penarik tatal (chip hook) dan kuas pembersih saat mesin dalam kondisi berhenti."
            ],
            [
                'title' => "Bab 8: Mitigasi Bahaya Terlilit Benda Kerja, Terlempar Tatal, & Perlindungan Chuck Guard",
                'content' => "Fenomena terlilit pada mesin bubut di bengkel industri {$regionName} umumnya berawal dari pelanggaran disiplin seragam kerja dan kelalaian operator dalam menjaga jarak aman.
                
Aturan baku pencegahan bahaya lilitan:
1. **Pakaian Kerja (Wearpack) Pas Badan**: Ujung lengan baju harus berkancing rapat atau digulung rapi ke arah dalam di atas siku. Baju tidak boleh longgar atau memiliki tali menjuntai.
2. **Pengikatan Rambut dan Penutup Kepala**: Rambut panjang wajib diikat rapat dan dimasukkan ke dalam topi kerja atau hairnet keselamatan.
3. **Pelepasan Aksesoris Pribadi**: Cincin logam, jam tangan, kalung, kartu identitas berkalung tali (lanyard) wajib dilepas sebelum mendekati area mesin perkakas.
                
Selain bahaya lilitan, serpihan tatal logam yang dipotong dengan kecepatan potong tinggi dapat mencapai suhu 400°C dan terlempar dengan kecepatan belasan meter per detik. Pelatihan PTP di {$regionName} menekankan pentingnya pemasangan pelindung tatal (chip deflector), penggunaan kacamata keselamatan berstandar dampak tinggi (ANSI Z87.1), serta pemilihan geometri pemecah tatal (chip breaker) pada insert karbida untuk menghasilkan potongan tatal pendek berbentuk huruf C yang aman."
            ],
            [
                'title' => "Bab 9: Pengoperasian Mesin Frais (Milling) dan Pusat Pemesinan Otomatis (CNC)",
                'content' => "Mesin frais vertikal/horizontal dan pusat pemesinan CNC (Computer Numerical Control) menawarkan kepresisian geometri tingkat tinggi dengan putaran pisau frais (milling cutter) mencapai ribuan RPM di kawasan manufaktur {$regionName}.
                
Prosedur pengoperasian aman mesin frais:
- **Pengikatan Ragum dan Benda Kerja**: Ragum mesin harus dibaut kuat pada meja alur T menggunakan mur T-slot dan baut berkekuatan tinggi. Benda kerja harus ditumpu paralel blok yang rata dan dijepit dengan torsi memadai agar tidak terlepas saat menerima gaya sayat tinggi.
- **Arah Pemakanan (Climb Milling vs Conventional Milling)**: Pada mesin konvensional dengan kelonggaran ulir meja (backlash), operator wajib menggunakan metode konvensional (up-milling) untuk mencegah meja tertarik ke dalam pisau potong. Metode climb milling (down-milling) hanya boleh diterapkan pada mesin dengan sistem bola ulir (ball screw) tanpa kelonggaran.
- **Keselamatan Mesin CNC**: Mesin CNC modern dilengkapi kabin tertutup penuh (full enclosure). Operator wajib memverifikasi bahwa sakelar interlock pintu penutup berfungsi sempurna, melakukan uji lintasan program (dry run) dengan sumbu Z terangkat, memverifikasi ketinggian alat potong (tool height offset), dan selalu bersiap menekan tombol Feed Hold atau Emergency Stop saat uji coba program baru di {$regionName}."
            ],
            [
                'title' => "Bab 10: Standar Keselamatan Mesin Gerinda (Grinding Wheel Speed Test & Ring Test)",
                'content' => "Roda gerinda (grinding wheel) merupakan piringan komposit butiran abrasif yang diikat bahan perekat (bonding agent). Roda ini berputar dengan kecepatan linier permukaan mencapai 30 hingga 60 meter per detik. Keretakan mikro pada roda gerinda dapat menyebabkan ledakan pecahan batu gerinda yang berkekuatan setara peluru mortir.
                
Protokol keselamatan gerinda yang diajarkan dalam pelatihan di {$regionName}:
1. **Pengujian Suara Roda Gerinda (Ring Test)**:
Sebelum batu gerinda dipasang pada poros mesin gerinda duduk atau gerinda silindris, roda digantung pada pin atau jari lalu diketuk perlahan menggunakan gagang obeng kayu/plastik ringan pada 4 titik berjarak 45 derajat. Batu gerinda yang bebas retak akan menghasilkan bunyi denting logam jernih (ring sound). Jika menghasilkan bunyi mati atau nada sumbang (thud), batu gerinda retak dan wajib segera dihancurkan agar tidak digunakan kembali!
                
2. **Pemeriksaan Kecepatan Maksimum (Maximum Safe Operating Speed)**:
Kecepatan putar poros mesin (RPM) tidak boleh melebihi batas RPM maksimum yang tercetak pada label kertas roda gerinda.
                
3. **Penyetelan Jarak Penyangga Kerja (Tool Rest Gap)**:
Jarak antara dudukan benda kerja (tool rest) dengan permukaan batu gerinda harus dijaga maksimal **3 milimeter**, dan jarak pelindung atas (spark arrestor) maksimal **6 milimeter**. Celah yang terlalu longgar berisiko menjepit benda kerja di antara batu gerinda dan dudukan, yang langsung memicu ledakan batu gerinda di {$regionName}."
            ],
            [
                'title' => "Bab 11: Prinsip Kerja dan Klasifikasi Mesin Produksi: Mechanical & Hydraulic Press",
                'content' => "Mesin Press Produksi merupakan pilar utama pembuatan komponen lembaran plat logam (sheet metal stamping) untuk sektor otomotif, elektronik, dan peralatan rumah tangga di {$regionName}.
                
Perbandingan arsitektur mesin press industri:
- **Mechanical Power Press**: Memanfaatkan energi kinetik yang tersimpan pada roda gila (flywheel) berbobot tonase besar yang diputar motor listrik. Ketika kopling diaktifkan, energi diteruskan melalui poros engkol (crankshaft) atau eksentrik untuk menggerakkan ram turun dalam siklus cepat. Mesin press mekanik unggul dalam kecepatan siklus pukulan (stroke per minute tinggi), ideal untuk proses punching, blanking, dan stamping cepat.
- **Hydraulic Press**: Menggunakan fluida oli hidrolik bertekanan tinggi dari pompa hidrolik untuk menekan silinder ram silinder besar. Tekanan dapat diatur secara konstan sepanjang langkah kerja (stroke) dan ram dapat dihentikan atau dibalikkan arahnya pada titik mana pun. Press hidrolik ideal untuk proses deep drawing (penarikan plat dalam), pembentukan profil kompleks, dan penekanan cetakan bervolume besar di pabrik {$regionName}.
                
Keduanya menghasilkan gaya tekan mulai dari 15 ton hingga lebih dari 2.500 ton yang memerlukan perlindungan titik operasi mutlak bagi operator."
            ],
            [
                'title' => "Bab 12: Bahaya Kritis Mesin Stamping Press dan Titik Jepit Matriks (Die Pinch Points)",
                'content' => "Titik jepit antara cetakan atas (upper die/punch) dan cetakan bawah (lower die/die matrix) merupakan zona bahaya paling mematikan pada mesin press stamping. Di wilayah perindustrian {$regionName}, insiden kerja pada mesin press tanpa pelindung seringkali berakibat amputasi jari atau telapak tangan operator.
                
Faktor penyebab terjadinya kecelakaan titik jepit cetakan:
- Operator memasukkan tangan ke dalam area cetakan untuk memposisikan lembaran material mentah atau mengambil produk jadi yang tersangkut saat ram sedang meluncur turun.
- Terjadinya siklus pukulan berulang yang tidak diinginkan (repeat stroke / double cycling) akibat kegagalan rem mekanis atau katup solenoid kopling yang macet.
- Tindakan bypass pengaman oleh operator atau operator lain yang menekan tombol injak pedal kaki (foot pedal switch) secara tidak sengaja saat tangan rekan kerja masih berada di dalam area die.
                
Prinsip dasar pelatihan PTP menyatakan: **Tangan operator tidak boleh sekalipun memasuki titik bahaya cetakan (Point of Operation) saat sumber energi mesin masih aktif.** Seluruh proses pemasukan dan pengeluaran material wajib memanfaatkan bantuan alat penjepit mekanik (hand tools), feeder otomatis, atau pelindung optoelektronik canggih."
            ],
            [
                'title' => "Bab 13: Sistem Proteksi Titik Operasi: Light Curtain, Dua Tombol Kontrol, & Interlock",
                'content' => "Guna menjamin keselamatan operator mesin press di {$regionName}, industri wajib menerapkan sistem rekayasa proteksi titik operasi berstandar tinggi:
                
1. **Tirai Cahaya Pengaman (Safety Light Curtain)**:
Perangkat optoelektronik yang memancarkan serangkaian sinar inframerah sejajar di depan zona cetakan. Ketika satu atau lebih berkas sinar terputus oleh tangan operator, sistem kontrol keselamatan dalam tempo milidetik memerintahkan katup ganda rem-kopling untuk menghentikan ram seketika. Jarak pemasangan tirai cahaya dihitung presisi menggunakan rumus waktu henti mesin (Safety Distance Formula ISO 13855).
                
2. **Sistem Kendali Dua Tangan (Two-Hand Control System)**:
Dua tombol tekan start yang diposisikan sedemikian rupa sehingga operator terpaksa menggunakan kedua tangannya secara bersamaan untuk memulai siklus press. Sistem ini wajib memenuhi standar Anti-Tie Down (tidak dapat dioperasikan bila salah satu tombol diganjal) dan Sinkronisasi Waktu (kedua tombol harus ditekan dalam selang waktu maksimal 0.5 detik).
                
3. **Pintu Pengaman Ber-Interlock (Interlocked Barrier Guards)**:
Gerbang fisik transparan yang menutupi bagian depan, samping, dan belakang mesin press. Gerbang dilengkapi sakelar keselamatan berkode magnetik atau RFID yang langsung mematikan suplai daya jika pintu digeser terbuka di fasilitas pabrik {$regionName}."
            ],
            [
                'title' => "Bab 14: Pengoperasian Mesin Potong Plat (Shearing) dan Tekuk Logam (Press Brake)",
                'content' => "Peralatan pemotongan dan penekukan plat di bengkel fabrikasi {$regionName} memiliki potensi bahaya jepit linier sepanjang bilah pisau dan ram tekuk:
                
- **Mesin Potong Plat (Guillotine Shearing Machine)**:
Mesin ini memotong plat menggunakan bilah pisau bawah tetap dan pisau atas miring bergerak turun. Sebelum pisau menyentuh plat, deretan silinder penjepit (hold-down clamps) menekan plat dengan kuat ke meja mesin. Operator wajib dilindungi oleh pelindung jari tetap (finger guard) di sepanjang garis potong dengan bukaan celah tidak boleh melebihi ketebalan jari operator. Larangan keras memotong lembaran kecil yang memaksa jari mendekati garis potong di bawah 100 mm tanpa alat bantu dorong.
                
- **Mesin Tekuk Plat (Press Brake)**:
Membengkokkan plat lembaran menggunakan punch atas berbentuk V yang menekan plat ke dalam die bawah. Bahaya utama mencakup terjepitnya jari di antara punch dan plat, serta terbenturnya dagu atau dada operator akibat hentakan plat yang terangkat ke atas secara tiba-tiba saat ditekuk. Mesin press brake modern di {$regionName} wajib dilengkapi sensor laser optik pengikut langkah tekuk (laser guarding system) yang melindungi ujung jari tepat di bawah mata pisau tekuk."
            ],
            [
                'title' => "Bab 15: Standar Keselamatan Mesin Cetak Injeksi Plastik (Injection Molding) dan Extruder",
                'content' => "Mesin Cetak Injeksi Plastik dan Mesin Extruder dalam klasifikasi PTP menggabungkan bahaya mekanik penjepitan cetakan tonase besar, tekanan fluida hidrolik hingga ratusan bar, serta suhu leleh polimer plastik mencapai 300°C di kawasan industri polimer {$regionName}.
                
Protokol keselamatan mesin injection molding:
- **Proteksi Tiga Lapis Pintu Pengaman (Triple Safety Interlock Gate)**: Pintu gerbang utama operator dilengkapi tiga sistem interlock independen: interlock elektrik (limit switch memutus sinyal controller), interlock hidrolik (katup mekanis membuang tekanan oli silinder cetakan), dan interlock mekanik (safety bar fisik mengganjal plat cetakan agar tidak dapat menutup saat pintu terbuka).
- **Bahaya Semburan Polimer Panas (Molten Plastic Blowout)**: Saat melakukan pembersihan nozzle (purging), operator wajib mengenakan pelindung wajah penuh (full face shield), sarung tangan tahan panas panjang, dan pakaian tebal guna mengantisipasi letupan uap polimer panas yang terperangkap di dalam barel.
- **Mitigasi Bahaya Keracunan Gas Dekomposisi Plastik**: Bahan plastik tertentu seperti PVC atau POM yang tertinggal terlalu lama di dalam barel panas dapat mengalami dekomposisi kimiawi dan melepaskan gas hidrogen klorida atau formaldehida yang sangat beracun di ruang kerja {$regionName}."
            ],
            [
                'title' => "Bab 16: Klasifikasi dan Teknologi Dapur Peleburan: Tanur Induksi, Busur Listrik, & Kupola",
                'content' => "Dapur Peleburan Logam (Furnace) di industri pengecoran dan smelter {$regionName} beroperasi pada rentang suhu antara 700°C (peleburan aluminium) hingga di atas 1.650°C (peleburan baja paduan).
                
Karakteristik teknologi dapur peleburan utama:
1. **Tanur Induksi Frekuensi Menengah (Induction Furnace)**:
Bekerja dengan prinsip elektromagnetik induksi Faraday. Arus bolak-balik frekuensi tinggi dialirkan melalui lilitan pipa tembaga berpendingin air (water-cooled copper coil), menciptakan medan magnet kuat yang menginduksi arus eddy di dalam bahan baku logam scrap hingga meleleh dengan cepat. Keunggulannya adalah efisiensi energi tinggi, kebersihan lingkungan kerja, dan pengadukan alami cairan logam (electromagnetic stirring).
                
2. **Tanur Busur Listrik (Electric Arc Furnace - EAF)**:
Memanfaatkan panas busur listrik bertegangan tinggi yang meloncat di antara tiga elektroda grafit raksasa menuju tumpukan scrap logam baja. Menghasilkan suhu busur mencapai 3.000°C, mampu meleburkan ratusan ton scrap dalam hitungan jam di pabrik baja besar {$regionName}.
                
3. **Tanur Kupola (Cupola Furnace)**:
Tanur vertikal berbahan bakar kokas dan tiupan udara panas (blast air) untuk mencairkan besi kasar (pig iron) dan scrap besi cor. Memerlukan penanganan kontinu terak cair dan gas buang yang intensif."
            ],
            [
                'title' => "Bab 17: Bahaya Termal Ekstrem, Ledakan Uap Logam Cair, dan Pencegahan Slag Eruption",
                'content' => "Bahaya paling katastropik di lingkungan dapur peleburan logam {$regionName} adalah **Ledakan Uap Logam Cair (Molten Metal Steam Explosion)**. Ketika air atau cairan masuk ke dalam atau tertutup oleh cairan logam bersuhu 1.500°C, air akan mengalami ekspansi volume seketika menjadi uap sebesar lebih dari 1.600 kali lipat dalam hitungan fraksi detik, menimbulkan gelombang kejut ledakan dahsyat yang menyemburkan ribuan liter cairan logam ke segala arah.
                
Aturan emas keselamatan dapur peleburan:
- **Pemeriksaan Kekeringan Bahan Baku (Scrap Pre-Heating & Drying)**: Dilarang keras memasukkan material scrap logam yang basah, berkarat basah, tertutup es/embun, atau memiliki rongga tertutup (seperti pipa tertutup atau kaleng bekas) langsung ke dalam cairan logam cair. Seluruh scrap wajib dipanaskan awal hingga benar-benar kering sebelum dimasukkan ke dalam tanur.
- **Integritas Sistem Pendingin Air (Coil Cooling Circuit)**: Kebocoran kecil pada jaket air pendingin atau coil induksi dapat meneteskan air ke dalam dasar tanur. Sistem dilengkapi sensor deteksi kebocoran ground (earth fault detector) dan sensor tekanan diferensial pendingin untuk memutus daya secara otomatis.
- **Pencegahan Letupan Terak (Slag Eruption)**: Penambahan bahan fluks pembentuk terak harus dilakukan secara bertahap dan menggunakan alat khusus agar tidak memicu reaksi mendadak di fasilitas peleburan {$regionName}."
            ],
            [
                'title' => "Bab 18: Perlengkapan Perlindungan Diri (APD) Khusus Suhu Ekstrem dan Logam Panas",
                'content' => "Operator dapur peleburan dan penuangan logam cair di {$regionName} wajib mengenakan APD khusus yang dirancang untuk memantulkan radiasi termal inframerah dan menolak lekatnya tetesan logam cair:
                
- **Pakaian Aluminium Tahan Radiasi Panas (Aluminized Proximity Suit)**: Memantulkan hingga 95% panas radiasi elektromagnetik dari cairan logam. Bagian dalam terbuat dari serat aramid (Kevlar/Nomex) tahan api yang tidak meleleh atau terbakar.
- **Helm Khusus dengan Pelindung Wajah Emas (Gold-Coated Face Shield)**: Kaca pelindung polikarbonat berlapisan partikel emas tipis yang efektif menahan radiasi sinar inframerah dan ultraviolet yang dapat memicu katarak termal pada mata operator.
- **Pelindung Kaki dan Sepatu Foundry (Foundry Safety Boots & Gaiters)**: Sepatu kulit khusus tanpa lubang tali di bagian atas (menggunakan sistem quick-release gesper elastis) dan pelindung betis (spats/gaiters) agar percikan cairan logam tidak dapat masuk ke dalam kaus kaki operator.
- **Sarung Tangan Kulit Tebal Berlapis Wol / Kevlar**: Tahan kontak panas singkat dan melindungi jari tangan saat mengoperasikan tuas ladle penuangan di kawasan peleburan {$regionName}."
            ],
            [
                'title' => "Bab 19: Transmisi Tenaga Mekanik: Pemeliharaan Poros, Bantalan (Bearing), dan Kopling",
                'content' => "Rangkaian transmisi tenaga mekanik bertugas menyalurkan daya torsi dari penggerak ke seluruh unit mesin operasional di {$regionName}. Kegagalan pada poros, bantalan, atau kopling dapat menghentikan seluruh lini produksi secara mendadak.
                
Aspek pemeliharaan kritis transmisi mekanik:
- **Pemeriksaan Kelurusan Poros (Shaft Run-Out)**: Mengukur deviasi kelurusan putaran poros menggunakan Dial Test Indicator (DTI). Batas run-out radial dan aksial pada poros transmisi tidak boleh melebihi 0.03 - 0.05 mm untuk mencegah timbulnya gaya getaran resonansi.
- **Manajemen Pelumasan Bantalan (Bearing Greasing)**: Menggunakan gemuk pelumas (grease) dengan viskositas oli dasar dan sabun pengental yang sesuai beban dan RPM. Bahaya pelumasan berlebih (over-greasing) sama berbahayanya dengan kekurangan pelumasan, karena dapat menyebabkan kenaikan suhu bantalan (churning heat) dan rusaknya sil debu bantalan.
- **Kopling Industri (Coupling Maintenance)**: Kopling fleksibel (seperti elastomeric jaw, disc coupling, gear coupling) wajib diperiksa secara berkala terhadap keausan elemen karet peredam, kelonggaran baut flensa, dan kecukupan gemuk pelumas di dalam rumah kopling di fasilitas industri {$regionName}."
            ],
            [
                'title' => "Bab 20: Sistem Transmisi Roda Gigi (Gearbox), Rantai (Chain Drive), & Sabuk (Belt & Pulley)",
                'content' => "Tiga metode transmisi mekanis yang paling luas diterapkan di pabrik-pabrik {$regionName} memiliki karakteristik pemeliharaan dan pengamanan spesifik:
                
| Jenis Transmisi | Keunggulan Operasional | Mode Kegagalan Kritis | Prosedur Pencegahan |
|---|---|---|---|
| Transmisi Gearbox | Rasio putaran absolut, daya torsi sangat besar, umur pakai panjang | Pitting pada gigi, micropitting, keausan abrasive, keretakan akar gigi | Penggantian oli roda gigi industri teratur, analisis keausan partikel logam (wear debris), periksa backlash |
| Transmisi Rantai & Sprocket | Transmisi jarak poros menengah, tanpa slip putaran, tahan kondisi kotor | Perpanjangan rantai (elongation) akibat aus pin rantai, gigi sprocket lancip | Penyetelan kelonggaran rantai (slack 2-3% jarak sumbu poros), pelumasan tetes/rendam oli teratur |
| Transmisi Sabuk (V-Belt) | Meredam kejut putaran, biaya ekonomis, mudah penggantian | Slip sabuk akibat longgar, retak permukaan sabuk, aus alur puli | Pengukuran ketegangan sabuk menggunakan tension meter, pelurusan puli dengan alat laser |

Seluruh transmisi terbuka di {$regionName} wajib ditutup pengaman guna menghindari titik telan (nip point) yang berbahaya bagi manusia."
            ],
            [
                'title' => "Bab 21: Pemasangan Tutup Pengaman (Machine Guarding) & Interlock Fisik Transmisi",
                'content' => "Tutup Pengaman (Machine Guarding) merupakan lini pertahanan rekayasa teknik terdepan dalam mencegah anggota tubuh tenaga kerja bersentuhan dengan komponen bergerak mesin PTP di {$regionName}.
                
Kriteria rancang bangun tutup pengaman yang memenuhi standar:
1. **Kekuatan Struktural**: Mampu menahan benturan fisik dari luar serta mampu menahan pecahan komponen mesin yang putus/patah dari dalam (seperti sabuk putus atau rantai lepas).
2. **Dimensi Celah dan Jarak Aman (Safety Clearance ISO 13857)**: Jika menggunakan pelindung kasa kawat atau plat berlubang, ukuran lubang tidak boleh memungkinkan jari atau tangan pekerja menjangkau titik bahaya di dalamnya.
3. **Pemasangan Pengencang Khusus**: Guard harus terikat permanen menggunakan baut yang hanya dapat dilepas menggunakan perkakas kunci mekanik khusus; dilarang menggunakan pengunci cepat tangan tanpa baut.
4. **Sakelar Interlock Keselamatan (Safety Interlock Switches)**: Pintu atau penutup akses yang sering dibuka untuk pembersihan wajib dilengkapi sakelar interlock keselamatan ganda (dual-channel safety switch) yang langsung mematikan suplai daya motor listrik saat penutup diangkat di lokasi kerja {$regionName}."
            ],
            [
                'title' => "Bab 22: Teknik Alignment Laser Poros dan Analisis Getaran Spektrum Frekuensi (FFT)",
                'content' => "Penyelarasan poros (shaft alignment) yang presisi antara motor penggerak dengan poros mesin kerja merupakan kunci utama keandalan peralatan PTP di {$regionName}. Misalignment poros menyumbang lebih dari 50% penyebab kerusakan dini pada bearing dan seal mekanik.
                
Metode modern alignment poros dan deteksi getaran:
- **Teknik Alignment Laser Dua Berkas (Dual-Beam Laser Alignment)**: Menggunakan unit sensor laser optik nirkabel yang dipasang pada kedua poros. Sistem menghitung secara otomatis penyimpangan sudut (angular misalignment) dan penyimpangan sejajar (parallel offset) pada bidang horizontal dan vertikal, serta memberikan panduan presisi ketebalan pelat ganjal (shims) yang harus ditambahkan di bawah kaki motor.
- **Analisis Spektrum Getaran FFT (Fast Fourier Transform)**: Pengukuran getaran menggunakan akselerometer piezoelektrik portabel untuk membedah frekuensi getaran mesin:
  - Puncak getaran pada 1x RPM mengindikasikan masalah ketidakseimbangan massa putar (unbalance).
  - Puncak getaran pada 2x RPM dengan perbedaan fasa 180 derajat mengindikasikan ketidaksejajaran poros (misalignment).
  - Puncak frekuensi tinggi non-sinkron mengindikasikan kerusakan lintasan bola bantalan (bearing fault frequency) di fasilitas industri {$regionName}."
            ],
            [
                'title' => "Bab 23: Prosedur Lockout Tagout (LOTO) Terpadu pada Perbaikan dan Pemeliharaan Mesin PTP",
                'content' => "Lockout / Tagout (LOTO) adalah prosedur keselamatan terpenting dalam mengisolasi sumber energi bahaya (listrik, mekanik, hidrolik, pneumatik, termal, dan gravitasi) sebelum teknisi melakukan intervensi pemeliharaan pada mesin PTP di {$regionName}.
                
Enam langkah baku prosedur LOTO:
1. **Persiapan Pemadaman (Preparation)**: Mengidentifikasi seluruh jenis dan titik isolasi energi bahaya yang terhubung ke unit mesin.
2. **Pemadaman Mesin (Shutdown)**: Mematikan mesin secara normal melalui tombol kendali operasional.
3. **Isolasi Energi (Isolation)**: Memutuskan pemutus tenaga listrik utama (circuit breaker), menutup katup pasokan hidrolik/pneumatik, dan memutus suplai bahan bakar.
4. **Pemasangan Gembok dan Label (Lock & Tag Application)**: Memasang gembok keselamatan pribadi (Safety Padlock) dan label identitas (Danger Tag) pada setiap perangkat pemutus energi. Kunci gembok dipegang sendiri oleh teknisi bersangkutan.
5. **Pelepasan Energi Sisa (Dissipation of Stored Energy)**: Membuang sisa tekanan oli hidrolik, mengosongkan tangki akumulator pneumatik, memasang ganjal pengaman mekanik (safety die block) di bawah ram mesin press untuk menahan energi gravitasi.
6. **Verifikasi Isolasi (Verification / Zero Energy Test)**: Menguji menekan tombol start mesin untuk memastikan mesin benar-benar tidak dapat beroperasi (Zero Energy State) sebelum pekerjaan pemeliharaan dimulai di {$regionName}."
            ],
            [
                'title' => "Bab 24: Inspeksi Harian dan Pre-Operational Checklist Pengoperasian Mesin PTP",
                'content' => "Sebelum memulai giliran kerja (shift) di pabrik {$regionName}, setiap operator PTP wajib melaksanakan pemeriksaan pra-operasional (Pre-Operational Inspection) secara konsisten menggunakan formulir checklist standar:
                
Daftar checklist harian operator PTP:
- **Pemeriksaan Visual Umum**: Area kerja di sekitar mesin bersih dari tumpahan minyak/air, kabel listrik rapi tanpa luka isolasi, jalur evakuasi bebas halangan.
- **Tingkat Fluida Mesin**: Memeriksa kecukupan oli pelumas gearbox, oli hidrolik pada sight glass reservoir, cairan pendingin mesin, dan cairan pemotong (coolant).
- **Integritas Pelindung Fisik**: Memastikan semua tutup pengaman rantai, puli, roda gigi, dan poros terpasang kokoh dengan baut kencang.
- **Pengujian Fungsi Pengaman**: Menguji coba fungsi sensor tirai cahaya, sistem kendali dua tangan, sakelar interlock pintu gerbang, dan tombol emergency stop.
- **Uji Coba Putaran Tanpa Beban**: Menjalankan mesin sesaat tanpa beban untuk mendengarkan potensi suara benturan mekanik abnormal, getaran mencurigakan, atau bau terbakar sebelum memulai produksi massal di {$regionName}."
            ],
            [
                'title' => "Bab 25: Pengujian Tidak Merusak (Non-Destructive Testing / NDT) pada Komponen Kritis PTP",
                'content' => "Pengujian Tidak Merusak (NDT) digunakan untuk mendeteksi retak mikro, rongga las, dan keausan logam pada komponen berbeban dinamis tinggi tanpa merusak fisik komponen mesin PTP di {$regionName}:
                
Metode NDT utama pada mesin PTP:
- **Liquid Penetrant Testing (PT)**: Menggunakan cairan zat pewarna merah kapiler yang disemprotkan ke permukaan poros atau sambungan las rangka mesin press. Setelah dibersihkan dan disemprot zat pengembang putih (developer), retakan mikro di permukaan akan memunculkan garis merah tajam yang terlihat jelas.
- **Magnetic Particle Testing (MT)**: Diterapkan pada material feromagnetik seperti poros engkol dan roda gigi baja. Medan magnet dialirkan melalui yoke magnetik sambil menaburkan serbuk besi halus untuk memunculkan garis fluks bocor pada retakan bawah permukaan.
- **Ultrasonic Testing (UT)**: Memancarkan gelombang suara frekuensi tinggi (1 - 10 MHz) ke dalam badan poros tebal atau dinding silinder hidrolik untuk mendeteksi cacat rongga internal (internal voids) dan mengukur sisa ketebalan dinding logam akibat korosi atau erosi termal di fasilitas industri {$regionName}."
            ],
            [
                'title' => "Bab 26: Prosedur Tanggap Darurat: Emergency Stop Button, Kebakaran Mesin, & Pertolongan Pertama",
                'content' => "Kesiapsiagaan tanggap darurat merupakan benteng terakhir dalam meminimalkan dampak fatalitas saat terjadi kegagalan operasional mesin di {$regionName}:
                
- **Standar Tombol Penghenti Darurat (Emergency Stop Button)**:
Tombol E-Stop wajib berbentuk jamur berwarna merah mencolok dengan latar belakang kuning kontras, memiliki mekanisme pengunci mekanis (twist-to-reset atau pull-to-reset), dan dipasang pada lokasi yang mudah dijangkau dari setiap sudut stasiun kerja mesin. Penekanan tombol E-Stop harus memutus suplai tenaga ke seluruh aktuator mesin seketika tanpa menimbulkan bahaya sekunder baru.
                
- **Penanganan Kebakaran Mesin**:
Tersedianya Alat Pemadam Api Ringan (APAR) tipe Karbon Dioksida (CO2) atau Serbuk Kimia Kering (Dry Chemical Powder) di dekat panel mesin listrik dan unit genset. Dilarang keras menggunakan air untuk memadamkan kebakaran pada instalasi listrik aktif atau tumpahan cairan logam cair.
                
- **Pertolongan Pertama pada Kecelakaan Mesin**:
Jika terjadi insiden operator terjepit atau terlilit, tindakan pertama adalah **SEGERA TEKAN TOMBOL EMERGENCY STOP** atau matikan sakelar pemutus utama. Jangan memutar balik putaran mesin secara manual yang dapat memperparah kerusakan jaringan tubuh korban; segera hubungi tim medis darurat pabrik di {$regionName}."
            ],
            [
                'title' => "Bab 27: Program Pemeliharaan Berbasis Keandalan (Reliability-Centered Maintenance) Mesin PTP",
                'content' => "Industri modern di {$regionName} beralih dari pola pemeliharaan reaktif (breakdown maintenance) menuju strategi terpadu Pemeliharaan Berbasis Keandalan (Reliability-Centered Maintenance / RCM) guna memaksimalkan ketersediaan mesin (Availability) dan menekan biaya perbaikan:
                
Tiga pilar strategi pemeliharaan mesin PTP:
1. **Pemeliharaan Preventif (Preventive Maintenance - PM)**:
Jadwal pembersihan berkala, pelumasan rutin, penyetelan celah mekanik, dan penggantian komponen habis pakai (filter, sabuk, kampas rem) berdasarkan interval waktu atau jam operasional yang telah ditetapkan pabrikan.
                
2. **Pemeliharaan Prediktif (Predictive Maintenance - PdM)**:
Pemantauan kondisi kesehatan mesin secara online atau berkala menggunakan teknologi mutakhir: analisis spektrum getaran, termografi inframerah untuk mendeteksi titik panas kelistrikan/bantalan, analisis keausan partikel oli pelumas, dan uji ultrasonik keausan. Tindakan perbaikan hanya dilakukan saat parameter menunjukkan tren degradasi sebelum terjadi kegagalan total.
                
3. **Total Productive Maintenance (TPM)**:
Melibatkan operator mesin secara aktif dalam pemeliharaan mandiri (Autonomous Maintenance / Jishu Hozen) untuk membersihkan, melumasi, dan menginspeksi mesin kerja mereka setiap hari di pabrik {$regionName}."
            ],
            [
                'title' => "Bab 28: Sertifikasi Kompetensi dan Lisensi Sah Operator Pesawat Tenaga dan Produksi (PTP)",
                'content' => "Memiliki sertifikasi kompetensi resmi sebagai Operator Pesawat Tenaga dan Produksi merupakan bukti pengakuan atas dedikasi, keahlian teknis, dan kepatuhan terhadap standar keselamatan kerja tertinggi di {$regionName}.
                
Keunggulan memiliki sertifikasi lisensi resmi Operator PTP:
- **Pengakuan Kualifikasi Nasional**: Memastikan pemegang lisensi diakui keterampilannya di seluruh sektor perindustrian manufaktur, pembangkitan, perkapalan, dan pertambangan di Indonesia.
- **Kepatuhan Terhadap Standar Hukum Perusahaan**: Membantu manajemen perusahaan tempat bekerja memenuhi seluruh kriteria audit keselamatan kerja dan kelaikan instalasi mekanik.
- **Pencegahan Kecelakaan Kerja (Zero Accident)**: Operator bersertifikat memiliki kesadaran risiko bahaya yang mendalam dan refleks keselamatan terstandarisasi dalam menghadapi kondisi darurat permesinan.
- **Peningkatan Peluang Karir Profesional**: Membuka peluang jenjang karir yang luas sebagai operator senior, instruktur bengkel, supervisor lini produksi, hingga teknisi spesialis keandalan mesin di berbagai perusahaan terkemuka di {$regionName} dan skala nasional."
            ]
        ];

        // Format HTML content
        $html = "";
        $wordCount = 0;

        foreach ($chapters as $index => $chap) {
            $chapNum = $index + 1;
            $titleText = htmlspecialchars($chap['title'], ENT_QUOTES, 'UTF-8');
            $bodyText = $chap['content'];

            // Replace line breaks with paragraphs
            $paragraphs = explode("\n\n", $bodyText);
            $formattedBody = "";
            foreach ($paragraphs as $p) {
                $p = trim($p);
                if (empty($p)) continue;
                if (str_starts_with($p, '|')) {
                    // Simple table conversion
                    $rows = explode("\n", $p);
                    $tableHtml = "<div class='table-responsive my-4'><table class='table table-bordered table-striped text-sm'>";
                    foreach ($rows as $rIndex => $r) {
                        $cols = array_filter(array_map('trim', explode('|', $r)));
                        if (empty($cols) || str_contains($r, '---')) continue;
                        $tag = ($rIndex == 0) ? 'th' : 'td';
                        $tableHtml .= "<tr>";
                        foreach ($cols as $c) {
                            $tableHtml .= "<{$tag}>" . htmlspecialchars($c, ENT_QUOTES, 'UTF-8') . "</{$tag}>";
                        }
                        $tableHtml .= "</tr>";
                    }
                    $tableHtml .= "</table></div>";
                    $formattedBody .= $tableHtml;
                } elseif (str_starts_with($p, '1. ') || str_starts_with($p, '- ')) {
                    $lines = explode("\n", $p);
                    $listType = str_starts_with($p, '1. ') ? 'ol' : 'ul';
                    $formattedBody .= "<{$listType} class='my-3 pl-4'>";
                    foreach ($lines as $line) {
                        $lineText = preg_replace('/^(\\d+\\.|\\-)\\s+/', '', trim($line));
                        if (!empty($lineText)) {
                            // Bold check
                            $lineText = preg_replace('/\\*\\*(.*?)\\*\\*/', '<strong>$1</strong>', $lineText);
                            $formattedBody .= "<li class='mb-2'>" . $lineText . "</li>";
                        }
                    }
                    $formattedBody .= "</{$listType}>";
                } else {
                    $pText = preg_replace('/\\*\\*(.*?)\\*\\*/', '<strong>$1</strong>', $p);
                    $formattedBody .= "<p class='mb-3 text-justify leading-relaxed'>" . nl2br($pText) . "</p>";
                }
            }

            $html .= "<section class='article-chapter mb-5' id='bab-{$chapNum}'>";
            $html .= "<h2 class='h3 font-weight-bold text-navy border-bottom pb-2 mb-3'>{$titleText}</h2>";
            $html .= $formattedBody;
            $html .= "</section>";

            $wordCount += str_word_count(strip_tags($bodyText));
        }

        $excerpt = "Panduan teknis dan modul pelatihan komprehensif {$cleanTitle} di wilayah {$regionName}. Mengupas standar keselamatan penggerak mula genset, mesin perkakas bubut/frais/CNC, mesin press stamping, tanur peleburan, dan transmisi mekanik industri.";

        return [
            'title' => $cleanTitle,
            'region' => $regionName,
            'excerpt' => $excerpt,
            'content' => $html,
            'word_count' => $wordCount,
            'estimated_read_time' => max(18, (int)ceil($wordCount / 220))
        ];
    }

    /**
     * Dapatkan artikel dari database atau generate secara dinamis
     */
    public static function getOrSynthesizeArticle(string $slug, $regionData = []): array
    {
        // 1. Cek dari database jika ada
        $dbArticle = \App\Models\Article::where('slug', $slug)->orWhere('slug', 'like', $slug . '%')->first();
        if ($dbArticle) {
            return [
                'id' => $dbArticle->id,
                'title' => $dbArticle->title,
                'slug' => $dbArticle->slug,
                'category' => $dbArticle->category ?? 'Training Operator PTP Resmi',
                'author' => $dbArticle->author ?? 'Instruktur Senior Pesawat Tenaga dan Produksi',
                'published_at' => $dbArticle->published_at ? $dbArticle->published_at->format('d M Y') : date('d M Y'),
                'created_at' => $dbArticle->created_at ? $dbArticle->created_at->format('d M Y') : date('d M Y'),
                'read_time' => 32,
                'views' => $dbArticle->views ?? 1840,
                'image' => $dbArticle->image ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'excerpt' => $dbArticle->excerpt,
                'content' => $dbArticle->content
            ];
        }

        // 2. Format region label
        if (is_array($regionData)) {
            $province = $regionData['province'] ?? '';
            $city = $regionData['city'] ?? '';
            $district = $regionData['district'] ?? '';
            $locationLabel = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        } else {
            $locationLabel = (string) $regionData;
        }
        if (empty($locationLabel)) {
            $locationLabel = 'Indonesia';
        }

        // 3. Cocokkan dari 200 judul topik
        $topics = self::getArticleTopics();
        $bestMatch = null;
        foreach ($topics as $t) {
            $cleanTitleTpl = str_replace('{region}', $locationLabel, $t);
            $checkSlug = Str::slug($cleanTitleTpl);
            if ($checkSlug === $slug || Str::contains($slug, $checkSlug) || Str::contains($checkSlug, $slug)) {
                $bestMatch = $cleanTitleTpl;
                break;
            }
        }

        if (!$bestMatch) {
            $words = explode('-', $slug);
            $cleanWords = array_filter($words, function ($w) {
                return !in_array($w, ['training', 'ptp', 'operator', 'pesawat', 'tenaga', 'produksi', 'di', 'dan', 'ke', 'dari', 'pada']);
            });
            $bestMatch = "Training Operator PTP: " . ucwords(implode(' ', array_slice($cleanWords, 0, 7))) . " di {$locationLabel}";
        }

        $deep = self::generateDeepArticle($bestMatch, $locationLabel, 7000);

        return [
            'id' => abs(crc32($slug)) % 100000,
            'title' => $deep['title'],
            'slug' => $slug,
            'category' => 'Training Operator PTP Resmi',
            'author' => 'Instruktur Senior Pesawat Tenaga dan Produksi',
            'published_at' => date('d M Y'),
            'created_at' => date('d M Y'),
            'read_time' => $deep['estimated_read_time'],
            'views' => 1250 + (abs(crc32($slug)) % 2400),
            'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
            'excerpt' => $deep['excerpt'],
            'content' => $deep['content']
        ];
    }

    /**
     * Dapatkan daftar artikel per wilayah (200 artikel)
     */
    public static function getRegionalArticleList(array $regionData = [], int $limit = 200): array
    {
        $topics = self::getArticleTopics();
        $list = [];

        $province = $regionData['province'] ?? '';
        $city = $regionData['city'] ?? '';
        $district = $regionData['district'] ?? '';
        $locSuffix = trim(($district ? $district . ', ' : '') . ($city ? $city . ', ' : '') . $province);
        if ($locSuffix === '') {
            $locSuffix = 'Nasional';
        }

        $categories = [
            'Operator Penggerak Mula PTP',
            'Operator Mesin Perkakas PTP',
            'Operator Mesin Produksi PTP',
            'Operator Tanur Peleburan PTP',
            'Teknisi Transmisi Mekanik PTP',
            'Spesialis K3 Pesawat Tenaga & Produksi'
        ];

        $count = 0;
        foreach ($topics as $id => $topicTpl) {
            if ($count >= $limit) {
                break;
            }
            $regionalTitle = str_replace('{region}', $locSuffix, $topicTpl);
            $slug = Str::slug($regionalTitle);
            $list[] = (object) [
                'id' => $id,
                'title' => $regionalTitle,
                'slug' => $slug,
                'category' => $categories[$id % count($categories)],
                'excerpt' => "Panduan teknis dan operasional implementasi {$regionalTitle}. Kurikulum mengacu pada standar keselamatan kerja permesinan industri dan sertifikasi lisensi resmi nasional.",
                'author' => 'Instruktur Senior Pesawat Tenaga dan Produksi',
                'published_at' => date('d M Y', strtotime("-{$id} days")),
                'read_time' => 20 + (($id * 3) % 15),
                'views' => 1200 + ($id * 23) % 3500
            ];
            $count++;
        }

        return $list;
    }
}
