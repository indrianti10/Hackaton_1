@extends('layouts.main')

@section('container')

{{-- hero --}}
<section id="hero" class="lg:mt-32 mt-20">
    <div class="container mx-auto px-4 mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <!-- Card 1 -->
          <div class=" px-3 pt-8 h-full mb-5  ">
            <div class="lg:text-left text-center">
                <h1 class=" font-extrabold text-3xl text-[#2B6FAD]">Tentang Kami</h1>
                <p class="py-2 font-semibold">Berkenalan lebih dekat dengan homespot</p>
                <p>Homespot adalah platform teknologi berbasis web base dengan sistem one-stop housing marketplace. Homespot menghubungkan antara pembeli, penjual dan penyewa dengan masyarakat yang membutuhkan layanan informasi jual beli dan memudahkan untuk memperoleh hunian sesuai dengan impian.</p>    
            </div> 
            <div class=" flex flex-col gap-3 mt-6   text-center ">Hubungi Kami
                <div class="flex flex-row space-x-12 place-self-center ">
                    <div class="about__has-tooltip">
                       <a href="https://api.whatsapp.com/send?phone=6281389001162" target="_blank"><img src="/img/wasap.png" class=" w-[42px]" alt="wa-icon"></a>
                    </div>
                    <div class="about__has-tooltip pt-1">
                        <a href="mailto:support@homespot.id"><img src="/img/mail.png" width="32px" height="32px" alt="email-icon"></a>
                    </div>
                </div>
             </div>  
        </div>
          <!-- Card 2 -->
          <div class="flex justify-center text-center lg:text-left">
            <div class=" pb-5 lg:mt-5">
                <div class="video-container">
                    <iframe class=" lg:w-96 lg:h-64 w-80 h-56 rounded-xl" src="https://www.youtube.com/embed/pYTvSUujCwc?si=3DzAkActyqbYvsRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
            </div>
          </div>
        </div>
    </div>    
</section>
{{-- end hero --}}

{{-- properti --}}
<section id="card" class="pt-20 bg-[#2B6FAD]">
    <div class="container ">
        <h1 class="text-center text-4xl font-semibold text-white pb-8">Properti Kami</h1>
        <div class="gap-5 lg:grid lg:grid-cols-2 ">
            <!-- Cards 1 -->
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-[480px] mb-5 ">
                {{-- Image --}}
                <img class="rounded-lg mx-auto mb-5 h-44 w-full object-cover" src="./img/1.png" alt=""/>
                <div class="ml-2">
                    <h1 class=" font-extrabold text-3xl text-[#2B6FAD]">Cari Properti</h1>
                    <p class=" text-base text-black my-1">Segera temukan hunian impianmu melalui Homespot</p>
                    <p class="text-balck text-sm">Tingkatkan pengalaman pencarian properti anda dengan mengunjungi website kami, disana anda akan menemukan beragam pilihan properti yang sesuai dengan kebutuhan dan impian anda</p>
                </div>
                <!-- Button  -->
                <div class="mt-16 flex items-center justify-center">
                    <a href="#" class="inline-flex items-center px-3 py-1.5 text-sm font-medium  text-white bg-[#F37021] rounded-xl border-2 border-[#F37021]  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-white lg:px-12 lg:mt-5">
                        Cari Properti
                    </a>
                </div>   
            </div>
            <!-- Cards 2 -->
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-[480px] mb-5 ">
                {{-- Image --}}
                <img class="rounded-lg mx-auto mb-5 h-44 w-full object-cover" src="./img/2.png" alt=""/>
                <div class="ml-2">
                    <h1 class=" font-extrabold text-3xl text-[#2B6FAD]">Pilihan Properti</h1>
                    <p class=" text-base text-black my-1">Jadikan Komespot sebagi bagian dari perjalan anda berikutnya, dengan memilih hunian sesuai dengan impian.</p>
                    <p class="text-balck text-sm">Jelajahi ragam luas pilihan properti yang kami tawarkan diwebsite kami, dari rumah mewah hingga apartemen modern, kami memiliki semuanya untuk memenuhi berbagai kebutuhan dan selera anda</p>
                </div>
                <!-- Button  -->
                <div class="mt-4 flex items-center justify-center">
                    <a href="#" class="inline-flex items-center px-3 py-1.5 text-sm font-medium  text-white bg-[#F37021] rounded-xl border-2 border-[#F37021]  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-white lg:px-12 lg:mt-5">
                        Beli Properti
                    </a>
                </div>   
            </div>
            
        </div>
    </div>
</section>
{{-- end properti --}}

{{-- KPR --}}
<section class="mt-10">
    <h1 class="text-center text-4xl font-extrabold">Kredit Pemillik Rumah</h1>
    <div class="container mx-auto px-4 mt-8 mb-5 bg-white rounded-lg border-slate-100 border-2 shadow-md shadow-slate-700 p-2  ">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <!-- Card 1 -->
          <div class=" flex justify-center">
            <div class="p-4 ">
              <img src="./img/kpr.png " class="flex justify-center items-center" alt="">
            </div>
          </div>
          <!-- Card 2 -->
          <div class="">
            <div class="p-4">
              <h3 class="text-3xl font-semibold mb-2 text-primary">Kalkulasi KPR</h3>
              <p class=" font-bold mb-2 text-sm">Hitung estimasi angsuran KPR perbulan anda menggunakan kalkulator ini</p>
              <p class="text-sm font-light">Perhitungan ini adalah hasil perkiraan aplikasi KPR secara umum. Data Perhitungan di atas dapat berbeda dengan perhitungan bank. Untuk perhitungan yang akurat, silahkan hubungi kantor cabang kami</p>
              <div class="flex justify-center items-center py-4 mt-5">
                <button type="button" class="focus:outline-none text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2   ">Kalkulator</button>
              </div>
              
            </div>
          </div>
        </div>
      </div>
</section>
{{-- END KPR --}}


@endsection