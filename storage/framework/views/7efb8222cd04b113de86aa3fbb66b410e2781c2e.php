<div wire:ignore>
    <div class="flatpickr flatpickr-<?php echo e($attributes['id']); ?> relative">
        <?php if(!isset($attributes['required'])): ?>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="clear-<?php echo e($attributes['id']); ?>" type="button" class="text-rose-600 w-10" data-clear>
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
        <?php endif; ?>


        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.common.data-input-text','data' => ['attributes' => $attributes,'dataInput' => true]]); ?>
<?php $component->withName('common.data-input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'data-input' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener("livewire:load", () => {
    function update(value) {
        let el = document.getElementById('clear-<?php echo e($attributes['id']); ?>')

        if (value === '') {
            value = null

            if (el !== null) {
                el.classList.add('invisible')
            }
        } else if (el !== null) {
            el.classList.remove('invisible')
        }

window.livewire.find('<?php echo e($_instance->id); ?>').set('<?php echo e($attributes['wire:model']); ?>', value)
    }

<?php if($attributes['picker'] === 'date'): ?>
        let el = flatpickr('.flatpickr-<?php echo e($attributes['id']); ?>', {
            dateFormat: "<?php echo e(config('project.flatpickr_date_format')); ?>",
            wrap: true,
            onChange: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            },
            onReady: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            }
        })
<?php elseif($attributes['picker'] === 'time'): ?>
        let el = flatpickr('.flatpickr-<?php echo e($attributes['id']); ?>', {
            enableTime: true,
            // enableSeconds: true,
            noCalendar: true,
            time_24hr: true,
            wrap: true,
            dateFormat: "<?php echo e(config('project.flatpickr_time_format')); ?>",
            onChange: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            },
            onReady: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            }
        })
<?php else: ?>
        let el = flatpickr('.flatpickr-<?php echo e($attributes['id']); ?>', {
            enableTime: true,
            time_24hr: true,
            wrap: true,
            // enableSeconds: true,
            dateFormat: "<?php echo e(config('project.flatpickr_datetime_format')); ?>",
            onChange: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            },
            onReady: (SelectedDates, DateStr, instance) => {
                update(DateStr)
            }
        })
<?php endif; ?>
});
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/components/date-picker.blade.php ENDPATH**/ ?>