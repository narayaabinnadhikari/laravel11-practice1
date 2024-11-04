<x-layout>   
    <h2> Currently available NINJAS:</h2>
    <h3>{{ $greeting }} </h3>
    <ul>
        @foreach ($ninjas as $ninja)
         <li>
           <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 70">
            <h3> {{ $ninja['name'] }} </h3>
           </x-card>
         </li>
        @endforeach      
    </ul>
        
</x-layout>