@props(['job'])

<x-panel class="gap-6">
    <div class="">
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <h3 class="self-start text-sm text-gray-400">
            {{ $job->employer->name }}
        </h3>

        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">
            {{ $job->salary }}
        </p>
    </div>

    <div class="space-x-1">
        @foreach ($job->tags as $tag)
        <x-tag :$tag />
        @endforeach
    </div>
</x-panel>