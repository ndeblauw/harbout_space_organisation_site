<div class="space-y-6 sm:space-y-5">
    <div class="sm:grid sm:grid-cols-6 sm:gap-4 sm:items-start sm:pt-5">
        @include('components.forms._label')
        <div class="mt-1 sm:mt-0 sm:col-span-5">
            <label>
                <input type="hidden" name="{{$name}}" value="0">
                <input type="checkbox" id="{{$id}}" name="{{$name}}" value="1"
                       class="focus:ring-indigo-500 h-4 w-4 text-blue-600 border-gray-300 rounded"
                       @if(old($name,$value)) checked @endif >
                {{ ($legend =='') ? 'Yes': $legend}}
            </label>
            @include('components.forms._errorandcomment')
        </div>
    </div>
</div>
