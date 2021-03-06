<people>

@foreach ($people as $person)

<person>
    <id>{{ $person->id }}</id>
    <first_name>{{ $person->first_name }}</first_name>
    <last_name>{{ $person->last_name }}</last_name>
    <nickname>{{ $person->nickname }}</nickname>
    <birth_date>{{ $person->birth_date }}</birth_date>
    @if($person->relationLoaded('country'))
    <country>
        <name>{{ $person->country->name }}</name>
    </country>
    @endif
    @if($person->relationLoaded('sport'))
    <sport>
        <name>{{ $person->sport->name }}</name>
    </sport>
    @endif
</person>

@endforeach

</people>