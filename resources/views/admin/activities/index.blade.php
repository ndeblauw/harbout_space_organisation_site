<x-site-layout withToastr>

    <div class="flex flex-col my-16 max-w-4xl mx-auto">

        @if(session()->has('success'))
            <span x-data="notification=!notification"></span>
        @endif

        <div class="flex justify-between mb-2 pr-6">
            <h2 class="text-xl font-semibold">Activities</h2>
            <a href="{{route('activities.create')}}" class="text-green-600 hover:text-green-900">Create new</a>
            <div>{{ $activities->links() }}</div>
        </div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Visible
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($activities as $activity)
                                <tr class="@if($loop->even) bg-gray-50 @else bg-white @endif">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{$activity->title}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ route('activities.toggle', ['activity' => $activity]) }}">
                                        {{ $activity->visible ? 'Yes' : 'No' }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{route('activities.edit', ['activity' => $activity])}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-site-layout>
