@extends('layouts.layouts')

@section('title', 'ITB (Inovasi Terbaik Bangsa) - Solusi ERP & Digitalisasi Bisnis Terdepan')
@section('meta_description', 'ITB menyediakan solusi ERP cloud terlengkap dan terintegrasi untuk transformasi digital bisnis Anda. Bergabunglah dengan 500+ klien yang telah sukses.')
@section('meta_keywords', 'ITB, Inovasi Terbaik Bangsa, ERP Indonesia, digitalisasi bisnis, cloud ERP, manajemen bisnis')

@section('content')
    {{-- Success/Error Alert --}}
    @if(session('success') || session('error') || $errors->any())
        <div class="fixed top-20 right-4 z-50 space-y-4">
            {{-- Success Alert --}}
            @if(session('success'))
                <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg border-l-4 border-green-700 max-w-md alert-fade-in">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="font-medium">{{ session('success') }}</span>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-green-200 hover:text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            {{-- Error Alert --}}
            @if(session('error') || $errors->any())
                <div class="bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg border-l-4 border-red-700 max-w-md alert-fade-in">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="flex-1">
                            @if(session('error'))
                                <span class="font-medium">{{ session('error') }}</span>
                            @endif
                            @if($errors->any())
                                <span class="font-medium block mb-2">Terjadi kesalahan:</span>
                                <ul class="text-sm space-y-1">
                                    @foreach($errors->all() as $error)
                                        <li>• {{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <button onclick="this.parentElement.parentElement.parentElement.remove()" class="ml-4 text-red-200 hover:text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
        </div>

        <style>
            .alert-fade-in {
                animation: fadeInSlideLeft 0.5s ease-out;
            }
            @keyframes fadeInSlideLeft {
                from {
                    opacity: 0;
                    transform: translateX(100%);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        </style>
    @endif

    {{-- Hero Section - Main Banner --}}
    <section id="home" class="min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white flex items-center justify-center relative overflow-hidden pt-16">
        {{-- Background Animation --}}
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full opacity-20">
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
            </div>
        </div>

        {{-- Hero Content --}}
        <div class="relative z-10 text-center px-6 max-w-7xl mx-auto py-20">
            <div class="mb-12">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                    Membangun Masa Depan dengan
                    <span class="block text-6xl md:text-8xl lg:text-9xl bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent font-extrabold">
                        Solusi ERP Cerdas
                    </span>
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 max-w-5xl mx-auto leading-relaxed mb-8">
                    Bergabunglah dengan <span class="text-yellow-400 font-bold">500+ klien</span> kami yang telah berhasil mentransformasi bisnis mereka dengan solusi cloud ERP terlengkap dan terintegrasi.
                </p>

                {{-- Stats --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-12">
                    <div class="text-center p-4">
                        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-yellow-400 mb-2">500+</div>
                        <div class="text-blue-200 text-sm md:text-base">Enterprise Klien</div>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-yellow-400 mb-2">99%</div>
                        <div class="text-blue-200 text-sm md:text-base">Tingkat Kepuasan</div>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-yellow-400 mb-2">24/7</div>
                        <div class="text-blue-200 text-sm md:text-base">Support System</div>
                    </div>
                </div>
            </div>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#contact" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-blue-900 px-8 md:px-10 py-4 md:py-5 rounded-full font-bold text-lg md:text-xl hover:from-yellow-300 hover:to-orange-400 transform hover:scale-105 transition-all duration-300 shadow-2xl hover:shadow-3xl">
                    Dapatkan Demo Gratis
                </a>
                <a href="#success-stories" class="border-2 border-white text-white px-8 md:px-10 py-4 md:py-5 rounded-full font-semibold text-lg md:text-xl hover:bg-white hover:text-blue-900 transition-all duration-300 transform hover:scale-105">
                    Lihat Kisah Sukses
                </a>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>

        <style>
            .floating-shapes {
                position: relative;
                width: 100%;
                height: 100%;
            }
            .shape {
                position: absolute;
                background: linear-gradient(45deg, #60a5fa, #3b82f6);
                border-radius: 50%;
                animation: float 6s ease-in-out infinite;
            }
            .shape-1 {
                width: 100px;
                height: 100px;
                top: 20%;
                left: 10%;
                animation-delay: 0s;
            }
            .shape-2 {
                width: 150px;
                height: 150px;
                top: 60%;
                right: 15%;
                animation-delay: 2s;
            }
            .shape-3 {
                width: 80px;
                height: 80px;
                bottom: 30%;
                left: 80%;
                animation-delay: 4s;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(180deg); }
            }
        </style>
    </section>

    {{-- Success Stories Section --}}
    <section id="success-stories" class="min-h-screen bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                    Baca Kisah Sukses Mereka Bersama <span class="text-blue-600">ITB</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Lihat seberapa besar kontribusi ITB dalam meningkatkan produktivitas bisnis di berbagai sektor industri.
                </p>
            </div>

            {{-- Success Stories Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                {{-- Story 1 --}}
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">PT Teknologi Maju</h3>
                        <div class="text-blue-600 font-semibold mb-4">Manufacturing</div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Sistem ERP ITB mempercepat alur kerja tim kami hingga 40%, terutama selama produksi peak season."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">Efisiensi meningkat 40%</div>
                        <button class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 5a1 1 0 100 2v3.293l3.646-3.647a1 1 0 01.708-.293h3.646a1 1 0 010 2h-3.293l-3.647 3.646A1 1 0 019 12V8a1 1 0 01-1-1z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Story 2 --}}
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">CV Retail Sejahtera</h3>
                        <div class="text-green-600 font-semibold mb-4">Retail & Trading</div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "ITB Core ERP menyediakan data yang akurat, memungkinkan kami merencanakan strategi penjualan yang efektif."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">Penjualan naik 60%</div>
                        <button class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 5a1 1 0 100 2v3.293l3.646-3.647a1 1 0 01.708-.293h3.646a1 1 0 010 2h-3.293l-3.647 3.646A1 1 0 019 12V8a1 1 0 01-1-1z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Story 3 --}}
                <div class="bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">PT Konstruksi Prima</h3>
                        <div class="text-purple-600 font-semibold mb-4">Construction</div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Fitur manajemen proyek ITB membuat tim kami tetap siap dan membimbing untuk membuat keputusan yang tepat."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-500">Proyek on-time 95%</div>
                        <button class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center hover:bg-purple-700 transition-colors">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 5a1 1 0 100 2v3.293l3.646-3.647a1 1 0 01.708-.293h3.646a1 1 0 010 2h-3.293l-3.647 3.646A1 1 0 019 12V8a1 1 0 01-1-1z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Client Logos --}}
            <div class="text-center mb-12">
                <h3 class="text-2xl font-semibold text-gray-800 mb-8">Dipercaya oleh 500+ Klien</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60">
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 1</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 2</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 3</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 4</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 5</span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 h-16 flex items-center justify-center">
                        <span class="text-gray-500 font-bold">LOGO 6</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Solutions Section --}}
    <section id="solutions" class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                    Solusi Terbaik untuk <span class="text-blue-600">Bisnis Anda</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    Dapatkan segudang manfaat yang ditawarkan oleh ITB yang didesain khusus untuk memaksimalkan proses bisnis Anda.
                </p>
            </div>

            {{-- Solutions Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Solution 1 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">ITB Core ERP</h3>
                        <p class="text-gray-600 mb-4">500+ Enterprise di Indonesia Tumbuh Bersama ITB</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Sistem Terintegrasi Penuh
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Real-time Analytics
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Unlimited Users
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                {{-- Solution 2 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-green-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Manufacturing Suite</h3>
                        <p class="text-gray-600 mb-4">Kendalikan Biaya Produksi dan Tentukan Harga Jual Kompetitif</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Production Planning
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Quality Control
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Inventory Management
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                {{-- Solution 3 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">HRM Suite</h3>
                        <p class="text-gray-600 mb-4">Kelola Gaji, Cuti & Administrasi Seluruh Karyawan di 1 Aplikasi</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Payroll Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Performance Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Recruitment System
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                {{-- Solution 4 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-orange-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Retail & POS</h3>
                        <p class="text-gray-600 mb-4">Kendalikan Multi-Store Cukup dari Satu Sistem Terpusat</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Multi-Store Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Customer Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Sales Analytics
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                {{-- Solution 5 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-red-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Construction Suite</h3>
                        <p class="text-gray-600 mb-4">Aktualisasi Proyek sesuai Anggaran & Standar Kualitas</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Project Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Budget Tracking
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Resource Planning
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                {{-- Solution 6 --}}
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-teal-100">
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-teal-500 to-teal-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Finance & Accounting</h3>
                        <p class="text-gray-600 mb-4">Sistem Keuangan Terintegrasi untuk Transparansi Penuh</p>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Auto Journal Entry
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Financial Reports
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Cash Flow Management
                        </li>
                    </ul>
                    <a href="#demo" class="block w-full text-center bg-teal-600 text-white py-3 rounded-lg font-semibold hover:bg-teal-700 transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- What Makes Us Different Section --}}
    <section id="about" class="min-h-screen bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                    What Makes <span class="text-blue-600">Us Different</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    ITB hadir dengan berbagai keunggulan yang membedakan kami dari kompetitor lain di industri ERP.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Differentiator 1 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Unlimited User</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Software kami dapat digunakan oleh sebanyak mungkin pengguna dalam satu perusahaan yang sama tanpa biaya tambahan.
                    </p>
                </div>

                {{-- Differentiator 2 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Best Business Practices</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kami menerapkan praktik terbaik untuk memastikan kelancaran penerapan sistem demi kepuasan pelanggan atas produk kami.
                    </p>
                </div>

                {{-- Differentiator 3 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Innovative Development</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kami terus berinovasi dan menambah produk baru sehingga kami bisa hadir untuk melayani kebutuhan lebih banyak industri.
                    </p>
                </div>

                {{-- Differentiator 4 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Professional Experts</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tim kami terdiri dari ahli bisnis dan teknologi yang berdedikasi untuk memberikan dukungan penuh kepada Anda.
                    </p>
                </div>

                {{-- Differentiator 5 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Customizable & Configurable</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kami menyediakan solusi yang dapat dikonfigurasi sesuai dengan jenis, struktur, kebutuhan, dan tujuan perusahaan Anda.
                    </p>
                </div>

                {{-- Differentiator 6 --}}
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-r from-teal-500 to-teal-600 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM12 18a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V18.75A.75.75 0 0112 18z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tim support kami siap membantu Anda kapan saja dengan respons cepat dan solusi yang tepat untuk setiap masalah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section - Demo Request --}}
    <section id="contact" class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-black text-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    Dapatkan Demo Gratis <span class="text-yellow-400">ITB</span> Sekarang!
                </h2>
                <p class="text-2xl text-gray-300 max-w-4xl mx-auto">
                    Raih efisiensi terbaik untuk pengelolaan bisnis Anda dengan software manajemen bisnis dari ITB.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-start">
                {{-- Demo Benefits --}}
                <div class="space-y-8">
                    <div>
                        <h3 class="text-3xl font-bold mb-8 text-yellow-400">Mengapa Harus Demo dengan ITB?</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Konsultasi Gratis</h4>
                                    <p class="text-gray-300">Diskusi mendalam dengan ahli bisnis kami mengenai kebutuhan spesifik perusahaan Anda.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Live Demo Interaktif</h4>
                                    <p class="text-gray-300">Pengalaman langsung menggunakan sistem dengan data simulasi sesuai industri Anda.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-green-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Proposal Harga Transparan</h4>
                                    <p class="text-gray-300">Dapatkan penawaran harga yang jelas dan transparan tanpa biaya tersembunyi.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Roadmap Implementasi</h4>
                                    <p class="text-gray-300">Panduan step-by-step implementasi yang disesuaikan dengan timeline bisnis Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Contact Info --}}
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold mb-6 text-yellow-400">Hubungi Tim ITB</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-white bg-opacity-10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">JAKARTA OFFICE</div>
                                    <div class="text-gray-300 text-sm">Jalan Sudirman No. 123, Jakarta Pusat 10220</div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-white bg-opacity-10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">SURABAYA OFFICE</div>
                                    <div class="text-gray-300 text-sm">Jl. HR Muhammad No. 456, Surabaya 60174</div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-white bg-opacity-10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">EMAIL</div>
                                    <div class="text-gray-300 text-sm">info@itb-indonesia.com</div>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-white bg-opacity-10 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">TELEPON</div>
                                    <div class="text-gray-300 text-sm">+62 21 1234 5678</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Demo Request Form --}}
                <div class="bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-8 border border-gray-600">
                    <div class="mb-8">
                        <h3 class="text-3xl font-bold text-white mb-4">Request Demo Gratis</h3>
                        <p class="text-gray-300">Isi form di bawah dan tim ahli kami akan menghubungi Anda dalam 24 jam untuk menjadwalkan demo.</p>
                    </div>

                    <form action="{{ route('storeContact') }}" method="POST" class="space-y-6" id="demoForm">
                        @csrf
                        <input type="hidden" name="demo_request" value="1">

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap *</label>
                                <input type="text" name="name" id="name"
                                       class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                                       placeholder="Masukkan nama lengkap"
                                       value="{{ old('name') }}" required>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Bisnis *</label>
                                <input type="email" name="email" id="email"
                                       class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                                       placeholder="nama@perusahaan.com"
                                       value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Nama Perusahaan *</label>
                                <input type="text" name="company" id="company"
                                       class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                                       placeholder="PT. Perusahaan Anda"
                                       value="{{ old('company') }}" required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Nomor Telepon</label>
                                <input type="tel" name="phone" id="phone"
                                       class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200"
                                       placeholder="+62 812 3456 7890"
                                       value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-300 mb-2">Industri *</label>
                                <select name="industry" id="industry"
                                        class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200" required>
                                    <option value="">Pilih Industri</option>
                                    <option value="manufacturing" {{ old('industry') == 'manufacturing' ? 'selected' : '' }}>Manufacturing</option>
                                    <option value="retail" {{ old('industry') == 'retail' ? 'selected' : '' }}>Retail & Trading</option>
                                    <option value="construction" {{ old('industry') == 'construction' ? 'selected' : '' }}>Construction</option>
                                    <option value="services" {{ old('industry') == 'services' ? 'selected' : '' }}>Services</option>
                                    <option value="fnb" {{ old('industry') == 'fnb' ? 'selected' : '' }}>Food & Beverage</option>
                                    <option value="others" {{ old('industry') == 'others' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label for="company_size" class="block text-sm font-medium text-gray-300 mb-2">Ukuran Perusahaan</label>
                                <select name="company_size" id="company_size"
                                        class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200">
                                    <option value="">Pilih Ukuran</option>
                                    <option value="1-10" {{ old('company_size') == '1-10' ? 'selected' : '' }}>1-10 Karyawan</option>
                                    <option value="11-50" {{ old('company_size') == '11-50' ? 'selected' : '' }}>11-50 Karyawan</option>
                                    <option value="51-200" {{ old('company_size') == '51-200' ? 'selected' : '' }}>51-200 Karyawan</option>
                                    <option value="201-500" {{ old('company_size') == '201-500' ? 'selected' : '' }}>201-500 Karyawan</option>
                                    <option value="500+" {{ old('company_size') == '500+' ? 'selected' : '' }}>500+ Karyawan</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Ceritakan Kebutuhan Bisnis Anda</label>
                            <textarea name="message" id="message" rows="4"
                                      class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-200 resize-none"
                                      placeholder="Jelaskan tantangan bisnis yang ingin Anda selesaikan dengan sistem ERP...">{{ old('message') }}</textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" name="agree_privacy" id="agree_privacy"
                                   class="mt-1 w-4 h-4 text-yellow-500 bg-gray-800 border-gray-600 rounded focus:ring-yellow-500 focus:ring-2" required>
                            <label for="agree_privacy" class="ml-3 text-sm text-gray-300">
                                Saya setuju dengan <a href="#" class="text-yellow-400 hover:text-yellow-300 underline">Kebijakan Privasi</a>
                                dan bersedia dihubungi oleh tim ITB untuk keperluan demo dan konsultasi.
                            </label>
                        </div>

                        <button type="submit"
                                class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-black px-8 py-4 rounded-lg font-bold text-lg hover:from-yellow-300 hover:to-orange-400 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center space-x-3">
                                <span>Request Demo Gratis Sekarang</span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </span>
                        </button>

                        <p class="text-center text-sm text-gray-400">
                            ⚡ Tim kami akan menghubungi Anda dalam 24 jam • 🎯 Demo disesuaikan dengan kebutuhan industri Anda
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry Section --}}
    <section id="industries" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                    Industries <span class="text-blue-600">Served</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                    ITB telah dipercaya oleh berbagai industri untuk mentransformasi proses bisnis mereka.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">Manufacturing</h3>
                </div>

                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-green-600 transition-colors">Retail</h3>
                </div>

                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">Construction</h3>
                </div>

                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-orange-600 transition-colors">Finance</h3>
                </div>

                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-red-600 transition-colors">Services</h3>
                </div>

                <div class="text-center group cursor-pointer">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center group-hover:scale-110 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-10 h-10 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zM3 9a2 2 0 012-2h14a2 2 0 012 2v1a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-teal-600 transition-colors">F&B</h3>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Additional animations and effects */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Form focus effects */
        input:focus, select:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(252, 211, 77, 0.1);
        }

        /* Custom scrollbar for demo form */
        #demoForm {
            scrollbar-width: thin;
            scrollbar-color: #fbbf24 #374151;
        }

        #demoForm::-webkit-scrollbar {
            width: 6px;
        }

        #demoForm::-webkit-scrollbar-track {
            background: #374151;
            border-radius: 3px;
        }

        #demoForm::-webkit-scrollbar-thumb {
            background: #fbbf24;
            border-radius: 3px;
        }
    </style>
@endsection
