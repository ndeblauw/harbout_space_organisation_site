<div class="space-y-6 sm:space-y-5">
    <div class="sm:grid sm:grid-cols-6 sm:gap-4 sm:items-start sm:pt-5">
        @include('components.forms._label')
        <div class="mt-1 sm:mt-0 sm:col-span-5">
            <textarea
                name="{{ $name }}"
                id="{{ $id }}"
                rows="{{ $rows }}"
                placeholder="{!! $placeholder !!}"
                class="max-w-lg block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:max-w-lg sm:text-sm {{ $errors->first($name) ? 'border-red-300' : 'border-gray-300' }} rounded-md"
                {{ $required ? 'required' : '' }}
                {{$disabled}}
            >{{ old($name, $value) }}</textarea>
            @include('components.forms._errorandcomment')
        </div>
    </div>
</div>
