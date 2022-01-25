<div>
    <div class="flex justify-between">
        <div>
            {{$location->name}}
            <a href="" wire:click.prevent="toggleShowDetails">show activities</a>
        </div>
        <div>{{ now()->format('H:i:s') }}</div>
    </div>
    @if($show_details)
        @foreach($location->activities as $activity)
            {{$activity->title}}
        @endforeach
    @endif
</div>
