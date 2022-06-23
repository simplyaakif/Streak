<div>
<div class="flex justify-center gap-2 flex-wrap py-2">
    @forelse($getState() as $course)
        <div class="bg-cyan-600 text-xs rounded-full text-white px-2 py-1">{{$course->title}}</div>
    @empty
        <span class="text-sm text-gray-500">
        No Course Selected
        </span>
    @endforelse
</div>
</div>
