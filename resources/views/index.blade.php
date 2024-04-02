@extends('layouts.main')

@section('container')
{{-- hero --}}
<section class="bg-center bg-no-repeat bg-gray-400  bg-blend-multiply mt-24 bg-cover h-72 mx-auto" style="background-image: url('/img/hero.png') ">
    <div class="px-4 text-center py-32 lg:py-[250px] ">
        <h1 class="mb-7 mt-[-30px] text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl lg:mt-[-180px]">Beli Rumah Impianmu hanya di Homespot</h1>
        
        <div class="bg-gray-600 bg-opacity-50 lg:mx-52 mx-12 rounded-md">
        <form class="flex items-center max-w-sm mx-auto rounded-xl">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                      </svg>
                      
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Cari lokasi, nama properto atau nama developer" required />
            </div>
            
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-600 bg-gray-50  hover:bg-gray-300 focus:ring-4 focus:outline-nonefont-medium rounded-lg text-sm px-5 py-2.5 text-center justify-content-between inline-flex items-center ml-2" type="button">Tipe <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semua</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Apartmant</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rumah</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ruko</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vila</a>
                </li>
                </ul>
            </div>
    
            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    </div>
</section>
{{-- end hero --}}

{{-- card --}}
<section id="card" class="pt-20 bg-[#EEF8FF]">
    <div class="container ">
        <div class="gap-5 lg:grid lg:grid-cols-4 ">
            <!-- Cards 1 -->
            <div class=" p-3 h-full mb-5  ">
                <div class="lg:text-left text-center">
                    <div class="flex justify-center lg:justify-start ">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                          </svg>
                          <span>Denpasar, Bali</span>
                          
                    </div>
                    <h1 class=" font-extrabold text-2xl">Properti Baru di Sekitarmu</h1>
                    <p class="text-gray-400">Rekomendasi pilihan kami untuksmu. Dari rumah minimalis, ruko strategis, sampai apartemen moderen semua tersedia</p>
                    <a href="" class="flex justify-center text-primary hover:text-blue-700">
                        <svg class="w-6 h-6 text-primary hover:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                          </svg>
                          <span>Lihat Semua</span>
                      </a>
                </div>   
            </div>

            <!-- Cards 1 -->
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1  h-96 mb-5">
                {{-- Image --}}
                <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                <div class="text-center">
                    <h1 class=" font-extrabold text-lg">Umah Melah Banyuning</h1>
                    <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                    <h2 class="text-lg text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                    <p class="text-gray-400 text-sm">Pengembang <span class="text-orange-600 ">PT Umah Mesari</span></p>
                </div>
                <!-- Button  -->
                <div class="mt-4 flex items-center justify-center">
                    <a href="#" class="inline-flex items-center px-32 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black lg:px-12 lg:mt-5">
                        Liat Detail
                    </a>
                </div>
                
            </div>
            <!-- Cards 1 -->
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-96 mb-5 ">
                {{-- Image --}}
                <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                <div class="text-center">
                    <h1 class=" font-extrabold text-lg">Umah Melah Banyuning</h1>
                    <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                    <h2 class="text-lg text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                    <p class="text-gray-400 text-sm">Pengembang <span class="text-orange-600 ">PT Umah Mesari</span></p>
                </div>
                <!-- Button  -->
                <div class="mt-4 flex items-center justify-center">
                    <a href="#" class="inline-flex items-center px-32 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black lg:px-12 lg:mt-5">
                        Liat Detail
                    </a>
                </div>
                
            </div>
            <!-- Cards 1 -->
            <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-96 mb-5 ">
                {{-- Image --}}
                <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                <div class="text-center">
                    <h1 class=" font-extrabold text-lg">Umah Melah Banyuning</h1>
                    <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                    <h2 class="text-lg text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                    <p class="text-gray-400 text-sm">Pengembang <span class="text-orange-600 ">PT Umah Mesari</span></p>
                </div>
                <!-- Button  -->
                <div class="mt-4 flex items-center justify-center">
                    <a href="#" class="inline-flex items-center px-32 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black lg:px-12 lg:mt-5">
                        Liat Detail
                    </a>
                </div>
                
            </div>
            
        </div>
    </div>
</section>
{{-- end card --}}

