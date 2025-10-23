<div {{$attributes}} class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
    <table class="min-w-full divide-y divide-slate-200">
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-slate-200">
            {{ $body }}
        </tbody>
    </table>
</div>
