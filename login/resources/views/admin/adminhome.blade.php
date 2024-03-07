<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AdminDashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>
        </div>
    </div>
    <div> 
        <table>
            <tr>
                <th>nanme</th>
            </tr>
            <tr>
                <td>Lisel Likona</td>
            </tr>
        </table>
    </div>
</x-app-layout>
