<div>
    <ul>
        @foreach ($hunters as $hunter)
            <li>{ Name: {{$hunter->name}} - Gender: {{$hunter->gender}} }</li>    
        @endforeach
    </ul>
</div>