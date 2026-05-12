@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">{{ $project->name }}</h1>
        <div class="flex gap-2">
            <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Bewerk
            </a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Weet je zeker?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Verwijder
                </button>
            </form>
            <a href="{{ route('projects.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Terug
            </a>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg p-8 max-w-2xl">
        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Beschrijving</h2>
            <p class="text-gray-600">{{ $project->description ?? 'Geen beschrijving' }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Aantal Dagen</h2>
            <p class="text-gray-600">{{ $project->days ?? '-' }} dagen</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Aangemaakt op</h2>
            <p class="text-gray-600">{{ $project->created_at->format('d-m-Y H:i') }}</p>
        </div>

        @if($project->tasks->count() > 0)
        <div class="mt-8 pt-8 border-t">
            <h2 class="text-2xl font-bold mb-4">Taken ({{ $project->tasks->count() }})</h2>
            <ul class="space-y-2">
                @foreach($project->tasks as $task)
                <li class="bg-gray-100 p-3 rounded">
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline">
                        {{ $task->name ?? 'Taak #' . $task->id }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection