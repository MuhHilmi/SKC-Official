<a href="{{ $item->link }}" class="text-decoration-none text-dark" target="blank__" rel="noopener noreferrer">
    <div class="card h-100 shadow-sm">
        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top img-fluid"
            alt="Photo Kegiatan" style="object-fit: cover; height: 250px;">
        <div class="card-body text-center">
            <p class="card-text">{{ $item->deskripsi }}</p>
        </div>
        <div class="card-footer text-muted text-center">
            <small>{{ $item->created_at->format('d-m-Y') }}</small>
        </div>
    </div>
</a>