{{-- jelajahi --}}
<section class="mb-5">
    <h1 class="pl-5 text-2xl py-6 font-extrabold ">Jelajahi Properti Dengan Virtual 360</h1>
    <div class="flex justify-center">
        <div class="w-3/10 flex items-center">
            <div class="w-full text-right">
                <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="sliderContainer" class="w-full overflow-hidden">
            <ul id="slider" class="flex w-full duration-700">
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full w-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img2.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Umah Melah Banyuning</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.290.000.000 - Rp.619.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PT Umah Mesari</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class=" items-center text-center w-48 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                    </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img3.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Griya Tabanan</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.298.000.000 - Rp.355.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PT Umah Mesari</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4  flex items-center justify-center">
                            <a href="#" class="items-center text-center w-48 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                    </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img4.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Kembang Anyelir </h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.875.000.000 - Rp.950.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">CV Rumah Baliku</span></p>
                        </div>
                        <!-- Button  -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class=" items-center text-center w-48 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                </li>
                <li class="p-3 ">
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 h-full ">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-full object-cover" src="./img/img5.jpg" alt=""/>
                        <div class="text-center">
                            <h1 class=" font-extrabold text-2xl">Taman Sentosa Uma Desa</h1>
                            <p class=" text-xs text-gray-400">Kecamatan Denpasar Barat, Bali</p>
                            <h2 class="text-xl text-primary">RP.550.000.000 - Rp.650.000.000</h2>
                            <p class="text-gray-400">Pengembang <span class="text-orange-600">PPT Wira Mitra Utama</span></p>
                        </div>
                        <!-- Button Reservasi -->
                        <div class="mt-4 flex items-center justify-center">
                            <a href="#" class=" items-center text-center w-48 py-1.5 text-sm font-medium  text-black bg-white rounded-full border-2 border-black  hover:text-gray-600 focus:z-10 focus:ring-2 focus:ring-black focus:text-black">
                                Liat Detail
                            </a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <div class="w-3/10 flex items-center">
            <div class="w-full">
                <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
</section>
{{-- end jelajahi --}}

{{-- properti kota --}}
<section id="card" class="pt-20 bg-[#EEF8FF] ">
    <div class="container  ">          
            <div class="grid grid-cols-3 sm:grid-cols-1 lg:grid-cols-8 gap-4 ">
                <!-- Kartu besar -->
                <div class=" col-span-3">
                    <div class="lg:text-left text-center">
                        <h1 class=" font-extrabold text-2xl">Cari Properti Berdasarkan Kota</h1>
                        <p class="text-gray-600">Yuk, cari properti yang sesuai dengan preferensimu di kota-kota pilihan terfavorit!</p>
                        <p></p>
                        <a href="" class="text-blue-900 hover:text-primary">Lihat Semua
                        </a>
                    </div>   
                </div>

                <!-- Kartu kecil -->
                <a href="">
                    <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <div class="ml-2 mt-2">
                            <h1 class=" text-xs font-semibold">Bandung</h1>
                            <p class=" text-[8px] text-slate-500">366 properti</p>
                        </div>
                        <img src="./img/bandung.png" class=" mt-[-26px] rounded-lg"  alt="">
                    </div>
                </a>
                <a href="">
                    <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <div class="ml-2 mt-2">
                            <h1 class=" text-xs font-semibold">Surabaya</h1>
                            <p class=" text-[8px] text-slate-500">169 properti</p>
                        </div>
                        <img src="./img/surabaya.png" class=" mt-[-26px] rounded-lg"  alt="">
                    </div>
                </a>
                <a href="">
                    <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <div class="ml-2 mt-2">
                            <h1 class=" text-xs font-semibold">Makasar </h1>
                            <p class=" text-[8px] text-slate-500">203 properti</p>
                        </div>
                        <img src="./img/makassar.png" class=" mt-[-26px] rounded-lg"  alt="">
                    </div>
                </a>
                <a href="">
                    <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <div class="ml-2 mt-2">
                            <h1 class=" text-xs font-semibold">Jakarta</h1>
                            <p class=" text-[8px] text-slate-500">52 properti</p>
                        </div>
                        <img src="./img/jakarta.png" class=" mt-[-26px] rounded-lg"  alt="">
                    </div>
                </a>
                <a href="">
                    <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <div class="ml-2 mt-2">
                            <h1 class=" text-xs font-semibold">Medan</h1>
                            <p class=" text-[8px] text-slate-500">142 properti</p>
                        </div>
                        <img src="./img/medan.png" class=" mt-[-26px] rounded-lg"  alt="">
                    </div>
                </a>
            </div>
    </div>
