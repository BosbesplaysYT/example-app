@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Projecten</h1>
        <a href="{{ route('projects.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Nieuw Project
        </a>
    </div>

    @if($projects->count() > 0)
    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="w-full border-collapse bg-white">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border p-3 text-left">ID</th>
                    <th class="border p-3 text-left">Naam</th>
                    <th class="border p-3 text-left">Beschrijving</th>
                    <th class="border p-3 text-left">Dagen</th>
                    <th class="border p-3 text-center">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr class="hover:bg-gray-100 border-b">
                    <td class="border p-3">{{ $project->id }}</td>
                    <td class="border p-3">{{ $project->name }}</td>
                    <td class="border p-3">{{ $project->description ?? 'Geen beschrijving' }}</td>
                    <td class="border p-3">{{ $project->days ?? '-' }}</td>
                    <td class="border p-3 text-center">
                        <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500 hover:underline">Bekijk</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="text-yellow-500 hover:underline ml-2">Bewerk</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline" onsubmit="return confirm('Weet je zeker?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Verwijder</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4">
        <p>Geen projecten gevonden. <a href="{{ route('projects.create') }}" class="underline">Maak er een aan</a></p>
    </div>
    @endif
</div>
@endsection