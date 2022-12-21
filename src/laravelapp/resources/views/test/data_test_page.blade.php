<div>
    <h1> {{$title}}</h1>

    <ul>
        @foreach($members as $member)
            <li>{{ $member -> name}}</li>
        @endforeach
    </ul>
</div>
