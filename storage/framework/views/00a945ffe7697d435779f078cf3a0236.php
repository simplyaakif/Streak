<nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto"
     aria-label="Sidebar">
    <div class="px-2 space-y-1">
        <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['can' => 'dashboard_access','label' => 'Dashboard','route' => ''.e(route('admin.home')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'dashboard_access','label' => 'Dashboard','route' => ''.e(route('admin.home')).'']); ?>
            <?php if (isset($component)) { $__componentOriginal4710407deeab122b4cc56ae776da2d23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4710407deeab122b4cc56ae776da2d23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.home','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4710407deeab122b4cc56ae776da2d23)): ?>
<?php $attributes = $__attributesOriginal4710407deeab122b4cc56ae776da2d23; ?>
<?php unset($__attributesOriginal4710407deeab122b4cc56ae776da2d23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4710407deeab122b4cc56ae776da2d23)): ?>
<?php $component = $__componentOriginal4710407deeab122b4cc56ae776da2d23; ?>
<?php unset($__componentOriginal4710407deeab122b4cc56ae776da2d23); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

        
        
        
        
        
        
        
        

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'query_management_access','label' => 'Query Management']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_management_access','label' => 'Query Management']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal41af28f11b22eb5ddbef0e0ccfba8065 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal41af28f11b22eb5ddbef0e0ccfba8065 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.user-edit','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.user-edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal41af28f11b22eb5ddbef0e0ccfba8065)): ?>
<?php $attributes = $__attributesOriginal41af28f11b22eb5ddbef0e0ccfba8065; ?>
<?php unset($__attributesOriginal41af28f11b22eb5ddbef0e0ccfba8065); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41af28f11b22eb5ddbef0e0ccfba8065)): ?>
<?php $component = $__componentOriginal41af28f11b22eb5ddbef0e0ccfba8065; ?>
<?php unset($__componentOriginal41af28f11b22eb5ddbef0e0ccfba8065); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'query_access','label' => 'Queries Status','route' => ''.e(route('admin.queries.dashboard')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_access','label' => 'Queries Status','route' => ''.e(route('admin.queries.dashboard')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'query_follow','label' => 'Follow Ups','route' => ''.e(route('admin.queries.follow')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_follow','label' => 'Follow Ups','route' => ''.e(route('admin.queries.follow')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'query_access','label' => 'All Queries','route' => ''.e(route('admin.queries.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_access','label' => 'All Queries','route' => ''.e(route('admin.queries.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'query_create','label' => 'Create Query','route' => ''.e(route('admin.queries.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'query_create','label' => 'Create Query','route' => ''.e(route('admin.queries.create')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['can' => 'online_registration_access','label' => 'Online Registration','route' => ''.e(route('admin.online-registration.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'online_registration_access','label' => 'Online Registration','route' => ''.e(route('admin.online-registration.index')).'']); ?>
            <?php if (isset($component)) { $__componentOriginal2a4c8b6d827f7e25eeb3d6f8231455be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a4c8b6d827f7e25eeb3d6f8231455be = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.arrow-in-box','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.arrow-in-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a4c8b6d827f7e25eeb3d6f8231455be)): ?>
<?php $attributes = $__attributesOriginal2a4c8b6d827f7e25eeb3d6f8231455be; ?>
<?php unset($__attributesOriginal2a4c8b6d827f7e25eeb3d6f8231455be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a4c8b6d827f7e25eeb3d6f8231455be)): ?>
<?php $component = $__componentOriginal2a4c8b6d827f7e25eeb3d6f8231455be; ?>
<?php unset($__componentOriginal2a4c8b6d827f7e25eeb3d6f8231455be); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'student_management_access','label' => 'Student Management','route' => ''.e(route('admin.students.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'student_management_access','label' => 'Student Management','route' => ''.e(route('admin.students.index')).'']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal46848001facf1cdb1a84c118cea2e25d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46848001facf1cdb1a84c118cea2e25d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.users','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46848001facf1cdb1a84c118cea2e25d)): ?>
<?php $attributes = $__attributesOriginal46848001facf1cdb1a84c118cea2e25d; ?>
<?php unset($__attributesOriginal46848001facf1cdb1a84c118cea2e25d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46848001facf1cdb1a84c118cea2e25d)): ?>
<?php $component = $__componentOriginal46848001facf1cdb1a84c118cea2e25d; ?>
<?php unset($__componentOriginal46848001facf1cdb1a84c118cea2e25d); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['route' => ''.e(route('admin.students.dashboard')).'','can' => 'student_access','label' => 'Student Status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('admin.students.dashboard')).'','can' => 'student_access','label' => 'Student Status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Classrooms','route' => route('admin.students.classrooms')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Classrooms','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.students.classrooms'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'student_access','label' => 'All Admissions','route' => ''.e(route('admin.students.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'student_access','label' => 'All Admissions','route' => ''.e(route('admin.students.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'student_create','label' => 'Create Admission','route' => ''.e(route('admin.students.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'student_create','label' => 'Create Admission','route' => ''.e(route('admin.students.create')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'card_create','label' => 'Generate Student Card','route' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'card_create','label' => 'Generate Student Card','route' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'certificate_create','label' => 'Generate Certificate','route' => route('admin.certificates.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'certificate_create','label' => 'Generate Certificate','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.certificates.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'academic_access','label' => 'Academic Management','route' => ''.e(route('admin.students.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'academic_access','label' => 'Academic Management','route' => ''.e(route('admin.students.index')).'']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal285eddc9278dae58281aa961bf08a625 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal285eddc9278dae58281aa961bf08a625 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.book','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.book'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal285eddc9278dae58281aa961bf08a625)): ?>
<?php $attributes = $__attributesOriginal285eddc9278dae58281aa961bf08a625; ?>
<?php unset($__attributesOriginal285eddc9278dae58281aa961bf08a625); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal285eddc9278dae58281aa961bf08a625)): ?>
<?php $component = $__componentOriginal285eddc9278dae58281aa961bf08a625; ?>
<?php unset($__componentOriginal285eddc9278dae58281aa961bf08a625); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'academic_access','label' => 'Academics Status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'academic_access','label' => 'Academics Status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'department_access','label' => 'Departments','route' => ''.e(route('admin.departments.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'department_access','label' => 'Departments','route' => ''.e(route('admin.departments.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'course_access','label' => 'Manage Courses','route' => ''.e(route('admin.courses.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'course_access','label' => 'Manage Courses','route' => ''.e(route('admin.courses.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'batch_access','label' => 'Manage Batches','route' => ''.e(route('admin.batches.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'batch_access','label' => 'Manage Batches','route' => ''.e(route('admin.batches.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Batch Attendances','route' => ''.e(route('admin.student-attendances')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Batch Attendances','route' => ''.e(route('admin.student-attendances')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'lesson_access','label' => 'Lesson Planner','route' => ''.e(route('admin.lessons.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'lesson_access','label' => 'Lesson Planner','route' => ''.e(route('admin.lessons.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'home_task_access','label' => 'Home Work','route' => ''.e(route('admin.home-task.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'home_task_access','label' => 'Home Work','route' => ''.e(route('admin.home-task.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'notifications_management_access','label' => 'Notifications']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'notifications_management_access','label' => 'Notifications']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal4525404018e5b2e94f2d1e4dc53d4ad7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4525404018e5b2e94f2d1e4dc53d4ad7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.bell','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.bell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4525404018e5b2e94f2d1e4dc53d4ad7)): ?>
<?php $attributes = $__attributesOriginal4525404018e5b2e94f2d1e4dc53d4ad7; ?>
<?php unset($__attributesOriginal4525404018e5b2e94f2d1e4dc53d4ad7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4525404018e5b2e94f2d1e4dc53d4ad7)): ?>
<?php $component = $__componentOriginal4525404018e5b2e94f2d1e4dc53d4ad7; ?>
<?php unset($__componentOriginal4525404018e5b2e94f2d1e4dc53d4ad7); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Notifications Status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Notifications Status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Send SMS or Email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Send SMS or Email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Search Records']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Search Records']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Sms Templates']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Sms Templates']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Email Templates']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email Templates']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'finance_management_access','label' => 'Finance Management','route' => ''.e(route('admin.students.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'finance_management_access','label' => 'Finance Management','route' => ''.e(route('admin.students.index')).'']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal005fcf360e56b102969ccf1d4475f543 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal005fcf360e56b102969ccf1d4475f543 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.money','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.money'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal005fcf360e56b102969ccf1d4475f543)): ?>
<?php $attributes = $__attributesOriginal005fcf360e56b102969ccf1d4475f543; ?>
<?php unset($__attributesOriginal005fcf360e56b102969ccf1d4475f543); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal005fcf360e56b102969ccf1d4475f543)): ?>
<?php $component = $__componentOriginal005fcf360e56b102969ccf1d4475f543; ?>
<?php unset($__componentOriginal005fcf360e56b102969ccf1d4475f543); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'finance_access','route' => route('admin.finance.dashboard'),'label' => 'Finance Status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'finance_access','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.finance.dashboard')),'label' => 'Finance Status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Recoveries','route' => route('admin.recovery.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Recoveries','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.recovery.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>


            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'income_access','label' => 'Incomes','route' => ''.e(route('admin.incomes.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'income_access','label' => 'Incomes','route' => ''.e(route('admin.incomes.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'expense_access','label' => 'Expenses','route' => ''.e(route('admin.expenses.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'expense_access','label' => 'Expenses','route' => ''.e(route('admin.expenses.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Expense Vendors','route' => ''.e(route('admin.vendors.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Expense Vendors','route' => ''.e(route('admin.vendors.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Accounts','route' => ''.e(route('admin.accounts.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Accounts','route' => ''.e(route('admin.accounts.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'employee_management_access','label' => 'Employee Management']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'employee_management_access','label' => 'Employee Management']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal1f2d3907fdc2430f54a25bd14ebd6a75 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f2d3907fdc2430f54a25bd14ebd6a75 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.id-card','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.id-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f2d3907fdc2430f54a25bd14ebd6a75)): ?>
<?php $attributes = $__attributesOriginal1f2d3907fdc2430f54a25bd14ebd6a75; ?>
<?php unset($__attributesOriginal1f2d3907fdc2430f54a25bd14ebd6a75); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f2d3907fdc2430f54a25bd14ebd6a75)): ?>
<?php $component = $__componentOriginal1f2d3907fdc2430f54a25bd14ebd6a75; ?>
<?php unset($__componentOriginal1f2d3907fdc2430f54a25bd14ebd6a75); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'employee_access','label' => 'Manage Employee','route' => ''.e(route('admin.employees.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'employee_access','label' => 'Manage Employee','route' => ''.e(route('admin.employees.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Employee Attendance']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Employee Attendance']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'task_management_access','label' => 'Task Management']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'task_management_access','label' => 'Task Management']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal71db766e9accf962d4b8a87169911fa1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71db766e9accf962d4b8a87169911fa1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.task-square','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.task-square'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71db766e9accf962d4b8a87169911fa1)): ?>
<?php $attributes = $__attributesOriginal71db766e9accf962d4b8a87169911fa1; ?>
<?php unset($__attributesOriginal71db766e9accf962d4b8a87169911fa1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71db766e9accf962d4b8a87169911fa1)): ?>
<?php $component = $__componentOriginal71db766e9accf962d4b8a87169911fa1; ?>
<?php unset($__componentOriginal71db766e9accf962d4b8a87169911fa1); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Statuses','route' => route('admin.task-statuses.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Statuses','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.task-statuses.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Tags','route' => route('admin.task-tags.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tags','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.task-tags.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Tasks','route' => route('admin.tasks.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tasks','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.tasks.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Calendar','route' => route('admin.task-calendars.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Calendar','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.task-calendars.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['label' => 'Reports','route' => ''.e(route('admin.reports.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Reports','route' => ''.e(route('admin.reports.index')).'']); ?>
                                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"
                                     x-description="Heroicon name: outline/document-report" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['can' => 'system_calendar_access','label' => 'Institution Calendar','route' => ''.e(route('admin.system-calendars.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'system_calendar_access','label' => 'Institution Calendar','route' => ''.e(route('admin.system-calendars.index')).'']); ?>
            <?php if (isset($component)) { $__componentOriginalac5ce4cb0e7217f92544b8be719adb6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac5ce4cb0e7217f92544b8be719adb6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.calendar','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.calendar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac5ce4cb0e7217f92544b8be719adb6f)): ?>
<?php $attributes = $__attributesOriginalac5ce4cb0e7217f92544b8be719adb6f; ?>
<?php unset($__attributesOriginalac5ce4cb0e7217f92544b8be719adb6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac5ce4cb0e7217f92544b8be719adb6f)): ?>
<?php $component = $__componentOriginalac5ce4cb0e7217f92544b8be719adb6f; ?>
<?php unset($__componentOriginalac5ce4cb0e7217f92544b8be719adb6f); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'communication_access','label' => 'Communication Hub']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'communication_access','label' => 'Communication Hub']); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal27b618730ba397b3f41e65dbe920c9e6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27b618730ba397b3f41e65dbe920c9e6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.message','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27b618730ba397b3f41e65dbe920c9e6)): ?>
<?php $attributes = $__attributesOriginal27b618730ba397b3f41e65dbe920c9e6; ?>
<?php unset($__attributesOriginal27b618730ba397b3f41e65dbe920c9e6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27b618730ba397b3f41e65dbe920c9e6)): ?>
<?php $component = $__componentOriginal27b618730ba397b3f41e65dbe920c9e6; ?>
<?php unset($__componentOriginal27b618730ba397b3f41e65dbe920c9e6); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['label' => 'Sms Center','route' => route('admin.sms.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Sms Center','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.sms.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['label' => 'Useful Links','route' => ''.e(route('admin.useful-links')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Useful Links','route' => ''.e(route('admin.useful-links')).'']); ?>
            <?php if (isset($component)) { $__componentOriginal167d49e5be30319451e9d24e17d8a630 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal167d49e5be30319451e9d24e17d8a630 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.add','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal167d49e5be30319451e9d24e17d8a630)): ?>
<?php $attributes = $__attributesOriginal167d49e5be30319451e9d24e17d8a630; ?>
<?php unset($__attributesOriginal167d49e5be30319451e9d24e17d8a630); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal167d49e5be30319451e9d24e17d8a630)): ?>
<?php $component = $__componentOriginal167d49e5be30319451e9d24e17d8a630; ?>
<?php unset($__componentOriginal167d49e5be30319451e9d24e17d8a630); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
    </div>

    <div class="mt-6 pt-6">
        <div class="px-2 space-y-1">
            <?php if (isset($component)) { $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-item','data' => ['can' => 'user_management_access','label' => 'User Management']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'user_management_access','label' => 'User Management']); ?>
                 <?php $__env->slot('icon', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal6c15af6ae3c677cdbfa07b805c854aed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c15af6ae3c677cdbfa07b805c854aed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.people','data' => ['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.people'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 flex-shrink-0 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c15af6ae3c677cdbfa07b805c854aed)): ?>
<?php $attributes = $__attributesOriginal6c15af6ae3c677cdbfa07b805c854aed; ?>
<?php unset($__attributesOriginal6c15af6ae3c677cdbfa07b805c854aed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c15af6ae3c677cdbfa07b805c854aed)): ?>
<?php $component = $__componentOriginal6c15af6ae3c677cdbfa07b805c854aed; ?>
<?php unset($__componentOriginal6c15af6ae3c677cdbfa07b805c854aed); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
                <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'user_access','label' => 'Users','route' => ''.e(route('admin.users.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'user_access','label' => 'Users','route' => ''.e(route('admin.users.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'role_access','label' => 'Roles','route' => ''.e(route('admin.roles.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'role_access','label' => 'Roles','route' => ''.e(route('admin.roles.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'permission_access','label' => 'Permissions','route' => ''.e(route('admin.permissions.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'permission_access','label' => 'Permissions','route' => ''.e(route('admin.permissions.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal763967b47aaa2b7bf91b99f9069775b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-dd-nav-subitem','data' => ['can' => 'audit_log_access','label' => 'Audit','route' => ''.e(route('admin.audit-logs.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-dd-nav-subitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'audit_log_access','label' => 'Audit','route' => ''.e(route('admin.audit-logs.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $attributes = $__attributesOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__attributesOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9)): ?>
<?php $component = $__componentOriginal763967b47aaa2b7bf91b99f9069775b9; ?>
<?php unset($__componentOriginal763967b47aaa2b7bf91b99f9069775b9); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $attributes = $__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__attributesOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b)): ?>
<?php $component = $__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b; ?>
<?php unset($__componentOriginalc13494ca295903b7a0e193b3fc3a3d4b); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['can' => 'setting_access','label' => 'Settings','route' => ''.e(route('admin.settings.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'setting_access','label' => 'Settings','route' => ''.e(route('admin.settings.index')).'']); ?>
                <?php if (isset($component)) { $__componentOriginald90eb1279e7a54ff2a3efa57b588be1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald90eb1279e7a54ff2a3efa57b588be1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.gear','data' => ['class' => 'mr-3 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.gear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald90eb1279e7a54ff2a3efa57b588be1e)): ?>
<?php $attributes = $__attributesOriginald90eb1279e7a54ff2a3efa57b588be1e; ?>
<?php unset($__attributesOriginald90eb1279e7a54ff2a3efa57b588be1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald90eb1279e7a54ff2a3efa57b588be1e)): ?>
<?php $component = $__componentOriginald90eb1279e7a54ff2a3efa57b588be1e; ?>
<?php unset($__componentOriginald90eb1279e7a54ff2a3efa57b588be1e); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal3588061a3d5f215240ed85cfc5421d1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.sidebar-nv-item','data' => ['can' => 'auth_profile_edit','label' => 'Profile','route' => ''.e(route('profile.show')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.sidebar-nv-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['can' => 'auth_profile_edit','label' => 'Profile','route' => ''.e(route('profile.show')).'']); ?>
                <?php if (isset($component)) { $__componentOriginald5bf95aa182035908f29e85961a938de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5bf95aa182035908f29e85961a938de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.profile','data' => ['class' => 'mr-3 h-6 w-6 text-cyan-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-3 h-6 w-6 text-cyan-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5bf95aa182035908f29e85961a938de)): ?>
<?php $attributes = $__attributesOriginald5bf95aa182035908f29e85961a938de; ?>
<?php unset($__attributesOriginald5bf95aa182035908f29e85961a938de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5bf95aa182035908f29e85961a938de)): ?>
<?php $component = $__componentOriginald5bf95aa182035908f29e85961a938de; ?>
<?php unset($__componentOriginald5bf95aa182035908f29e85961a938de); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $attributes = $__attributesOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__attributesOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c)): ?>
<?php $component = $__componentOriginal3588061a3d5f215240ed85cfc5421d1c; ?>
<?php unset($__componentOriginal3588061a3d5f215240ed85cfc5421d1c); ?>
<?php endif; ?>

        </div>
    </div>
</nav>
<?php /**PATH /Users/muhammadaakifraza/Herd/Portal/resources/views/components/admin/menu.blade.php ENDPATH**/ ?>