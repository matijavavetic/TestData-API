<person>
       <id>{{ $person->id }}</id>
       <first_name>{{ $person->first_name }}</first_name>
       <last_name>{{ $person->last_name }}</last_name>
       <nickname>{{ $person->nickname }}</nickname>
       <birth_date>{{ $person->birth_date }}</birth_date>
       <country>{{ $person->country->name }}</country>
       <avatar>{{ $person->avatar->image_url }}</avatar>
</person>



