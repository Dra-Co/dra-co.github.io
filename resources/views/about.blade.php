@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center mt-5 fw-bold fs-big bg-blue text-light py-4">About Us</h1>
    <div class="container">
        <center>
            <img src="{{ url('/img/tiger9.png') }}" alt="Image" width="50%" class="mt-4 pt-3">
        </center>
        <div data-aos="zoom-in">
            <h2 class="fw-bold pt-4 pb-3 mt-3">Apa Itu <span class="gang orange fs-2">stkd</span>?</h2>
            <p class="pb-5">Sarahsehan dan Temu Karya Daerah atau yang dikenal dengan STKD adalah sebuah kegiatan
                yang mewadahi muda-mudi daerah melalui berbagai ajang perlombaan yang menarik, dan digelar di tiap PMVBI
                (Persaudaraan Muda-Mudi Vihara Buddhayana Indonesia) daerah. Para pemenang STKD kemudian mewakili
                daerahnya untuk berlomba di ajang Sarasehan Temu Karya Nasional (STKN) yang diadakan setiap tiga (3)
                tahun sekali.</p>
        </div>
        <div data-aos="zoom-in">
            <h2 class="fw-bold pb-3">Apa Tujuan <span class="gang orange fs-2">stkd</span>?</h2>
            <p class="pb-5 mb-3">Tujuan utama dari STKD itu sendiri adalah untuk mempererat tali persaudaraan muda-mudi
                Buddhayana Indonesia dari tiap-tiap daerah yang berbeda. Selain itu, STKD dapat meningkatkan dan
                mengasah minat dan bakat Pemuda Buddhayana Indonesia untuk menemukan ide-ide kreatif, terus berinovasi,
                dan dapat beradaptasi dengan pesatnya perkembangan zaman dan teknologi. STKD selalu menyediakan berbagai
                macam acara yang menarik dan tentunya bermanfaat bagi seluruh pesertanya.</p>
        </div>
    </div>
</div>
@endsection
