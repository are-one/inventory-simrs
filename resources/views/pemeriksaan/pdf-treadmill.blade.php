<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan MCU - RSUD Konawe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.4;
        }

        .page {
            width: 100%;
            max-width: 210mm;
            min-height: auto;
            padding: 16px;
            margin: 0 auto 20px auto;
            background: white;
        }

        .page-last {
            width: 100%;
            max-width: 210mm;
            min-height: auto;
            padding: 16px;
            margin: 0 auto 20px auto;
            background: white;
        }

        .header {
            border-bottom: 3px solid #1e5a9e;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hospital-logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hospital-logo {
            width: 40px;
            height: 40px;
            border: 2px solid #1e5a9e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #1e5a9e;
            background: white;
            font-size: 14px;
        }

        .hospital-text {
            flex: 1;
        }

        .hospital-name {
            font-size: 14px;
            font-weight: bold;
            color: #1e5a9e;
            margin-bottom: 3px;
        }

        .hospital-address {
            font-size: 10px;
            color: #666;
        }

        .hospital-contact {
            font-size: 9px;
            color: #999;
        }

        .patient-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
            border: 1px solid #dee2e6;
        }

        .patient-photo {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-right: 25px;
        }

        .photo-container {
            text-align: center;
        }

        .photo-frame {
            width: 85px;
            height: 102px;
            border: 1px solid #90accc;
            background: white;
            overflow: hidden;
            border-radius: 3px;
            margin-bottom: 5px;
            box-shadow: 0 2px 4px rgba(136, 133, 133, 0.1);
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo-label {
            font-size: 8px;
            color: #666;
            font-style: italic;
            margin-top: 3px;
        }

        .qrcode-container {
            text-align: center;
            padding: 10px 0;
        }

        .qrcode-frame {
            width: 80px;
            height: 80px;
            background: white;
            overflow: hidden;
            border-radius: 3px;
            margin-bottom: 15px; /* Tambahkan margin bawah untuk jarak */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qrcode-frame img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .qrcode-label {
            font-size: 9px;
            font-weight: bold;
            color: #1e5a9e;
            margin-top: 0; /* Reset margin top */
            margin-bottom: 5px; /* Tambahkan margin bawah */
            letter-spacing: 0.5px;
        }

        .qrcode-info {
            font-size: 8px;
            color: #666;
            line-height: 1.1;
        }

        .patient-data {
            flex: 1;
        }

        .section-title {
            background: #1e5a9e;
            color: white;
            padding: 6px 10px;
            font-weight: bold;
            font-size: 11px;
            margin: 15px 0 8px 0;
        }

        .conclusion-box, .recommendation-box {
            page-break-inside: auto;
            background: #e8f4f8;
            padding: 12px;
            margin: 10px 0;
            border-left: 4px solid #1e5a9e;
        }

        .conclusion-box h4, .recommendation-box h4 {
            font-size: 11px;
            margin-bottom: 8px;
            color: #1e5a9e;
        }

        .result-category {
            background: #f5f5f5;
            padding: 8px 12px;
            margin: 10px 0;
            font-weight: bold;
        }

        .medical-team {
            margin-top: 20px;
            font-size: 9px;
        }

        .medical-team h4 {
            font-size: 10px;
            margin-bottom: 5px;
            color: #1e5a9e;
        }

        .medical-team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .medical-team-column {
            padding: 5px;
        }

        .medical-team-column h5 {
            font-size: 9px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 3px;
        }

        .medical-team-list {
            list-style: none;
        }

        .medical-team-list li {
            margin-bottom: 3px;
            padding-left: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0px 0;
            font-size: 10px;
        }

        table th {
            background: #1e5a9e;
            color: white;
            padding: 6px 8px;
            text-align: left;
            font-weight: bold;
        }

        table td {
            padding: 5px 8px;
            border-bottom: 0px solid #ddd;
        }

        table tr:nth-child(even) {
            background: #f9f9f9;
        }

        .abnormal {
            color: #e63946;
            font-weight: bold;
        }

        .indent {
            padding-left: 20px;
        }

        /* Container untuk gambar EKG yang bisa disesuaikan */
        .ekg-container {
            width: 100%;
            max-width: 100%;
            margin: 15px auto;
            border: 1px solid #ddd;
            background: #000;
            overflow: hidden;
            position: relative;
        }

        .ekg-container img {
            width: 100%;
            height: auto;
            max-height: 450px; /* Tinggi maksimal untuk satu halaman */
            object-fit: contain;
            display: block;
        }

        .image-placeholder {
            text-align: center;
            color: #999;
            padding: 40px 20px;
            background: #000;
        }

        .compact-info {
            font-size: 10px;
        }

        .compact-label {
            font-weight: bold;
            color: #333;
        }

        .compact-value {
            color: #000;
        }

        @media print {
            body {
                font-size: 11px;
                margin: 0;
                padding: 0;
            }

            .page {
                width: 210mm;
                min-height: 297mm;
                padding: 0 12mm 0 12mm;
                margin: 0;
                /* HAPUS page-break-after: always; */
                page-break-after: always; /* Ganti dengan auto */
                page-break-inside: avoid;
            }

            .page-last {
                width: 210mm;
                min-height: 297mm;
                padding: 0 12mm 0 12mm;
                margin: 0;
                /* HAPUS page-break-after: always; */
                page-break-after: auto; /* Ganti dengan auto */
                page-break-inside: avoid;
            }

            .patient-info {
                padding: 8px;
                margin-bottom: 10px;
            }

            .ekg-container {
                max-height: 500px;
                page-break-inside: avoid;
            }

            .ekg-container img {
                max-height: 500px;
            }

            .medical-team-grid {
                page-break-inside: avoid;
            }

            /* Tambahkan untuk menghindari page break di tempat yang tidak perlu */
            table, tr, td, th {
                page-break-inside: avoid;
            }
        }

        /* Untuk halaman EKG khusus */
        .ekg-page {
            padding: 10mm !important; /* Kurangi padding untuk gambar besar */
        }

        .ekg-page .patient-info {
            padding: 5px;
            margin-bottom: 8px;
        }

        .ekg-page .section-title {
            margin: 8px 0 5px 0;
            padding: 4px 8px;
        }
        .logo {
            width: 80px;
        }
    </style>
</head>
<body>

<!-- Page 9: Treadmill -->
    @if ($mcu->jenisPemeriksaans->contains('nama_pemeriksaan', 'Treadmill'))
    <div class="page-last">
        <div class="header">
            <div class="header-content">
                <div class="hospital-logo-container">
                    <div class="row align-items-center">
                        <table border="0">
                            <tr>
                                <td>
                                    <div class="col-2">
                                        <img src="{{ public_path('assets/img/logo-konawe.png') }}" alt="Logo"
                                             class="logo">
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="col-10">
                                        <h5 style="font-weight: bold; margin: 0;" class="hospital-name">RUMAH SAKIT UMUM DAERAH KABUPATEN KONAWE</h5>
                                        <p class="mb-0 hospital-address" style="font-size: 8pt;">
                                            Jl. Diponegoro No. 301 Konawe - Sulawesi Tenggara<br>Telepon: 0822 4559 3648 | Email : bludrsudkonawe.com
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="patient-info">
            <div class="patient-data">
                <table style="width:100%; border-collapse:collapse; font-size:10px;">
                    @if ($employee->nik)
                        <tr>
                            <td style="width:130px; font-weight:bold; vertical-align:top;">NIK / NRP </td>
                            <td style="width:10px; vertical-align:top;">:</td>
                            <td style="font-weight:bold; color:#1e5a9e;">{{$employee->nik}} / {{$employee->nrp}} </td>
                        </tr>
                    @else
                        <tr>
                            <td style="width:130px; font-weight:bold; vertical-align:top;">No. Reg / NRP </td>
                            <td style="width:10px; vertical-align:top;">:</td>
                            <td style="font-weight:bold; color:#1e5a9e;">MC{{ str_pad($mcu->id, 12, '0', STR_PAD_LEFT) }} / {{$employee->nrp}} </td>
                        </tr>
                    @endif
                    <tr>
                        <td style="font-weight:bold;">Nama Lengkap</td>
                        <td>:</td>
                        <td style="font-weight:bold;">{{ strtoupper($employee->nama) }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="section-title">PEMERIKSAAN TREADMILL</div>
        @foreach($all_pemeriksaan['treadmill_files'] as $treadmills)
            @if($treadmills->hasilBacaTreadmill)
                <table style="margin-top: 15px;">
                    <tr>
                        <th style="width: 20%;">Hasil</th>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; padding: 10px;">{{ $treadmills->hasilBacaTreadmill->hasil }}</td>
                    </tr>
                    {{-- <tr>
                        <th style="width: 20%;">Kesimpulan</th>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; padding: 10px;">{{ $treadmills->hasilBacaTreadmill->kesimpulan }}</td>
                    </tr> --}}
                </table>
            @endif
        @endforeach
        <div style="margin-top: 20px; font-size: 11px;">
            <p>Daftar lampiran dalam dokumen ini:</p>
            <ul>
                @forelse($all_pemeriksaan['treadmill_files'] as $treadmill)
                    {{-- {{dd($treadmill)}} --}}
                    {{-- {{dd($treadmill->fileTreadmill)}} --}}
                    @forelse($treadmill->fileTreadmill as $file)
                        {{-- {{dd($file)}} --}}
                        <li>{{ $file->nama_file }}</li>
                    @empty
                        <li>Tidak ada file treadmill</li>
                    @endforelse
                @empty
                    <li>Tidak ada data treadmill</li>
                @endforelse
            </ul>

        </div>


        <div style="margin-top: 50px; font-size: 10px; color: #666; border-top: 1px solid #eee; padding-top: 10px;">
            * Dokumen ini digenerate otomatis oleh sistem. Hasil treadmill yang dilampirkan adalah bagian yang tidak terpisahkan dari laporan ini.
        </div>
    </div>
   @endif
</body>
</html>
