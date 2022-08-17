<?php if(filled($brand = config('filament.brand'))): ?>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'text-xl font-bold tracking-tight filament-brand',
        'dark:text-white' => config('filament.dark_mode'),
    ]) ?>">
        <?php echo e(\Illuminate\Support\Str::of($brand)
                ->snake()
                ->upper()
                ->explode('_')
                ->map(fn (string $string) => \Illuminate\Support\Str::substr($string, 0, 1))
                ->take(2)
                ->implode('')); ?>

    </div>
<?php endif; ?>
<?php /**PATH F:\Aakif Work\Systems Developments\streakz\vendor\filament\filament\src\/../resources/views/components/brand-icon.blade.php ENDPATH**/ ?>