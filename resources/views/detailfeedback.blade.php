@extends('admin')

@section('content')

<div class="page-header">
    <h1>Detail Feedback UAT</h1>
    <p>
        Feedback yang diberikan pengguna pada
        {{ $feedback->created_at->format('d F Y, H:i') }}
    </p>
</div>

<div class="detail-card">

    <div class="feedback-info">
        <span class="info-label">
    </div>

    <table class="detail-table">

        <thead>
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Apakah sistem berhasil menampilkan rekomendasi mobil setelah Anda mengisi preferensi?</td>
                <td>
                    <span class="{{ $feedback->q1 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q1 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Apakah tampilan website sistem rekomendasi mobil mudah dipahami?</td>
                <td>
                    <span class="{{ $feedback->q2 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q2 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Apakah informasi harga dan spesifikasi mobil dapat ditampilkan dengan benar?</td>
                <td>
                    <span class="{{ $feedback->q3 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q3 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Apakah sistem dapat menerima dan memproses data preferensi yang dimasukkan pengguna?</td>
                <td>
                    <span class="{{ $feedback->q4 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q4 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td>Apakah hasil rekomendasi yang diberikan sesuai dengan kriteria yang dipilih pengguna?</td>
                <td>
                    <span class="{{ $feedback->q5 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q5 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>6</td>
                <td>Apakah sistem dapat menampilkan lebih dari satu alternatif mobil rekomendasi?</td>
                <td>
                    <span class="{{ $feedback->q6 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q6 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>7</td>
                <td>Apakah hasil rekomendasi yang ditampilkan memberikan informasi yang bermanfaat dalam memilih mobil?</td>
                <td>
                    <span class="{{ $feedback->q7 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q7 }}
                    </span>
                </td>
            </tr>

            <tr>
                <td>8</td>
                <td>Apakah seluruh fitur pada sistem rekomendasi mobil dapat digunakan tanpa mengalami kesalahan?</td>
                <td>
                    <span class="{{ $feedback->q8 == 'Ya' ? 'badge-yes' : 'badge-no' }}">
                        {{ $feedback->q8 }}
                    </span>
                </td>
            </tr>

        </tbody>

    </table>

</div>

@endsection