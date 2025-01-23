<x-layout>
<x-slot:heading>About</x-slot:heading>

<ul>
@foreach ($jobs as $job )
    <li>
        <a href="/jobs/1">
        <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per month.
        </a>
    </li>
@endforeach
</ul>
</x-layout>