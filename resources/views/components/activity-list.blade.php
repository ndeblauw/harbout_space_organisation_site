<div>
    <ul class="ml-5 list-disc">
        @foreach($activities as $activity)
            <li>
                {{--
                @if( ($media = $activity->getMedia('images'))->count() > 0)
                    <img src="{{ $media->first()->getUrl('small') }}">
                @endif
                --}}
                <span class="text-gray-400">{{$activity->begin_date->format('Y-m-d')}}</span>
                {{$activity->title}}
            </li>
        @endforeach
    </ul>
</div>
