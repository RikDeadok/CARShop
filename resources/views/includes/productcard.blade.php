<div class="card me-3 mb-3" style="width: 15.5rem;">
    @if($product->first_photo)
        <img src="{{$product->first_photo->photo}}" class="card-img-top" alt="...">
    @else
        <div class="no-photo"></div>
    @endif
    <div class="card-body">
        <p class="card-text">{{$product->name}}</p>
        <h3 class="card-title">${{$product->price}}</h3>
        <div class="text-end">
            <button class="btn btn-primary"><i class="bi-bag-plus-fill" style="font-size: 1rem;"></i></button>
            <a class="btn btn-outline-primary" href="{{route('product', ['article' => $product->article])}}" role="button">Подробнее</a>
        </div>
    </div>
</div>
