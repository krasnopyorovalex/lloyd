@if( request()->headers->get('referer'))
<a href="{{ request()->headers->get('referer') }}" class="previous__page">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
</a>
@endif
