@extends('welcome')


@section('conteudo-das-visoes')
    <ul
        class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        @foreach ($categories as $category)
            <li class="flex items-center justify-between w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                <!-- Nome da Categoria -->
                <span>{{ $category->name }}</span>

                <!-- Ações: Editar e Excluir -->
                <div class="flex space-x-2">
                    <!-- Ícone de Link para Editar -->
                    <a href="{{ route('categories.edit', $category->id) }}"
                        class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>

                    <!-- Botão para Excluir -->
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
