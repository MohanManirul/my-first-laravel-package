<h1>User Module</h1>
<p>This is the User module homepage.</p>

<ul> 
    @foreach ($users as $user)        
        <li>{{ $user }}</li>
    @endforeach
</ul>
