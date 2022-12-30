<?php $__env->startSection('content'); ?>
    <section class="section categories-main">
        <div class="container">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.delivery-information-controller', ['request' => $request])->html();
} elseif ($_instance->childHasBeenRendered('CE3OnEv')) {
    $componentId = $_instance->getRenderedChildComponentId('CE3OnEv');
    $componentTag = $_instance->getRenderedChildComponentTagName('CE3OnEv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CE3OnEv');
} else {
    $response = \Livewire\Livewire::mount('pages.delivery-information-controller', ['request' => $request]);
    $html = $response->html();
    $_instance->logRenderedChild('CE3OnEv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/mibox/resources/views/pages/page_9.blade.php ENDPATH**/ ?>