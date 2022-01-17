<x-site-layout>

    <form action="{{route('activities.update', ['activity' => $activity])}}" method="post" class="mb-16 flex">
        @csrf
        @method('put')

        <div class="w-2/3">
            <x-form-text name="title" :value="$activity->title" required/>
            <x-form-textarea name="description" :value="$activity->description"/>
            <x-form-boolean name="visible" :value="$activity->visible"/>

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Save</button>
        </div>
    </form>

</x-site-layout>
