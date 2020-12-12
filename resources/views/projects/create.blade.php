<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/projects">
                        @csrf
                        <div class="field">
                            <label for="title">Title</label>
                            <input type="text" name="title">
                        </div>

                        <div class="field">
                            <label for="description">description</label>
                            <textarea name="description"></textarea>
                        </div>

                        <button type="submit">Create Project</button>
                        <a href="/projects/">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
