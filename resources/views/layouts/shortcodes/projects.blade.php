<div class="row">
    <div class="col-md-12">
        <div class="filter filter__producers">
            <div class="title">Поставщики:</div>
            <ul>
                <li data-filter="all" class="active"><span>Все</span></li>
                @foreach($producers as $producer)
                    <li data-filter="producer__{{ $producer->id }}"><span>{{ $producer->name_little }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="filter filter__industries">
            <div class="title">Отрасли:</div>
            <ul>
                <li data-filter="all" class="active"><span>Все</span></li>
                @foreach($industries as $industry)
                    <li data-filter="industry__{{ $industry->id }}"><span>{{ $industry->name }}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row project__box">
    @foreach($projects as $project)
    <div class="col-md-4 producer__{{ $project->producer->id }} industry__{{ $project->industry->id }}">
        <div class="project">
            @if($project->image)
            <figure>
                <img src="{{ asset($project->image->path) }}" alt="{{ $project->image->alt }}" title="{{ $project->image->title }}">
            </figure>
            @endif
            <div class="desc">
                <div class="name">
                    <a href="{{ $project->url }}">{{ $project->name }}</a>
                </div>
                <div class="preview">{{ strip_tags($project->preview) }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
