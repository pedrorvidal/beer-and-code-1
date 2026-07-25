<x-app-layout>
    <x-slot name="header">
        <h3>HEADER DA COISA</h3>
    </x-slot>
    <ol class="text-white">
        <li>Nome: {{ auth()->user()->name }}</li>
        <li>Documento: {{ auth()->user()->client?->document ?? 'sem cliente vinculado' }}</li>
        <li>Status da assinatura: {{}}</li>
    </ol>
</x-app-layout>
