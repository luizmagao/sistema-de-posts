@extends('welcome')

@section('conteudo-das-visoes')
    <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <!-- Título da Página -->
        <h1 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Login</h1>

        <!-- Formulário para Adicionar Categoria -->
        <form action="{{ route('login_access') }}" method="POST">
            @csrf
            @method('POST')

            <!-- Campo de Nome da Categoria -->
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                <input type="text" id="email" name="email" placeholder="Digite seu email..."
                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                <input type="text" id="password" name="password" placeholder="Digite sua senha..."
                    class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>

            <!-- Botões de Ação -->
            <div class="flex justify-end space-x-2">

                <!-- Botão de Salvar -->
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    Entrar no sistema
                </button>
            </div>
        </form>
    </div>
@endsection
