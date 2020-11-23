<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <a href="{{ route("generate-pdf") }}" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 ml-3">Get CV</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex-shrink-0 h-40 w-40 mb-5">
                        <img class="h-40 w-40 rounded-full" src="{{ auth()->user()->profile_photo_path ? (env("APP_URL") . "/storage/" . auth()->user()->profile_photo_path) : ("https://ui-avatars.com/api/?name=" . auth()->user()->name . "&color=7F9CF5&background=EBF4FF&size=200") }}" alt="{{ auth()->user()->name }}">
                    </div>
                    <table class="border-collapse border border-gray-800 w-full">
                        <tr class="border border-gray-600">
                            <th class="border border-gray-600 p-2">Name</th>
                            <td class="p-2">{{ auth()->user()->name }}</td>
                        </tr>
                        <tr class="border border-gray-600">
                            <th class="border border-gray-600 p-2">Email</th>
                            <td class="p-2">{{ auth()->user()->email }}</td>
                        </tr>
                        <tr class="border border-gray-600">
                            <th class="border border-gray-600 p-2">About</th>
                            <td class="p-2">{{ auth()->user()->about }}</td>
                        </tr>
                        <tr class="border border-gray-600">
                            <th class="border border-gray-600 p-2">Skills</th>
                            <td class="p-2">{{ auth()->user()->skills }}</td>
                        </tr>
                        <tr class="border border-gray-600">
                            <th class="border border-gray-600 p-2">Experience</th>
                            <td class="p-2">{{ auth()->user()->experience }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
