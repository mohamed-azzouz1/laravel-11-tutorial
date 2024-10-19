<x-layout>
    <x-slot name="heading">
        jobs listings
    </x-slot>
    <div class="space-y-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-300">
            <div class="font-bold text-blue-500 text-sm">
                {{$job->employer->name}}
            </div>
            <div>
                <strong>{{$job ['title'] }}:</strong> pays {{$job ['salary'] }}: per year
            </div>
        </a>
        @endforeach
    </div>

</x-layout>