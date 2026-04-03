@php
    $history = $record->status ?? [];
    // Normalise legacy single-object format
    if (!empty($history) && !isset($history[0])) {
        $history = [$history];
    }
    $history = array_reverse($history); // newest first

    $colorMap = [
        'Enrolled'  => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
        'Cancelled' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
        'Contacted' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
        'Rejected'  => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
        'Pending'   => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
    ];
@endphp

@if(empty($history))
    <p class="text-sm text-gray-500 text-center py-4">No status history available.</p>
@else
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b border-gray-200 dark:border-gray-700 text-xs text-gray-500 dark:text-gray-400 uppercase">
                    <th class="py-2 px-3">#</th>
                    <th class="py-2 px-3">Status</th>
                    <th class="py-2 px-3">Message</th>
                    <th class="py-2 px-3">Updated By</th>
                    <th class="py-2 px-3">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($history as $i => $entry)
                    @php
                        $statusKey   = $entry['status'] ?? null;
                        $label       = $statusKey ? (\App\Models\OnlineRegistration::STATUS[$statusKey] ?? $statusKey) : '—';
                        $badgeClass  = $colorMap[$statusKey] ?? $colorMap['Pending'];
                        $message     = $entry['message'] ?? '—';
                        $updatedBy   = isset($entry['updated_by']) ? (\App\Models\User::find($entry['updated_by'])?->name ?? 'Unknown') : '—';
                        $date        = isset($entry['date']) ? \Carbon\Carbon::parse($entry['date'])->format('d M Y, h:i A') : '—';
                    @endphp
                    <tr class="border-b border-gray-100 dark:border-gray-800 {{ $i === 0 ? 'bg-gray-50 dark:bg-gray-800/50' : '' }}">
                        <td class="py-2 px-3 text-gray-400 text-xs">{{ $i + 1 }}</td>
                        <td class="py-2 px-3">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $badgeClass }}">
                                {{ $label }}
                            </span>
                        </td>
                        <td class="py-2 px-3 text-gray-600 dark:text-gray-400">{{ $message }}</td>
                        <td class="py-2 px-3 text-gray-600 dark:text-gray-400">{{ $updatedBy }}</td>
                        <td class="py-2 px-3 text-gray-500 dark:text-gray-500 whitespace-nowrap">{{ $date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
