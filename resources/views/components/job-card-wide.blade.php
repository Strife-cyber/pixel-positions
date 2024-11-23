@props(['job'])

<div class="p-4 bg-white/10 rounded-xl flex flex-row gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary  }}</p>
    </div>

    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag"/>
            @endforeach
        </div>
    </div>
</div>
