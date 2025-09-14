<div class="card shadow-sm mb-3" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">Umur: {{ $umur }} bulan</p>
        <p class="card-text fw-bold">Rp {{ number_format($harga, 0, ',', '.') }}</p>
        <x-button type="primary" size="sm">Beli</x-button>
    </div>
</div>