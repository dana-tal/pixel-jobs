@props(['job'])
<x-pannel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-md text-orange-400 font-bold">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-red-800 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank"> {{ $job->title }}</a>
        </h3>
        <p class="text-md text-orange-400 font-bold mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small" />
        @endforeach

    </div>

</x-pannel>
