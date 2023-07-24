<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ks-home</title>
</head>

<body style="background: gray;">
    <header style="background: gainsboro;">

        <h1 style="background-color:white ; color: grey; padding: 30px; font-size: 40px;">Politeknik Enjineering Indorama
        </h1>
    </header>

    <section>

        <article>
            <h1 style="font-size: 32px; text-align:center;">Wellcome Home</h1>

            {{ $data1 }} <br>
            {{ $data2 }}<br>
            <hr>
            @if ($data1 < 48)
                <p> Anda Mendapatkan Upah Sebesar : Rp.{{ $data1 * 2000 }}</p>
            @elseif($data1 > 48)
                <p> Anda Mendapatkan Upah sebesar : Rp.{{ 48 * 2000 + ($data1 - 48) * 3000 }}
                @else
                <p>Upah Yang Anda Masukan Salah</p>
            @endif

            @if ($gol == 'A')
                @if ($jam1 <= 48)
                    <p> Gaji Pokok Golongan A : {{ $jam1 * 4000 }}</p>
                @elseif($jam1 > 48)
                    <p>Total Gaji Golongan A :{{ 48 * 4000 + ($jam1 - 48) * 3000 }}</p>
                @endif
            @endif
            @if ($gol == 'B')
                @if ($jam1 <= 48)
                    <p> Gaji Pokok Golongan B : {{ $jam1 * 5000 }}</p>
                @elseif($jam1 > 48)
                    <p>Total Gaji Golongan B :{{ 48 * 5000 + ($jam1 - 48) * 3000 }}</p>
                @endif
            @endif
            @if ($gol == 'C')
                @if ($jam1 <= 48)
                    <p> Gaji Pokok Golongan C : {{ $jam1 * 6000 }}</p>
                @elseif($jam1 > 48)
                    <p>Total Gaji Golongan C :{{ 48 * 6000 + ($jam1 - 48) * 3000 }}</p>
                @endif
            @endif
            @if ($gol == 'D')
                @if ($jam1 <= 48)
                    <p> Gaji Pokok Golongan D : {{ $jam1 * 7500 }}</p>
                @elseif($jam1 > 48)
                    <p>Total Gaji Golongan D :{{ 48 * 7500 + ($jam1 - 48) * 3000 }}</p>
                @endif
            @endif
            @for ($i = $data1; $i < $data2; $i++)
                @if ($i % 2)
                    {{ $i }}
                @else
                @endif
            @endfor
        </article>
    </section>

</body>

</html>
