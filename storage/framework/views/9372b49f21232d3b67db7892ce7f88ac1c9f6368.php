<div>
    <div wire:ignore class="w-full">
        <?php if(isset($attributes['multiple'])): ?>
            <div id="<?php echo e($attributes['id']); ?>-btn-container" class="mb-3">
                <button type="button" class="btn btn-info btn-sm select-all-button"><?php echo e(trans('global.select_all')); ?></button>
                <button type="button" class="btn btn-info btn-sm deselect-all-button"><?php echo e(trans('global.deselect_all')); ?></button>
            </div>
        <?php endif; ?>
        <select class="select2 form-control" data-placeholder="<?php echo e(__('Select your option')); ?>" <?php echo e($attributes); ?>>
            <?php if(!isset($attributes['multiple'])): ?>
                <option></option>
            <?php endif; ?>
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener("livewire:load", () => {
    let el = $('#<?php echo e($attributes['id']); ?>')
    let buttonsId = '#<?php echo e($attributes['id']); ?>-btn-container'

    function initButtons() {
        $(buttonsId + ' .select-all-button').click(function (e) {
            el.val(_.map(el.find('option'), opt => $(opt).attr('value')))
            el.trigger('change')
        })

        $(buttonsId + ' .deselect-all-button').click(function (e) {
            el.val([])
            el.trigger('change')
        })
    }

    function initSelect () {
        initButtons()
        el.select2({
            placeholder: '<?php echo e(__('Select your option')); ?>',
            allowClear: !el.attr('required')
        })
    }

    initSelect()

    Livewire.hook('message.processed', (message, component) => {
        initSelect()
    });

    el.on('change', function (e) {
        let data = $(this).select2("val")
        if (data === "") {
            data = null
        }
window.livewire.find('<?php echo e($_instance->id); ?>').set('<?php echo e($attributes['wire:model']); ?>', data)
    });
});
    </script>
<?php $__env->stopPush(); ?><?php /**PATH E:\Aakif Work\Systems Developments\streakz\resources\views/components/select-list.blade.php ENDPATH**/ ?>