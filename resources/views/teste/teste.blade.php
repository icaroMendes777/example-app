<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">v

<button type="button" class="btn-close" aria-label="Close"></button>
eita!


@foreach($arr as $a)

{{$a}}

@endforeach

<ul>
@foreach($users as $u)
<li>
{{$u->name}}
</li>
@endforeach
</ul>
