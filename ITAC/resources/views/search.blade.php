@if ($blogs != null)
    @foreach ($blogs as $blog)
        <li class="list-group-item">
            <a href="blog/{{ $blog->slug }}">{!! Str::substr($blog->title_en, 0, 20).'...' !!}</a>
        </li>
    @endforeach
@endif
