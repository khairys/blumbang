<x-publik-layout>
    <x-slot name="title">{{ $pengumuman->title }}</x-slot>
    <x-slot name="meta_description">{{ strip_tags(Str::limit($pengumuman->content, 150)) }}</x-slot>
    @if($pengumuman->attachment && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $pengumuman->attachment))
    <x-slot name="og_image">{{ Storage::url($pengumuman->attachment) }}</x-slot>
    @endif

    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 py-12 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-6 flex flex-wrap items-center gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="{{ route('publik.pengumuman.index') }}" class="hover:text-white transition-colors">Pengumuman</a>
                <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white line-clamp-1 max-w-[200px] sm:max-w-xs" title="{{ $pengumuman->title }}">{{ Str::limit($pengumuman->title, 30) }}</span>
            </nav>
            
            <div class="mb-4">
                @php
                    $statusClass = 'bg-white/20 text-white';
                    if($pengumuman->activity_status === 'mendatang') $statusClass = 'bg-blue-500/30 text-blue-100 border border-blue-400/50';
                    if($pengumuman->activity_status === 'selesai') $statusClass = 'bg-gray-500/30 text-gray-200 border border-gray-400/50';
                @endphp
                <span class="inline-block text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full {{ $statusClass }}">
                    {{ ucfirst($pengumuman->activity_status ?? 'Aktif') }}
                </span>
            </div>

            <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight mb-4">{{ $pengumuman->title }}</h1>
            
            <div class="flex flex-wrap items-center gap-4 text-emerald-100 text-sm">
                <span class="flex items-center gap-1.5 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> 
                    Diumumkan pada: {{ $pengumuman->published_at ? \Carbon\Carbon::parse($pengumuman->published_at)->format('d F Y') : $pengumuman->created_at->format('d F Y') }}
                </span>
            </div>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-0 left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6 md:p-10 mb-8">
            <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed text-base md:text-lg">
                {!! $pengumuman->content !!}
            </div>

            @if($pengumuman->event_date || $pengumuman->event_time || $pengumuman->location || $pengumuman->contact)
            <div class="mt-10 pt-8 border-t border-gray-100">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Detail Kegiatan
                </h3>
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8">
                    @if($pengumuman->event_date)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-wide">Tanggal</p>
                            <p class="font-medium text-gray-900">{{ \Carbon\Carbon::parse($pengumuman->event_date)->format('d F Y') }}</p>
                        </div>
                    </div>
                    @endif

                    @if($pengumuman->event_time)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-wide">Waktu</p>
                            <p class="font-medium text-gray-900">{{ $pengumuman->event_time }}</p>
                        </div>
                    </div>
                    @endif

                    @if($pengumuman->location)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-wide">Lokasi</p>
                            <p class="font-medium text-gray-900">{{ $pengumuman->location }}</p>
                        </div>
                    </div>
                    @endif

                    @if($pengumuman->contact)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-500 uppercase tracking-wide">Kontak</p>
                            <p class="font-medium text-gray-900">{{ $pengumuman->contact }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            @if ($pengumuman->attachment)
            <div class="mt-8 pt-6 border-t border-gray-100">
                @php
                    $isImage = preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $pengumuman->attachment);
                @endphp

                @if($isImage)
                <p class="text-sm font-bold text-gray-700 mb-3">Lampiran Gambar:</p>
                <div class="bg-gray-50 rounded-2xl border border-gray-100 p-2 text-center">
                    <img src="{{ Storage::url($pengumuman->attachment) }}" alt="Lampiran" class="max-w-full max-h-[600px] object-contain mx-auto rounded-xl shadow-sm">
                </div>
                @else
                <a href="{{ Storage::url($pengumuman->attachment) }}" target="_blank"
                   class="inline-flex items-center gap-2 bg-emerald-50 hover:bg-emerald-100 border border-emerald-200 text-emerald-700 font-bold text-sm px-5 py-2.5 rounded-xl transition-colors">
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg> Unduh Lampiran Dokumen</span>
                </a>
                @endif
            </div>
            @endif
        </div>

        <div class="text-center md:text-left">
            <a href="{{ route('publik.pengumuman.index') }}"
               class="inline-flex items-center justify-center gap-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 hover:text-emerald-700 px-6 py-3 rounded-full font-semibold transition-colors shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Pengumuman
            </a>
        </div>
    </div>
</x-publik-layout>
