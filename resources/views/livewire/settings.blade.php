<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        {{-- titre et button  --}}
        <div class="flex justify-between items-center">
            <h4>Liste des Années Scolaires</h4>
            <a href="{{route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white"> Nouvelle Année Scolaire</a>

        </div>
        <div class="flex flex-col">
            {{-- message qui apparait apres une opération --}}
            <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">
             lorem ipsum.
            </div>
            @if (Session::get('succes'))
            <div class="p-4 border-red-500 bg-green-500 animate-bounce text-white">{{Session::get('success')}}</div>
            @endif
        {{-- styliser le tableau  --}}
        <div class="overflow-x-auto">
            <div class="py-4 inline-block min-w-full">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-50">
                        <tr>
                            <th class="text-sm font-medium text-gray-900 px-6 py-6">Id</th>
                            <th class="text-sm font-medium text-gray-900 px-6 py-6">Année Scolaire</th>
                            <th class="text-sm font-medium text-gray-900 px-6 py-6">Statut</th>
                            <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schoolYearList as $item)
                        <tr class="border-b-2 border-gray-100">
                            <td class="text-sm font-medium text-gray-900 px-6 py-6">{{$item->id }}</td>
                            <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->school_year }}</td>
                            <td class="text-sm font-medium text-gray-900 px-6 py-6">
                            @if ( $item->active>=1)
                            <span class="p-3 bg-green-600 text-white rounded-sm">Actif</span>
                             @else
                             <span class="p-3 bg-red-600 text-white rounded-sm" >Inactif</span>
                            @endif
                            </td>
                            <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                @if ($item->active>=1)
                                <button class="p-2 text-white bg-red-500 text-sm rounded-sm">Rende Inactif</button>
                                @else
                                <button class="p-2 text-white bg-green-500 text-sm rounded-sm">Rende Actif</button>

                                @endif
                            </td>
                        </tr>
                        @empty

                        @endforelse


                    </tbody>

                </table>
                {{-- pagination --}} 
                <div class="mt-3">
                    {{ $schoolYearList->links() }}
                </div>

            </div>
            </div>

        </div>
        </div>
    </div>

</div>
