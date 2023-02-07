<li class="d-flex align-items-center justify-content-between mb-4">
    @if($item->status == 'pending')
        <div class="icon-box bg-warning rounded me-4">
            <i class="fas fa-timer text-white"></i>
        </div>
    @else
        <div class="icon-box bg-success rounded me-4">
            <i class="fas fa-check-circle text-white"></i>
        </div>
    @endif
    <div class="icon-content" style="width: 70%">
        <h3 class="h5">{{ $item->name }}</h3>
        <p class="custom-mb-0">Adres : {{ $item->address }}</p>
        <p class="custom-mb-0">Telefon : {{ $item->phone }}</p>
        <p class="custom-mb-0">İl - İlçe : {{ $item->city }} / {{ $item->district }}</p>
    </div>
    <div>
        <a href="https://www.google.com.tr/maps/search/{{ $item->address }}" target="_blank" class="btn btn-primary btn-sm">Konum</a>
        @if($item->status == 'pending')
            <a href="{{ route('address.approve', $item) }}" class="btn btn-success btn-sm">Adrese Ulaştık</a>
        @endif
    </div>
</li>
