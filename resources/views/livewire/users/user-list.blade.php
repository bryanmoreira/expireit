<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right">
        <thead class="text-xs uppercase border-b text-white dark:text-white-500">
        <tr>
            <th scope="col" class="px-6 py-3">
                Id
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Created At
            </th>
            <th scope="col" class="px-6 py-3">
                Updated At
            </th>
            <th scope="col" class="px-6 py-3">
                Active
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="border-b text-gray-300 whitespace-nowrap dark:text-gray-300">
                <th scope="row" class="px-6 py-4 font-medium">
                    {{ $user->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->created_at }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->updated_at }}
                </td>
                <td class="px-6 py-4">
                    <flux:switch wire:click="toggleUserActivity({{ $user->id }})" />
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
