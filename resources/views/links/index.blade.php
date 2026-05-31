<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Os meus Links
            </h2>
            <a href="{{ route('links.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                + Novo Link
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @forelse($links as $link)
                <div class="bg-white shadow rounded-lg mb-4 p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        @if($link->icon)
                            <i class="{{ $link->icon }} text-2xl text-indigo-500"></i>
                        @endif
                        <div>
                            <p class="font-semibold text-gray-800">{{ $link->title }}</p>
                            <a href="{{ $link->url }}" target="_blank"
                               class="text-sm text-indigo-500 hover:underline">
                                {{ $link->url }}
                            </a>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('links.edit', $link) }}"
                           class="text-sm bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition">
                            Editar
                        </a>
                        <form action="{{ route('links.destroy', $link) }}" method="POST"
                              onsubmit="return confirm('Tens a certeza?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                Apagar
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-white shadow rounded-lg p-8 text-center text-gray-400">
                    Ainda não tens links. <a href="{{ route('links.create') }}" class="text-indigo-500 hover:underline">Adiciona um!</a>
                </div>
            @endforelse

        </div>
    </div>
</x-app-layout>
