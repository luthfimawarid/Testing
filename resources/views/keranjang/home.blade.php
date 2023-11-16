@extends('menu_keranjang.main')
@section('title', $title)
@section('content')
    <h1>{{ $keranjang }}</h1>

    <div class="keranjang" mt="5">
        <h2>Keranjang 1</h2>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
        <button onclick="hapusItem()">Hapus Item</button>
    </div>

    <div class="garis-pembatas"></div>

    <!-- Tambahkan keranjang lain jika diperlukan -->

    <script>
        function hapusItem() {
            // Logika untuk menghapus item dari keranjang
            alert('Item dihapus dari keranjang.');
        }
    </script>
@endsection
