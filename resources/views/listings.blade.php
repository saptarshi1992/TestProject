
<h1>
    {{$heading}}
</h1>
@foreach ($details as $detail)
<h2>
    {{$detail['name']}}
</h2>
<p>
    {{$detail['description']}}
</p>

@endforeach
