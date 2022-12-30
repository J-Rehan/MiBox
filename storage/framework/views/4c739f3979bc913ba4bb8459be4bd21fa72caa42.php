<?php $__env->startSection('content'); ?>
    <section class="section unitbox-main-start">
        <div class="container">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.home', ['request' => $request,'type' => $request->type??1])->html();
} elseif ($_instance->childHasBeenRendered('Gw0iy67')) {
    $componentId = $_instance->getRenderedChildComponentId('Gw0iy67');
    $componentTag = $_instance->getRenderedChildComponentTagName('Gw0iy67');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Gw0iy67');
} else {
    $response = \Livewire\Livewire::mount('pages.home', ['request' => $request,'type' => $request->type??1]);
    $html = $response->html();
    $_instance->logRenderedChild('Gw0iy67', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/mibox/resources/views/pages/page_4.blade.php ENDPATH**/ ?>