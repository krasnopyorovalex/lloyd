<div class="well well__ins2 bg-light projects__in-main">
    <div class="container">
        <div class="h2 text-primary text-center">Проекты</div>
        <div class="row">
            @foreach($projectsInMain as $project)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box2">
                        <a class="thumb" href="{{ $project->url }}">
                            @if($project->image)
                            <img src="{{ $project->image->path }}" alt="{{ $project->image->alt }}" title="{{ $project->image->title }}">
                            <span class="thumb_overlay"></span>
                            @endif
                        </a>

                        <div class="box2_cnt">
                            <h5 class="strong">
                                <a href="{{ $project->url }}">{{ $project->name }}</a>
                            </h5>

                            <p class="big">{{ strip_tags($project->preview) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="button-wrap">
            <a class="btn2" href="{{ route('page.show', ['alias' => 'service']) }}">Сервис</a>
            <a class="btn2 btn2__color_mod" href="{{ route('page.show', ['alias' => 'projects']) }}">Все проекты</a>
        </div>
    </div>
</div>
