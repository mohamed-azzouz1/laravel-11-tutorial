<x-layout>
<x-slot name="heading">
        job
</x-slot>
    
<h2 class="font-bold text-lg">{{ $job['title']}}</h2>
<p>
    this job pays {{$job['salary'] }} per year.
</p>
</x-layout>