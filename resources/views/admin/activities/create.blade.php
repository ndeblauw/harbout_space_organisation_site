<x-site-layout>

    <form action="{{route('activities.store')}}" method="post" class="mb-16 flex">
        @csrf

        <div class="w-2/3">
            <x-form-text name="title" required/>
            <x-form-textarea name="description"/>
            <x-form-boolean name="visible"/>

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Create</button>
        </div>
    </form>

</x-site-layout>
