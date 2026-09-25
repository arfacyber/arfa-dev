<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white tracking-tight">Kotak <span class="text-blue-500">Pesan Masuk</span></h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#111111] border border-[#262626] rounded-2xl overflow-hidden">
                <table class="w-full text-left text-slate-300">
                    <thead class="bg-[#0a0a0a] text-slate-400 text-sm uppercase">
                        <tr>
                            <th class="px-6 py-4">Nama & Email</th>
                            <th class="px-6 py-4">Pesan</th>
                            <th class="px-6 py-4">Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#262626]">
                        @forelse($contacts as $contact)
                        <tr class="hover:bg-[#1a1a1a] transition-colors">
                            <td class="px-6 py-4">
                                <p class="font-bold text-white">{{ $contact->name }}</p>
                                <p class="text-sm text-slate-400">{{ $contact->email }}</p>
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-pre-line">{{ $contact->message }}</td>
                            <td class="px-6 py-4 text-sm">{{ $contact->created_at->format('d M Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-10 text-center text-slate-500">Belum ada pesan masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">{{ $contacts->links() }}</div>
        </div>
    </div>
</x-app-layout>