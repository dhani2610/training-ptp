<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\HeroSlide;
use App\Models\Program;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Services\PtpSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingptp.id'],
            [
                'name' => 'Administrator Training PTP Indonesia',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training PTP Indonesia',
            'site_tagline' => 'Pusat Pembinaan & Sertifikasi Resmi Operator Pesawat Tenaga dan Produksi (PTP) Indonesia',
            'company_name' => 'Lembaga Pembinaan & Sertifikasi Operator Pesawat Tenaga dan Produksi Indonesia',
            'license_info' => 'Sertifikasi Resmi Operator PTP & Standar Kelaikan Pesawat Tenaga dan Produksi Nasional',
            'whatsapp' => '081399810272', // Main WA Utama (Highlighted)
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingptp.my.id',
            'email_secondary' => 'info@trainingptp.my.id',
            'phone' => '081399810272',
            'address' => 'Gedung Pusat Diklat Kelaikan & Keselamatan Industri PTP Indonesia, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Hotline Layanan Konsultasi Operator PTP WA: 24 Jam',
            'hero_title' => 'Pusat Pelatihan & Sertifikasi Resmi Operator Pesawat Tenaga dan Produksi (PTP)',
            'hero_description' => 'Membina Operator Penggerak Mula Genset & Turbin, Mesin Perkakas Bubut/Frais/CNC, Mesin Produksi Press Stamping, Tanur Dapur Peleburan, serta Teknisi Transmisi Mekanik yang kompeten, berlisensi sah, dan berstandar keselamatan tinggi.',
            'about_history' => 'Lembaga Pelatihan Operator Pesawat Tenaga dan Produksi (PTP) Indonesia didirikan oleh konsorsium praktisi keselamatan rekayasa mekanik industri, instruktur permesinan manufaktur senior, dan auditor kelaikan teknis pabrik. Kami berdedikasi membangun tenaga kerja operator yang kompeten, taat prosedur proteksi mesin, dan berintegritas tinggi guna mencegah kecelakaan kerja fatal seperti terjepit, terlilit, ledakan termal, atau amputasi mekanik. Lembaga kami telah meluluskan ribuan operator dan teknisi PTP bersertifikat resmi di seluruh 38 provinsi di Indonesia untuk berbagai sektor manufaktur otomotif, baja dan pengecoran logam, pembangkit listrik, pabrik kimia, dan industri pengolahan sumber daya alam.',
            'about_vision' => 'Menjadi pusat unggulan nasional dan rujukan utama dalam pendidikan vokasi, pembinaan kompetensi, standarisasi keselamatan operasional mesin, dan sertifikasi resmi Operator Pesawat Tenaga dan Produksi (PTP) berdaya saing global.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan sertifikasi kompetensi Operator PTP berlisensi resmi dengan standar keselamatan industri mekanikal tertinggi.\\n2. Mengedukasi operator mengenai identifikasi bahaya titik jepit (pinch points), pemasangan guarding, sistem LOTO, dan kepatuhan interlock pengaman.\\n3. Membekali peserta dengan keterampilan praktis pengoperasian penggerak mula, mesin bubut/frais/CNC, mesin press stamping, tanur peleburan, dan transmisi mekanik.\\n4. Mendorong budaya keselamatan kerja proaktif menuju terwujudnya Zero Accident di seluruh lini fasilitas industri nasional.",
            'floating_wa_text' => 'Halo Admin Utama Training PTP, saya ingin konsultasi pendaftaran pelatihan dan sertifikasi Operator Pesawat Tenaga dan Produksi (PTP).'
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Statistics
        $statistics = [
            [
                'key' => 'alumni_ptp',
                'label' => 'Alumni Operator PTP Berlisensi',
                'value' => '18.700+',
                'icon' => 'bi-people-fill',
                'description' => 'Operator Penggerak Mula, Mesin Press, Bubut & Tanur',
                'sort_order' => 1
            ],
            [
                'key' => 'sertifikasi_sah',
                'label' => 'Sertifikasi Resmi Standar Nasional',
                'value' => '100%',
                'icon' => 'bi-patch-check-fill',
                'description' => 'Terakreditasi Lisensi Kompetensi Profesi & Kelaikan Teknis',
                'sort_order' => 2
            ],
            [
                'key' => 'jangkauan_provinsi',
                'label' => 'Jangkauan Wilayah Layanan',
                'value' => '38',
                'icon' => 'bi-geo-alt-fill',
                'description' => 'Provinsi di Seluruh Wilayah Indonesia',
                'sort_order' => 3
            ],
            [
                'key' => 'kelulusan_evaluasi',
                'label' => 'Tingkat Kelulusan Evaluasi',
                'value' => '99.4%',
                'icon' => 'bi-trophy-fill',
                'description' => 'Metode Teori Komprehensif & Praktik Simulator Mesin Nyata',
                'sort_order' => 4
            ]
        ];

        foreach ($statistics as $stat) {
            Statistic::updateOrCreate(['key' => $stat['key']], $stat);
        }

        // 4. Programs Seeding from PtpSchemeService
        $programs = PtpSchemeService::getMasterPrograms();
        foreach ($programs as $index => $prog) {
            Program::updateOrCreate(
                ['slug' => $prog['slug']],
                [
                    'title' => $prog['title'],
                    'level_name' => $prog['category'] ?? 'Sertifikasi Operator PTP Resmi',
                    'badge' => $prog['badge'] ?? 'Sertifikasi Operator PTP Resmi',
                    'duration' => $prog['duration'] ?? '3-4 Hari',
                    'certification_body' => 'Badan Sertifikasi Profesi & Standar Kelaikan Industri Nasional',
                    'target_audience' => $prog['target_audience'] ?? [],
                    'requirements' => $prog['requirements'] ?? [],
                    'curriculum' => $prog['curriculum'] ?? [],
                    'short_description' => $prog['description'] ?? '',
                    'full_description' => $prog['overview'] ?? ($prog['description'] ?? ''),
                    'image' => $prog['image'] ?? 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                    'is_active' => true,
                    'sort_order' => $index + 1
                ]
            );
        }

        // 5. Featured Articles (Homepage 3 cards)
        $articles = [
            [
                'title' => 'Training Operator PTP: Panduan Lengkap Standar Keselamatan Pesawat Tenaga dan Produksi di Wilayah Indonesia',
                'slug' => 'training-operator-ptp-panduan-lengkap-standar-keselamatan-pesawat-tenaga-dan-produksi-di-wilayah-indonesia',
                'category' => 'Spesialis K3 Pesawat Tenaga & Produksi',
                'author' => 'Instruktur Senior Pesawat Tenaga dan Produksi',
                'read_time' => 32,
                'views_count' => 3420,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Panduan komprehensif kepatuhan standar keselamatan Pesawat Tenaga dan Produksi, mitigasi titik jepit mesin, proteksi interlock, dan sertifikasi lisensi operator resmi nasional.',
                'content' => PtpSchemeService::generateDeepArticle('Training Operator PTP: Panduan Lengkap Standar Keselamatan Pesawat Tenaga dan Produksi di Wilayah Indonesia', 'Indonesia', 7200)['content']
            ],
            [
                'title' => 'Training Operator Mesin Press: Teknik Pencegahan Risiko Terjepit pada Mesin Stamping dan Hydraulic Press di Indonesia',
                'slug' => 'training-operator-mesin-press-teknik-pencegahan-risiko-terjepit-pada-mesin-stamping-dan-hydraulic-press-di-indonesia',
                'category' => 'Operator Mesin Produksi PTP',
                'author' => 'Spesialis Keselamatan Mesin Stamping & Forming',
                'read_time' => 28,
                'views_count' => 2980,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Arsitektur proteksi mesin press mekanik dan hidrolik: pengujian tirai cahaya (light curtain), two-hand control anti-tie down, dan SOP penggantian cetakan (die setup).',
                'content' => PtpSchemeService::generateDeepArticle('Training Operator Mesin Press: Teknik Pencegahan Risiko Terjepit pada Mesin Stamping dan Hydraulic Press di Indonesia', 'Indonesia', 7200)['content']
            ],
            [
                'title' => 'Training PTP Dapur Peleburan: Pengendalian Risiko Bahaya Logam Cair pada Tanur Induksi dan EAF di Indonesia',
                'slug' => 'training-ptp-dapur-peleburan-pengendalian-risiko-bahaya-logam-cair-pada-tanur-induksi-dan-eaf-di-indonesia',
                'category' => 'Operator Tanur Peleburan PTP',
                'author' => 'Instruktur Metalurgi & Keselamatan Termal',
                'read_time' => 35,
                'views_count' => 2750,
                'is_featured' => true,
                'is_published' => true,
                'featured_image' => 'https://images.unsplash.com/photo-1504917599217-d4dc5ebe6122?w=800&auto=format&fit=crop&q=80',
                'excerpt' => 'Prosedur keselamatan penanganan cairan logam bersuhu di atas 1.600°C, pencegahan ledakan uap air (steam explosion), sistem pendingin coil, dan APD tahan radiasi panas ekstrem.',
                'content' => PtpSchemeService::generateDeepArticle('Training PTP Dapur Peleburan: Pengendalian Risiko Bahaya Logam Cair pada Tanur Induksi dan EAF di Indonesia', 'Indonesia', 7200)['content']
            ]
        ];

        foreach ($articles as $art) {
            Article::updateOrCreate(['slug' => $art['slug']], $art);
        }

        // 6. FAQs
        $faqs = [
            [
                'question' => 'Apa saja jenis permesinan yang termasuk dalam Pesawat Tenaga dan Produksi (PTP)?',
                'answer' => 'Pesawat Tenaga dan Produksi mencakup mesin penggerak mula (genset diesel, motor bakar, turbin daya), mesin perkakas (bubut, frais, CNC, gerinda, bor), mesin produksi penempaan dan pemotongan (press stamping, shearing, bending/press brake, roll plat, injection molding), dapur peleburan/tanur (tanur induksi, busur listrik EAF, kupola, heat treatment), serta rangkaian transmisi tenaga mekanik (poros, roda gigi, kopling, puli sabuk, dan rantai).',
                'sort_order' => 1
            ],
            [
                'question' => 'Mengapa operator mesin perkakas, mesin press, dan penggerak mula wajib memiliki lisensi resmi?',
                'answer' => 'Permesinan industri PTP beroperasi dengan gaya tekan tonase besar, putaran spindel berkecepatan tinggi, dan energi termal ekstrem yang memiliki risiko kecelakaan kerja tinggi (terjepit, terlilit, amputasi, atau kebakaran). Sertifikasi dan lisensi resmi memastikan operator memiliki kompetensi teknis teruji, disiplin pengoperasian aman, dan kemampuan tanggap darurat sesuai standar keselamatan kerja industri nasional.',
                'sort_order' => 2
            ],
            [
                'question' => 'Apakah pemula atau operator baru dapat mengikuti program pelatihan operator PTP ini?',
                'answer' => 'Tentu bisa. Kurikulum pelatihan kami dirancang secara komprehensif mulai dari pemahaman dasar fungsi mesin, identifikasi titik bahaya, pembacaan instrumen panel kendali, SOP pra-operasi, hingga praktik langsung didampingi instruktur ahli berpengalaman.',
                'sort_order' => 3
            ],
            [
                'question' => 'Berapa lama masa berlaku sertifikat kompetensi dan lisensi Operator PTP?',
                'answer' => 'Sertifikat kompetensi dan kartu lisensi Operator Pesawat Tenaga dan Produksi memiliki masa berlaku resmi sesuai standar kualifikasi nasional dan dapat diperpanjang secara berkala melalui evaluasi kelaikan operasional dan pemeriksaan kesehatan kerja berkala.',
                'sort_order' => 4
            ],
            [
                'question' => 'Apakah lembaga menyediakan layanan In-House Training PTP langsung di pabrik perusahaan kami?',
                'answer' => 'Ya, kami melayani penyelenggaraan In-House Training dan sertifikasi Operator PTP di seluruh wilayah Indonesia (38 provinsi). Instruktur kami dapat hadir langsung ke workshop atau pabrik Anda untuk melakukan evaluasi langsung pada unit mesin yang digunakan oleh operator perusahaan Anda.',
                'sort_order' => 5
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }

        Schema::enableForeignKeyConstraints();
    }
}
