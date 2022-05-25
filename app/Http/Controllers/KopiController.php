<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KopiController extends Controller
{
    public function event()
    {
        $events = [
            [
                'name' => 'Dhammaduta Muda Buddhis',
                'desc' => 'Lomba Dhammaduta sebagai ajang untuk menyalurkan minat pemuda Buddhis di bidang public speaking. Lomba ini menjadi wadah untuk meningkatkan minat pemuda dalam wawasan Buddha Dhamma serta mampu menyalurkan/berbagi wawasan tersebut kepada sesama dengan menjadi seorang Dharmaduta Muda Buddhis yang profesional dengan wawasan Buddha Dhamma yang baik.',
                'no' => '8',
                'url' => 'dhammaduta-muda-buddhis'
            ],
            [
                'name' => 'Cerdas Cermat Dhamma',
                'desc' => 'Temu Karya Cerdas Cermat Dhamma merupakan ajang yang berperan sebagai kegiatan untuk memotivasi dan menambah ketertarikan generasi muda Buddhis dalam mempelajari dan menghimpun materi-materi mengenai Buddha Dhamma. Kegiatan Temu Karya ini juga berperan sebagai kegiatan yang dapat membentuk kerja sama,
                mempererat kekompakan antar anggota tim, dan sportivitas masing-masing peserta.',
                'no' => '7',
                'url' => 'cerdas-cermat-dhamma'
            ],
            [
                'name' => 'Buddhayana Idol',
                'desc' => 'Untuk meningkatkan talenta bernyanyi, tentunya membutuhkan proses sehingga kita bisa menampilkan performa yang terbaik. Dalam membangun semangat tersebut, perlu dibuat sebuah wadah baru yang membuka kesempatan Pemuda Buddhayana untuk menyalurkan minat dan bakat di bidang bernyanyi agar bisa menjadi seorang penyanyi profesional yang dapat memicu semangat pemuda untuk terus berkarya dalam dhamma.',
                'no' => '6',
                'url' => 'buddhayana-idol'
            ],
            [
                'name' => 'Bercerita GABI',
                'desc' => 'Temu karya bercerita GABI adalah salah satu bentuk wadah yang dibuat untuk mendukung dan menumbuhkembangkan kreativitas dan potensial diri pembina GABI, serta menjadi sarana untuk saling berbagi pengalaman dan informasi. Lomba ini juga berperan memberikan wawasan dalam mempraktikkan Buddha Dhamma dalam kehidupan sehari-hari baik oleh pembina GABI maupun untuk adik-adik GABI.',
                'no' => '5',
                'url' => 'bercerita-gabi'
            ],
            [
                'name' => 'Cipta Lagu Buddhis',
                'desc' => 'Temu Karya Cipta Lagu Buddhis adalah salah satu bentuk kesempatan bagi Pemuda/i Buddhayana untuk mengembangkan bakat serta menuangkan ide dan kreativitas dalam bentuk sebuah karya. Dalam membangun semangat berkarya pemuda/i zaman sekarang, diperlukan terobosan baru khususnya bagi para Pemuda Buddhayana yang dapat dilakukan dalam bentuk penciptaan lagu.',
                'no' => '4',
                'url' => 'cipta-lagu-buddhis'
            ],
            [
                'name' => 'Creative Production',
                'desc' => 'Adanya ajang Temu Karya ini juga sejalan dengan peran media sosial yang sudah berkembang sebagai wadah untuk mempromosikan sesuatu di dunia digital sekarang ini. Temu Karya Creative Production dapat membantu generasi muda Buddhis untuk menemukan ide ide kreatif, terus berinovasi, dan dapat beradaptasi dengan perkembangan zaman dan teknologi.',
                'no' => '3',
                'url' => 'creative-production'
            ],
        ];
        return view('event', ['title' => 'Event', 'events' => $events]);
    }

    public function about()
    {
        return view('about', ['title' => 'About Us']);
    }

    public function home()
    {
        $events = [
            [
                'name' => 'Dhammaduta Muda Buddhis',
                'desc' => 'Ajang untuk menyalurkan minat pemuda Buddhis di bidang public speaking.',
                'no' => '8',
                'url' => 'dhammaduta-muda-buddhis'
            ],
            [
                'name' => 'Cerdas Cermat Dhamma',
                'desc' => 'Ajang kegiatan untuk memotivasi generasi muda Buddhis dalam mempelajari materi-materi mengenai Buddha Dhamma.',
                'no' => '7',
                'url' => 'cerdas-cermat-dhamma'
            ],
            [
                'name' => 'Buddhayana Idol',
                'desc' => 'Sebuah wadah baru yang membuka kesempatan Pemuda Buddhayana untuk menyalurkan minat di bidang bernyanyi.',
                'no' => '6',
                'url' => 'buddhayana-idol'
            ],
            [
                'name' => 'Bercerita GABI',
                'desc' => 'Temu karya bercerita GABI adalah salah satu bentuk wadah yang dibuat untuk mendukung potensial diri pembina GABI.',
                'no' => '5',
                'url' => 'bercerita-gabi'
            ],
            [
                'name' => 'Cipta Lagu Buddhis',
                'desc' => 'Kesempatan bagi Pemuda/i Buddhayana untuk mengembangkan bakat dalam bentuk penciptaan lagu.',
                'no' => '4',
                'url' => 'cipta-lagu-buddhis'
            ],
            [
                'name' => 'Creative Production',
                'desc' => 'Temu Karya Creative Production dapat membantu generasi muda Buddhis untuk menemukan ide ide kreatif.',
                'no' => '3',
                'url' => 'creative-production'
            ],
        ];
        $testimonials = [
            [
                'no' => 'One',
                'name' => 'Reynald Putra',
                'position' => 'Juara 1 Buddhayana Idol STKD Jabar 2022',
                'img' => 'person1.jpg',
                'title' => 'Pengalaman Tak Terlupakan',
                'star' => 5,
                'desc' => 'Luar biasa, STKD memberikan saya pengalaman yang tidak bisa saya lupakan. Saya tidak menyangka dapat memenangkan perlombaan Buddhayana Idol dan melaju ke STKN. Saya pun mendapatkan banyak relasi baru yang berharga berkat diselenggarakannya STKD. Acara-acara yang diselenggarakan sangat seru dan bermanfaat. Terima kasih banyak untuk seluruh panitia yang sudah menyiapkan STKD Jabar 2022!'
            ],
            [
                'no' => 'Two',
                'name' => 'Veronica Nova',
                'position' => 'Panitia STKD Jabar 2022',
                'img' => 'person2.jpg',
                'title' => 'Terima Kasih untuk Semuanya',
                'star' => 5,
                'desc' => 'Saya selaku salah satu panitia STKD Jabar berterima kasih yang sebesar-besarnya kepada para peserta yang sangat antusias mengikuti setiap rangkaian acara di STKD ini. Saya pribadi sangat senang dipercayakan sebagai panitia untuk menyukseskan STKD tahun ini, semoga banyak manfaat yang didapat setelah mengikuti kegiatan-kegiatan di STKD. Saya juga ingin mengucapkan selamat bagi para peserta yang telah berhasil menjuarai lomba-lomba yang diselenggarakan!'
            ],
            [
                'no' => 'Three',
                'name' => 'Karuna Adiarti Sutanto',
                'position' => 'Peserta STKD Jabar 2022',
                'img' => 'person3.jpg',
                'title' => 'Acara yang Luar Biasa',
                'star' => 4,
                'desc' => 'Menurut pendapat saya pribadi, STKD merupakan acara yang sangat luar biasa. Di acara ini saya dapat berjumpa dengan kawan-kawan dari daerah yang berbeda-beda. Seluruh acara yang diselenggarakan penuh dengan manfaat yang bisa saya rasakan sendiri. Lomba-lomba yang diselenggarakan pun dapat mengasah kreativitas dan inovasi yang memang sangat penting di tengah pesatnya perkembangan teknologi ini. Terima kasih banyak!'
            ]
        ];
        return view('home', ['title' => 'Home', 'events' => $events, 'testimonials' => $testimonials]);
    }
}
