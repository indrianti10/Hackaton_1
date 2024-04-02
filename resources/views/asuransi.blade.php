@extends('layouts.main')
@section('container')

    {{-- heroo --}}
    <section class="bg-center bg-no-repeat bg-gray-200  bg-blend-multiply mt-24 bg-cover h-72 mx-auto" style="background-image: url('/img/asuransi.jpg')">
        <div class="ml-10 pt-2">
            <nav class="flexS" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-sm font-medium text-white hover:text-slate-500 border px-2 rounded-full hover:bg-slate-50">
                            
                            Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="/asuransi" class="ms-1 text-sm font-medium text-white hover:text-slate-500 border px-2 rounded-full hover:bg-slate-50">Asuransi</a>
                            </div>
                        </li>  
                    </ol>
            </nav>
            <h1 class=" text-white font-extrabold text-4xl lg:text-5xl py-5 lg:pt-16">Perlindungan untuk Semua Aspek Kehidupan Anda</h1>
            <p class="text-white font-normal lg:text-xl ">Temukan beragam opsi asuransi yang mencakup jiwa, sepeda, kecelakaan, rumah, investasi, dan kendaraan Anda untuk menjaga masa depan yang tetap aman</p>
        </div>
    </section>
    {{-- end heroo --}}

    {{-- card --}}
    <section id="card" class="pt-20 bg-[#EEF8FF]  lg:h-72 lg:mb-14 ">
       
        <div class="container  ">
            <h1 class="text-3xl font-bold pb-2">Jelajahi Ragam Perlindungan dan Pilih Sesuai Kebutuhan</h1>
         
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-6 gap-4 ">
    
                    <!-- Kartu kecil -->
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <img src="./img/a1.png" class=" mt-[2px] rounded-lg "  alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-no-drop">
                           <div class="relative">
                            <img src="./img/a6.png" class=" mt-[2px] rounded-lg grayscale"  alt="">                            
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-end ">
                                <p class="text-sm p-1  text-[#F37021] border border-[#F37021] mb-2 bg-[#FAC4A4]">Segera Hadir</p>
                            </div>
                           </div>         
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-no-drop">
                           <div class="relative">
                            <img src="./img/a2.png" class=" mt-[2px] rounded-lg grayscale"  alt="">                            
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-end ">
                                <p class="text-sm p-1  text-[#F37021] border border-[#F37021] mb-2 bg-[#FAC4A4]">Segera Hadir</p>
                            </div>
                           </div>         
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-no-drop">
                           <div class="relative">
                            <img src="./img/a3.png" class=" mt-[2px] rounded-lg grayscale"  alt="">                            
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-end ">
                                <p class="text-sm p-1  text-[#F37021] border border-[#F37021] mb-2 bg-[#FAC4A4]">Segera Hadir</p>
                            </div>
                           </div>         
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-no-drop">
                           <div class="relative">
                            <img src="./img/a4.png" class=" mt-[2px] rounded-lg grayscale"  alt="">                            
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-end ">
                                <p class="text-sm p-1  text-[#F37021] border border-[#F37021] mb-2 bg-[#FAC4A4]">Segera Hadir</p>
                            </div>
                           </div>         
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-white lg:h-32 rounded-lg shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-no-drop">
                           <div class="relative">
                            <img src="./img/a5.png" class=" mt-[2px] rounded-lg grayscale"  alt="">                            
                            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-end ">
                                <p class="text-sm p-1  text-[#F37021] border border-[#F37021] mb-2 bg-[#FAC4A4]">Segera Hadir</p>
                            </div>
                           </div>         
                        </div>
                    </a>
                    
                </div>
        </div>
    </section>
    {{-- end card --}}
@endsection