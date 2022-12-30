<div>
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="unit-box-main">
                <?php $__currentLoopData = $boxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boxe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    
                    <div class="unitbox">
                        <div class="unitbox-data">
                            <div class="unitbox-left unitbox-w">
                                <div class="unitbox-header d-flex align-items-center">
                                    <h4 style="min-width: 160px;"><?php echo e($boxe->size); ?></h4>
                                    <?php if($boxe->price == 209.0): ?>
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$209</h4></span>
                                    <?php elseif($boxe->price == 309.0): ?>
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$309</h4></span>
                                    <?php elseif($boxe->price == 179.0): ?>
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$179</h4></span>
                                    <?php elseif($boxe['mibox_price'] == 269.0): ?>
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$269</h4></span>
                                    <?php elseif($boxe['mibox_price'] == 369.0): ?>
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$369</h4></span>
                                    <?php endif; ?>
                                </div>
                                <div class="unitbox-counter-main">
                                    <figure class="unitprdt-img">
                                        <img src="<?php echo e(asset("images/productft-$loop->iteration.png")); ?>" alt=""
                                             class="img-fluid">
                                    </figure>
                                    <div class="unitcounter">
                                       
                                        <div class="product-count">
                                            <button class="button-count no-active" wire:click="Minus(<?php echo e($boxe->id); ?>)">-
                                            </button>
                                            <input wire:model="container_count.<?php echo e($boxe->id); ?>" type="text" readonly
                                                   class="number-product form-control">
                                            <button class="button-count" wire:click="Add(<?php echo e($boxe->id); ?>)">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="unitbox-content-main">
                                    <h6><?php echo e($room_data[$boxe->id]); ?></h6>
                                    <p><?php echo e($text_data[$boxe->id]); ?></p>
                                    <!-- <p>Ideal for storing the contents of a studio apartment, including a number of boxes, kitchen appliances, small mattress set, chairs, or even a motorcycle.</p> -->
                                </div>
                            </div>
                            <div class="unitbox-right unitbox-w">
                                <div class="unitbox-table">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td>Monthly Rent</td>
                                                <td class="text-bold">
                                                    <?php if($container_count[$boxe->id] == 0): ?>
                                                        $0
                                                    <?php else: ?>
                                                        $<?php echo e($boxe->price*$container_count[$boxe->id]); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Initial Delivery</td>
                                                <td class="text-bold">$<?php echo e(@$zipcode->initial_delivery??0); ?></td>
                                            </tr>
                                            <?php if($type == 2): ?>
                                            <tr>
                                                <td>Initial Pickup</td>
                                                <td class="text-bold">$<?php echo e(@$zipcode->initial_pickup??0); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Final Delivery</td>
                                                <td class="text-bold">$<?php echo e(@$zipcode->final_delivery??0); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            
                                            <?php if(($container_types != 'Storage' || $container_types != 'Moving' && $type!=1 && $type!=2) && ($container_types != 'Storage-Moving' || $type==1)): ?>
                                            <tr>
                                                <td>Moving</td>
                                                <td class="text-bold">$<?php echo e(@$zipcode->moving??0); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td>Final Pickup</td>
                                                <td class="text-bold">$<?php echo e(@$zipcode->final_pick??0); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total Due Before Delivery</td>
                                                <td class="total-prc">
                                                    <?php if($container_count[$boxe->id] == 0): ?>
                                                        $0
                                                    <?php elseif($type==2): ?>
                                                    <?php if($container_types != 'Storage'): ?>
                                                    <!-- $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->initial_pickup + @$zipcode->final_delivery + @$zipcode->moving +@$zipcode->final_pick); ?></td> -->
                                                        $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery); ?></td>
                                                    <?php else: ?>
                                                        <!-- $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->initial_pickup + @$zipcode->final_delivery +@$zipcode->final_pick); ?></td> -->
                                                        $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery); ?></td>
                                                    <?php endif; ?>
                                                    <?php else: ?>
                                                    <?php if($container_types != 'Storage'): ?>
                                                    <!-- $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->moving +@$zipcode->final_pick); ?></td> -->
                                                        $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery); ?></td>
                                                    <?php else: ?>
                                                        <!-- $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery +@$zipcode->final_pick); ?></td> -->
                                                        $<?php echo e(($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery); ?></td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pay-later">
                            <div class="pay-left w-50 text-center">
                                <?php if($container_count[$boxe->id] == 0): ?>
                                    <a onclick="stoplink(event)" class="hover-5"
                                       href="<?php echo e(url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])); ?>">
                                        <h4>Reserve now pay later</h4></a>
                                <?php else: ?>
                                    <a onclick=""
                                       href="<?php echo e(url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])); ?>">
                                        <h4>Reserve now pay later</h4></a>
                                <?php endif; ?>
                            </div>
                            <div class="pay-right w-50 text-center">
                                <?php if($container_count[$boxe->id] == 0): ?>
                                    <a onclick="stoplink(event)"
                                       href="<?php echo e(url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])); ?>"
                                       class="btn btn--primary d-flex">Reserve now</a>
                                    <p>No Change or Cancelation Fees</p>
                                <?php else: ?>
                                    <a
                                       href="<?php echo e(url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])); ?>"
                                       class="btn btn--primary d-flex">Reserve now</a>
                                    <p>No Change or Cancelation Fees</p>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <script>
        function stoplink(e) {
            e.preventDefault();
            return false;
        }
    </script>
</div>
<?php /**PATH /var/www/html/mibox/resources/views/livewire/pages/home.blade.php ENDPATH**/ ?>