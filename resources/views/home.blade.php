@extends('layouts.layouts')

@section('title', 'ITB (Inovasi Terbaik Bangsa) - Coming Soon')
@section('meta_description', 'ITB sedang mempersiapkan solusi ERP & digitalisasi bisnis terdepan. Coming Soon!')
@section('meta_keywords', 'ITB, Inovasi Terbaik Bangsa, ERP Indonesia, coming soon')

@section('content')
    <section class="min-h-screen bg-slate-900 flex items-center justify-center px-4 pt-20 md:pt-24">
        <div class="text-center max-w-2xl mx-auto">

            {{-- Logo Section --}}
            <div class="mb-12">
                <div class="relative inline-block">
                    {{-- Glow Effect --}}
                    <div class="absolute inset-0 bg-blue-500 rounded-full blur-xl opacity-20 scale-110 animate-pulse"></div>

                    {{-- Logo Container --}}
                    <div class="relative w-32 h-32 md:w-40 md:h-40 bg-white rounded-full shadow-2xl flex items-center justify-center mx-auto overflow-hidden">
                        {{-- Image Logo --}}
                        <img src="{{ asset('images/image.jpg')}}" alt="Imogi Logo" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
            </div>

            {{-- Company Name --}}
            {{-- <div class="mb-8">
                <h1 class="text-4xl md:text-6xl font-black text-white mb-4">
                    <span class="bg-gradient-to-r from-blue-400 via-purple-500 to-blue-600 bg-clip-text">
                        Imogi
                    </span>
                </h1>
            </div> --}}

            {{-- Coming Soon --}}
            <div class="mb-12">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                    COMING SOON
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto rounded-full mb-6"></div>
                <p class="text-slate-400 text-base md:text-lg mb-4">
                    Solusi ERP & Digitalisasi Bisnis Terdepan
                </p>
                <div class="inline-block bg-white/10 backdrop-blur-sm rounded-lg px-6 py-3 border border-white/20">
                    <p class="text-slate-300 text-sm md:text-base">
                        🚀 Website sedang dalam pengembangan
                    </p>
                </div>
            </div>

            {{-- Contact Us Section --}}
            <div class="space-y-8">
                <h3 class="text-2xl md:text-3xl font-bold text-white">
                    Contact Us
                </h3>

                {{-- WhatsApp Button --}}
                <div class="flex justify-center">
                    <a href="https://wa.me/6285311552401"
                       target="_blank"
                       class="inline-flex items-center space-x-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        {{-- WhatsApp Icon --}}
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.690"/>
                        </svg>
                        <span>+62 853-1155-2401</span>
                    </a>
                </div>

                {{-- Additional Contact Info --}}
                <div class="space-y-3 text-slate-400">
                    <p class="text-sm md:text-base">
                        📧 Email: <span class="text-blue-400">info@itb-indonesia.com</span>
                    </p>
                    <p class="text-sm md:text-base">
                        ⏰ Website akan segera diluncurkan
                    </p>
                </div>
            </div>

            {{-- Footer --}}
            <div class="mt-16 pt-8 border-t border-white/20">
                <p class="text-slate-500 text-sm">
                    © 2025 Imogi. All rights reserved.
                </p>
            </div>

        </div>
    </section>

    {{-- Custom Styles --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Float Animation for Logo */
        .relative:first-child {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Pulse Animation */
        @keyframes pulse {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.4; }
        }
    </style>
@endsection
