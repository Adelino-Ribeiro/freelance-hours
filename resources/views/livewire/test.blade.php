<div>
    
    <h1>Meu component Livewire</h1>

    <input wire::model="search" type="text" placeholder="Search users...">

    <ul>
        @foreach ($users as $user)

            <li>{{ $user -> name }}</li>
            
        @endforeach
    </ul>

</div>
