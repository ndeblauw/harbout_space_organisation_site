<div>
    <ul class="ml-5 list-disc">
        @foreach($activities as $activity)
            <li>
                <span class="text-gray-400">{{$activity->begin_date->format('Y-m-d')}}</span>

                {{$activity->title}}
            </li>
        @endforeach
    </ul>
</div>
