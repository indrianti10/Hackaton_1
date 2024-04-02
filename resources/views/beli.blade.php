@extends('layouts.main')

@section('container')

    {{-- filter --}}
    <section >
        <div class=" mt-20 flex justify-start items-start  mb-4 ml-[-150px] lg:ml-[-680px] border-2 mx-8  bg-white border-gray-100 shadow-lg ">         
            <form class="flex items-center max-w-sm mx-auto">   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5 " placeholder="Search branch name..." required />
                </div>
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-black-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 ml-2 ">Filter</button>
            </form>
        </div>
    </section>
    {{-- end filter --}}

    {{-- card --}}
    <section>
        <div class="container mx-auto px-4 py-8 ">
            <div class="grid grid-cols-1  gap-4">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                        {{-- Image --}}
                        <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
                    {{-- maps --}}
                    <div class="p-4 fixed flex lg:ml-[500px]  ml-72">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3562.846419346829!2d107.5413148473163!3d-6.8780604641341645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stransportasi!5e0!3m2!1sid!2sid!4v1710916679547!5m2!1sid!2sid"  class="lg:w-[500px] lg:h-80 w-72 h-64 rounded-xl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                
                <!-- Card 2 -->
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                    {{-- Image --}}
                    <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
                <!-- Card 3 -->
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                    {{-- Image --}}
                    <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
                <!-- Card 4 -->
                <<div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                    {{-- Image --}}
                    <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
                <!-- Card 5 (Hidden) -->
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                    {{-- Image --}}
                    <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
                <!-- Card 6 -->
                <div class="bg-white border border-gray-200 shadow-xl rounded-lg p-1 w-72 h-96 mb-5">
                    {{-- Image --}}
                    <img class="rounded-lg mx-auto mb-5 h-40 w-80 object-cover" src="./img/img2.jpg" alt=""/>
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
    {{-- card --}}

@endsection