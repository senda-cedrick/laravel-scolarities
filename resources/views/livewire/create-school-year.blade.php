<div class="p-2 bg-white shadow-sm">
    <form method="POST" wire:submit.prevent="store">
        @csrf
        @method('POST')
        @if (Session::get('error'))
        <div class="p-4 border-red-500 bg-red-600 animate-bounce text-white">{{Session::get('error')}}</div>
        @endif
        <div class="p-5">
    <x-jet-label value={{__('Libelle de lanneé scolaire')}}/>
            <input type="text" class="block mt-1 rounded-md border-gray-300 w-full @error('libelle')
            border-red-500 bg-red-100 animate-bounce
            @enderror" wire:model='libelle'>
            @error('libelle')
            <div class="text text-red-500 mt-1">*le champ libelle est requis </div>
            @enderror
        </div>
       <div class="p-5 flex justify-between items-center">
        <button class="bg-red-600 p-3 rounded-sm text-white text-sm">Annuler</button>
        <button class="bg-green-600 p-3 rounded-sm text-white text-sm" type="submit">Ajouter</button>
       </div>
    </form>
</div>