</section>
{{--  end properti kota --}}

{{-- map --}}
<section id="map" class="">
    <h1 class=" text-2xl font-extrabold ml-8 mt-10"> Ada Apa Disekitarmu ?</h1>
    <div class="container mx-auto px-4 mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <!-- Card 1 -->
          <div class=" flex justify-center">
            <div class="p-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3562.846419346829!2d107.5413148473163!3d-6.8780604641341645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stransportasi!5e0!3m2!1sid!2sid!4v1710916679547!5m2!1sid!2sid"  class="lg:w-[500px] lg:h-80 w-72 h-64 rounded-xl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="flex justify-center text-center lg:text-left">
            <div class="p-4 lg:mt-5">
              <h2 class="text-2xl font-semibold mb-2">Lokasi Kamu Sekarang</h3>
                <div class="flex text-center justify-center lg:justify-start">
                    <svg class="w-5 h-5 text-slate-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                      </svg>
                      <span class="text-xs text-slate-500 mt-1">Cimahi</span>
                </div>
                
              <h3 class="font-bold mt-4">Transportasi Terdekat</h3>
              <ul>
                <a href="https://www.google.com/maps/place/Travel+Bandung+Magelang+Temanggung/@-6.87806,107.541315,16z/data=!4m6!3m5!1s0x2e68e51891c63ab7:0xaf1a4bb4fab722e8!8m2!3d-6.8802279!4d107.542442!16s%2Fg%2F11scs5vl_g?hl=id&entry=ttu"><li class=" text-amber-400 hover:text-amber-800">Travel Bandung</li></a>
                <a href="https://www.google.com/maps?ll=-6.879147,107.54021&z=17&t=m&hl=id&gl=ID&mapclient=embed&cid=7450729449855998161"><li class=" text-blue-600 hover:text-blue-950">Kramat Djati</li></a>
                <a href="https://www.google.com/maps/place/Bhinneka+Shuttle+Cimahi/@-6.87806,107.541315,16z/data=!4m6!3m5!1s0x2e68e5f65390c87b:0x78ef28bdf08ab0a2!8m2!3d-6.8789514!4d107.5395277!16s%2Fg%2F11kpz_r_b9?hl=id&entry=ttu"><li class=" text-red-500 hover:text-red-800">Bhineka Shuttle Cimahi</li></a>
              </ul>
              <h3 class="font-bold mt-4">Tempat Makan Terdekat</h3>
              <ul>
                <a href="https://www.google.com/maps/place/Meepang+RAI/@-6.877677,107.543332,16z/data=!4m6!3m5!1s0x2e68e5c93fb78697:0xe04c39cdb7a4421f!8m2!3d-6.8774464!4d107.5438024!16s%2Fg%2F11sd3wc4zc?hl=id&entry=ttu"><li class=" text-violet-600 hover:text-violet-950">Meepang Rai</li></a>
                <a href="https://www.google.com/maps?ll=-6.87838,107.542345&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=1605963313020792266"><li class=" text-green-600 hover:text-green-950">Wingz O Wingz Cimahi</li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>    
</section>
{{-- map --}}

{{-- iklan --}}
<section class="mt-5 flex justify-center mx-auto">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./img/iklan1.jpg" class="absolute block w-[1170px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg shadow-md lg:h-72 " alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./img/iklan2.jpg" class="absolute block w-[1170px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg shadow-md lg:h-72 " alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./img/iklan3.jpg" class="absolute block w-[1170px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg shadow-md lg:h-72 " alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./img/iklan4.jpg" class="absolute block w-[1170px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg shadow-md lg:h-72 " alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./img/iklan5.jpg" class="absolute block w-[1170px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 rounded-lg shadow-md lg:h-72 " alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>
{{--  end iklan --}}

{{-- kpr --}}
<section>
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
{{-- end kpr --}}


@endsection
