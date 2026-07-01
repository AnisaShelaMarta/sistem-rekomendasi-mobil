@extends('admin')

@section('content')

<div class="page-header">
    <h1>Data Feedback UAT</h1>
    <p>Hasil penilaian pengguna terhadap sistem rekomendasi mobil.</p>
</div>

<div class="table-container">

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah Ya</th>
                <th>Jumlah Tidak</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach($feedbacks as $feedback)

            @php

                $jawaban = [
                    $feedback->q1,
                    $feedback->q2,
                    $feedback->q3,
                    $feedback->q4,
                    $feedback->q5,
                    $feedback->q6,
                    $feedback->q7,
                    $feedback->q8
                ];

                $jumlahYa = count(
                    array_filter(
                        $jawaban,
                        fn($j) => $j == 'Ya'
                    )
                );

                $jumlahTidak = 8 - $jumlahYa;

                $persentase = ($jumlahYa / 8) * 100;

            @endphp

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>
                    {{ $feedback->created_at->format('d M Y') }}
                </td>

                <td>{{ $jumlahYa }}</td>

                <td>{{ $jumlahTidak }}</td>

                <td>
    <a href="{{ route('admin.feedback.detail', $feedback->id) }}"
       class="btn-detail">
        Detail
    </a>
</td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection