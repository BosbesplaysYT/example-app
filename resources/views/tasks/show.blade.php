@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">{{ $task->name ?? 'Taak #' . $task->id }}</h1>
        <div class="flex gap-2">
            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Bewerk
            </a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline" onsubmit="return confirm('Weet je zeker?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Verwijder
                </button>
            </form>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Terug
            </a>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg p-8 max-w-2xl">
        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Project</h2>
            <p class="text-gray-600">
                <a href="{{ route('projects.show', $task->project->id) }}" class="text-blue-500 hover:underline">
                    {{ $task->project->name }}
                </a>
            </p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Beschrijving</h2>
            <p class="text-gray-600">{{ $task->description ?? 'Geen beschrijving' }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold text-gray-700">Aangemaakt op</h2>
            <p class="text-gray-600">{{ $task->created_at->format('d-m-Y H:i') }}</p>
        </div>
    </div>
</div>
@endsection