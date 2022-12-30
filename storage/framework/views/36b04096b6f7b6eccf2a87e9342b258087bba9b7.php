<?php $__env->startSection('content'); ?>
<section class="section categories-main">
  <div class="container">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pages.add-on', ['request' => $request,'type' => $request->type??1])->html();
} elseif ($_instance->childHasBeenRendered('klnbPtI')) {
    $componentId = $_instance->getRenderedChildComponentId('klnbPtI');
    $componentTag = $_instance->getRenderedChildComponentTagName('klnbPtI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('klnbPtI');
} else {
    $response = \Livewire\Livewire::mount('pages.add-on', ['request' => $request,'type' => $request->type??1]);
    $html = $response->html();
    $_instance->logRenderedChild('klnbPtI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/mibox/resources/views/pages/page_5.blade.php ENDPATH**/ ?>