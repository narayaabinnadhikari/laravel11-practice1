<x-layout>   
    <h2> Currently available NINJAS:</h2>
    <h3>{{ $greeting }} </h3>
    <ul>
        <h4>Ninjas Below: </h4>
        @foreach ($ninjas as $ninja)
         <li>
            <p>{{ $ninja["name"] }} 
                <a href="/ninjas/{{$ninja["id"]}} ">View Details</a>  </p> 
         </li>
        @endforeach      
    </ul>
        
</x-layout>