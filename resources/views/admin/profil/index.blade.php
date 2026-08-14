<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Kelola Profil Desa</h1>
    </x-slot>
    <div class="p-6 space-y-5">
        @if(session('success'))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">
            <svg class="w-5 h-5 flex-shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            {{ session('success') }}
        </div>
        @endif
        @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('admin.profil.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="max-w-4xl space-y-5">
                <div class="bg-blue-50 border border-blue-200 rounded-xl px-4 py-3 text-sm text-blue-700 flex items-start gap-2">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                    <p>Data profil desa hanya ada satu record. Isi semua field dan klik simpan untuk memperbarui.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📜 Sejarah Desa & Selayang Pandang</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Sejarah Desa</label>
                            <textarea name="history" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tuliskan sejarah singkat...">{{ old('history', $profil?->history) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Selayang Pandang</label>
                            <textarea name="selayang_pandang" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Cerita rakyat, asal-usul Dukuh, dll...">{{ old('selayang_pandang', $profil?->selayang_pandang) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🎯 Visi & Misi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Visi Desa</label>
                            <textarea name="vision" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tulis visi Desa Blumbang...">{{ old('vision', $profil?->vision) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Misi Desa</label>
                            <textarea name="mission" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="1. Mewujudkan...&#10;2. Meningkatkan...&#10;3. Mengembangkan...">{{ old('mission', $profil?->mission) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🗺️ Kondisi Geografis (Teks Umum)</h3>
                    <textarea name="geography" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Batas wilayah, topografi, luas wilayah, iklim, dll secara umum...">{{ old('geography', $profil?->geography) }}</textarea>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📍 Detail Geografi (Terstruktur)</h3>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="block text-sm text-gray-700 mb-1">Batas Utara</label><input type="text" name="geografi_json[batas][utara]" value="{{ old('geografi_json.batas.utara', $profil?->geografi_json['batas']['utara'] ?? 'Desa Klego') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Batas Selatan</label><input type="text" name="geografi_json[batas][selatan]" value="{{ old('geografi_json.batas.selatan', $profil?->geografi_json['batas']['selatan'] ?? 'Desa Jaten') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Batas Timur</label><input type="text" name="geografi_json[batas][timur]" value="{{ old('geografi_json.batas.timur', $profil?->geografi_json['batas']['timur'] ?? 'Desa Sangge') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Batas Barat</label><input type="text" name="geografi_json[batas][barat]" value="{{ old('geografi_json.batas.barat', $profil?->geografi_json['batas']['barat'] ?? 'Desa Pengkol, Kec. Karanggede') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div><label class="block text-sm text-gray-700 mb-1">Curah Hujan (mm/tahun)</label><input type="number" name="geografi_json[iklim][curah_hujan]" value="{{ old('geografi_json.iklim.curah_hujan', $profil?->geografi_json['iklim']['curah_hujan'] ?? '20') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Jumlah Bulan Kering</label><input type="number" name="geografi_json[iklim][bulan_kering]" value="{{ old('geografi_json.iklim.bulan_kering', $profil?->geografi_json['iklim']['bulan_kering'] ?? '6') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div><label class="block text-sm text-gray-700 mb-1">Total Luas Wilayah (Ha)</label><input type="number" step="0.01" name="geografi_json[luas][total]" value="{{ old('geografi_json.luas.total', $profil?->geografi_json['luas']['total'] ?? '282.77') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Tanah Sawah (Ha)</label><input type="number" step="0.01" name="geografi_json[luas][sawah]" value="{{ old('geografi_json.luas.sawah', $profil?->geografi_json['luas']['sawah'] ?? '96.00') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Tanah Kering (Ha)</label><input type="number" step="0.01" name="geografi_json[luas][kering]" value="{{ old('geografi_json.luas.kering', $profil?->geografi_json['luas']['kering'] ?? '186.77') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div><label class="block text-sm text-gray-700 mb-1">Sapi Potong (Ekor)</label><input type="number" name="geografi_json[peternakan][sapi]" value="{{ old('geografi_json.peternakan.sapi', $profil?->geografi_json['peternakan']['sapi'] ?? '200') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Kambing (Ekor)</label><input type="number" name="geografi_json[peternakan][kambing]" value="{{ old('geografi_json.peternakan.kambing', $profil?->geografi_json['peternakan']['kambing'] ?? '115') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                            <div><label class="block text-sm text-gray-700 mb-1">Puyuh (Ekor)</label><input type="number" name="geografi_json[peternakan][puyuh]" value="{{ old('geografi_json.peternakan.puyuh', $profil?->geografi_json['peternakan']['puyuh'] ?? '15000') }}" class="w-full px-4 py-2 border rounded-xl text-sm"></div>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-700 mb-1">Industri & Usaha (Pisahkan dengan koma)</label>
                            @php $industriDefault = implode(', ', $profil?->geografi_json['industri'] ?? ['Mebel', 'Keripik pangsit', 'Pengepul pisang', 'Pembuatan batako', 'Percetakan', 'Kerajinan bambu']); @endphp
                            <input type="text" name="geografi_json[industri]" value="{{ old('geografi_json.industri', $industriDefault) }}" class="w-full px-4 py-2 border rounded-xl text-sm">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📊 Data Statistik Utama</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah Penduduk</label>
                            <input type="text" name="stat_penduduk" value="{{ old('stat_penduduk', $profil?->stat_penduduk) }}" placeholder="Misal: 2.847 Jiwa" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah Kepala Keluarga (KK)</label>
                            <input type="text" name="stat_kk" value="{{ old('stat_kk', $profil?->stat_kk) }}" placeholder="Misal: 812 KK" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah RT</label>
                            <input type="text" name="stat_rt" value="{{ old('stat_rt', $profil?->stat_rt) }}" placeholder="Misal: 24" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah RW</label>
                            <input type="text" name="stat_rw" value="{{ old('stat_rw', $profil?->stat_rw) }}" placeholder="Misal: 6" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📈 Detail Data Diagram (Untuk Chart.js)</h3>
                    <div class="space-y-6">
                        <!-- Agama -->
                        <div>
                            <h4 class="font-medium text-sm text-gray-700 mb-3">Agama</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                @foreach(['Islam' => 2555, 'Katholik' => 7, 'Kristen' => 4, 'Hindu' => 0, 'Buddha' => 0, 'Khonghucu' => 0, 'Kepercayaan' => 0] as $agama => $defValue)
                                <div>
                                    <label class="block text-xs text-gray-600 mb-1">{{ $agama }}</label>
                                    <input type="number" name="statistik_json[agama][{{ $agama }}]" value="{{ old("statistik_json.agama.{$agama}", $profil?->statistik_json['agama'][$agama] ?? $defValue) }}" class="w-full px-3 py-1.5 border rounded-lg text-sm">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Status Perkawinan -->
                        <div>
                            <h4 class="font-medium text-sm text-gray-700 mb-3">Status Perkawinan</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                @foreach(['Belum Kawin' => 1050, 'Kawin' => 1237, 'Cerai Hidup' => 56, 'Cerai Mati' => 223] as $status => $defValue)
                                <div>
                                    <label class="block text-xs text-gray-600 mb-1">{{ $status }}</label>
                                    <input type="number" name="statistik_json[perkawinan][{{ $status }}]" value="{{ old("statistik_json.perkawinan.{$status}", $profil?->statistik_json['perkawinan'][$status] ?? $defValue) }}" class="w-full px-3 py-1.5 border rounded-lg text-sm">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Pendidikan -->
                        <div>
                            <h4 class="font-medium text-sm text-gray-700 mb-3">Pendidikan</h4>
                            <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                                @foreach([
                                    'Tidak/Belum Sekolah' => 535, 'Belum Tamat SD/Sederajat' => 261, 'Tamat SD/Sederajat' => 594, 'Tamat SLTP/Sederajat' => 592, 'Tamat SLTA/Sederajat' => 446,
                                    'Diploma I/II' => 9, 'Akademi/DIII/Sarjana Muda' => 31, 'Diploma IV/Strata I' => 93, 'Strata II' => 5, 'Strata III' => 0
                                ] as $edu => $defValue)
                                <div>
                                    <label class="block text-xs text-gray-600 mb-1 truncate" title="{{ $edu }}">{{ $edu }}</label>
                                    <input type="number" name="statistik_json[pendidikan][{{ $edu }}]" value="{{ old("statistik_json.pendidikan.{$edu}", $profil?->statistik_json['pendidikan'][$edu] ?? $defValue) }}" class="w-full px-3 py-1.5 border rounded-lg text-sm">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Piramida -->
                        <div>
                            <h4 class="font-medium text-sm text-gray-700 mb-3">Piramida Penduduk (Berdasarkan Usia)</h4>
                            <div class="h-64 overflow-y-auto pr-2 border rounded-xl p-3 bg-gray-50">
                                <div class="grid grid-cols-3 gap-2 font-semibold text-xs text-gray-600 mb-2 sticky top-0 bg-gray-50 py-1">
                                    <div>Rentang Usia</div><div>Laki-laki</div><div>Perempuan</div>
                                </div>
                                @php
                                $usiaLabels = ['>75', '70-74', '65-69', '60-64', '55-59', '50-54', '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9', '0-4'];
                                $defLaki = [-47, -48, -60, -54, -69, -77, -84, -95, -91, -106, -96, -107, -112, -99, -107, -76];
                                $defPerem = [80, 70, 74, 63, 68, 82, 84, 73, 82, 98, 98, 95, 79, 90, 78, 71];
                                @endphp
                                @foreach($usiaLabels as $i => $usia)
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <div class="flex items-center text-sm font-medium">{{ $usia }}</div>
                                    <input type="number" name="statistik_json[piramida][laki_laki][{{ $usia }}]" value="{{ old("statistik_json.piramida.laki_laki.{$usia}", $profil?->statistik_json['piramida']['laki_laki'][$usia] ?? $defLaki[$i]) }}" class="w-full px-3 py-1.5 border border-blue-200 rounded-lg text-sm bg-white focus:ring-2 focus:ring-blue-400">
                                    <input type="number" name="statistik_json[piramida][perempuan][{{ $usia }}]" value="{{ old("statistik_json.piramida.perempuan.{$usia}", $profil?->statistik_json['piramida']['perempuan'][$usia] ?? $defPerem[$i]) }}" class="w-full px-3 py-1.5 border border-pink-200 rounded-lg text-sm bg-white focus:ring-2 focus:ring-pink-400">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📋 Daftar Nama RT & RW</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Ketua RT (Satu nama per baris)</label>
                            @php $rtDefault = implode("\n", $profil?->daftar_rt_rw['rt'] ?? ['M. Mustar', 'Suri', 'Tarsono', 'Suradi', 'Winarsih', 'Sumarno', 'Jarot Prianto', 'Supangat', 'Sumadi', 'Darmo', 'Rosman', 'Sobirin', 'Diman', 'Afrizal', 'Slamet Mulyono', 'Juweni']); @endphp
                            <textarea name="daftar_rt_rw[rt]" rows="10" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm" placeholder="Nama RT 1&#10;Nama RT 2...">{{ old('daftar_rt_rw.rt', $rtDefault) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Ketua RW (Satu nama per baris)</label>
                            @php $rwDefault = implode("\n", $profil?->daftar_rt_rw['rw'] ?? ['Supardi', 'Hadi Suwito', 'Budi']); @endphp
                            <textarea name="daftar_rt_rw[rw]" rows="10" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm" placeholder="Nama RW 1&#10;Nama RW 2...">{{ old('daftar_rt_rw.rw', $rwDefault) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📋 Informasi Tambahan</h3>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Penjelasan Tambahan Profil (Opsional)</label>
                    <textarea name="general_information" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Penjelasan demografi tambahan...">{{ old('general_information', $profil?->general_information) }}</textarea>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">👥 Struktur Organisasi & BPD</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Struktur Desa -->
                        <div x-data="{ photoPreview: '{{ $profil?->organizational_structure ? Storage::url($profil->organizational_structure) : '' }}' }">
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Bagan Struktur Desa</label>
                        
                        <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-green-400 transition-colors cursor-pointer"
                             x-on:click="$refs.photo.click()">
                            
                            <template x-if="photoPreview">
                                <img :src="photoPreview" class="absolute inset-0 w-full h-full object-contain p-2">
                            </template>
                            
                            <div x-show="photoPreview" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-white text-sm font-medium">Klik untuk mengganti gambar</span>
                            </div>

                            <template x-if="!photoPreview">
                                <div class="text-center">
                                    <svg class="mx-auto h-10 w-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span class="text-sm text-gray-500 block">Klik untuk memilih gambar</span>
                                </div>
                            </template>

                            <input type="file" name="organizational_structure" accept="image/*" x-ref="photo" class="hidden"
                                   x-on:change="
                                        const file = $refs.photo.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        }
                                   ">
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Format gambar (JPG, PNG). Max 5MB.</p>
                    </div>

                        <!-- Struktur BPD -->
                        <div x-data="{ bpdPreview: '{{ $profil?->bpd_structure ? Storage::url($profil->bpd_structure) : '' }}' }">
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Bagan Struktur BPD</label>
                            
                            <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-green-400 transition-colors cursor-pointer"
                                 x-on:click="$refs.bpdPhoto.click()">
                                
                                <template x-if="bpdPreview">
                                    <img :src="bpdPreview" class="absolute inset-0 w-full h-full object-contain p-2">
                                </template>
                                
                                <div x-show="bpdPreview" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <span class="text-white text-sm font-medium">Klik untuk mengganti gambar</span>
                                </div>

                                <template x-if="!bpdPreview">
                                    <div class="text-center">
                                        <svg class="mx-auto h-10 w-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span class="text-sm text-gray-500 block">Klik untuk memilih gambar</span>
                                    </div>
                                </template>

                                <input type="file" name="bpd_structure" accept="image/*" x-ref="bpdPhoto" class="hidden"
                                       x-on:change="
                                            const file = $refs.bpdPhoto.files[0];
                                            if (file) {
                                                const reader = new FileReader();
                                                reader.onload = (e) => { bpdPreview = e.target.result; };
                                                reader.readAsDataURL(file);
                                            }
                                       ">
                            </div>
                            <p class="text-xs text-gray-400 mt-2">Format gambar (JPG, PNG). Max 5MB.</p>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-xl text-sm transition-colors">
                        💾 Simpan Profil Desa
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>