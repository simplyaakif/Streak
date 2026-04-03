@php
    $latest = $getRecord()->latestStatus();
    $statusKey = $latest['status'] ?? null;
    $label = $statusKey ? (\App\Models\OnlineRegistration::STATUS[$statusKey] ?? $statusKey) : null;
    $message = $latest['message'] ?? null;
    $updatedBy = isset($latest['updated_by']) ? (\App\Models\User::find($latest['updated_by'])?->name ?? 'Unknown') : null;
    $date = isset($latest['date']) ? \Carbon\Carbon::parse($latest['date'])->format('d M Y, h:i A') : null;

    $colorMap = [
        'Enrolled'  => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
        'Cancelled' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
        'Contacted' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
        'Rejected'  => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
        'Pending'   => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
    ];
    $badgeClass = $colorMap[$statusKey] ?? $colorMap['Pending'];
@endphp

<div class="flex flex-col items-center gap-0.5 py-1 text-center">
    @if($label)
        <div>
            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $badgeClass }}">
                {{ $label }}
            </span>
        </div>
    @else
        <span class="text-xs text-gray-400">—</span>
    @endif

    @if($message)
        <span class="text-xs text-gray-600 dark:text-gray-400">{{ $message }}</span>
    @endif

    @if($updatedBy)
        <span class="text-xs text-gray-500 dark:text-gray-500">{{ $updatedBy }}</span>
    @endif

    @if($date)
        <span class="text-xs text-gray-400 dark:text-gray-600">{{ $date }}</span>
    @endif
</div>
