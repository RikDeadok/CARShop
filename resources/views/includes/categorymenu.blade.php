<div class="accordion" id="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{$category->id}}">
            <a href="#" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$category->id}}" aria-expanded="false" aria-controls="collapse{{$category->id}}">
                {{$category->name}}
            </a>
        </h2>
        <div id="collapse{{$category->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$category->id}}" data-bs-parent="#accordionExample">
            <ul class="accordion-body navbar-nav">
                @foreach($category->childCat as $child)
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">{{$child->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
