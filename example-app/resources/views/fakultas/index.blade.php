@foreach ($fakultas as $item)
    {{ $item->nama_fakultas . 'dan ' . $item->singkatan }}
@endforeach