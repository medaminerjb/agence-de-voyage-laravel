<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes réservations</title>
    <meta name="author" content="bestmomo">
    <meta name="description" content="Les meilleures réservations du web">
    <meta name="keywords" content="vacances,gites">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
</head>

<body>
<section class="header">
        <a href="<?php echo e(route('welcome')); ?>" class="logo"><img src="/images/images (4).jpg" class="img-responsive" alt="" width="50px" height="50px"></a>

        <nav class="navbar">
          
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('rents')); ?>">
            Resarvations
    </a>
    <a href="<?php echo e(route('payments')); ?>">
            Payments
    </a>
            <form action="<?php echo e(route('logout')); ?>" method="POST" hidden>
                            <?php echo csrf_field(); ?>                                
                        </form>
                        <a href="#"  onclick="event.preventDefault(); this.previousElementSibling.submit();">Deconnexion
                           </a>    
          
          <?php else: ?>
            <a id="auth" href="<?php echo e(route('register')); ?>" class="cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-110 duration-300 ease-in-out">
            Registration or login
            </a>
          <?php endif; ?>
        </nav>
        <div class="fas fa-bars" id="menu-btn"></div>
    </section>
 

   

        <div class="main-content flex-1 bg-white-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-white-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-green-700 to-green-600 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">
                        <?php if(Route::currentRouteName() == 'rents'): ?> 
                            Mes réservations 
                        <?php else: ?> 
                            Mes paiements 
                        <?php endif; ?>                        
                    </h3>
                </div>
            </div>

           
                <?php if(Route::currentRouteName() == 'rents'): ?> 
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('events-table', [])->html();
} elseif ($_instance->childHasBeenRendered('Xzvy0eb')) {
    $componentId = $_instance->getRenderedChildComponentId('Xzvy0eb');
    $componentTag = $_instance->getRenderedChildComponentTagName('Xzvy0eb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Xzvy0eb');
} else {
    $response = \Livewire\Livewire::mount('events-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('Xzvy0eb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php else: ?> 
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('payments-table', [])->html();
} elseif ($_instance->childHasBeenRendered('DMNWIv0')) {
    $componentId = $_instance->getRenderedChildComponentId('DMNWIv0');
    $componentTag = $_instance->getRenderedChildComponentTagName('DMNWIv0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DMNWIv0');
} else {
    $response = \Livewire\Livewire::mount('payments-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('DMNWIv0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <?php endif; ?>
            </div>

        </div>

    </div>

    <?php echo \Livewire\Livewire::scripts(); ?> 
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('H9RJ4A8')) {
    $componentId = $_instance->getRenderedChildComponentId('H9RJ4A8');
    $componentTag = $_instance->getRenderedChildComponentTagName('H9RJ4A8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H9RJ4A8');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('H9RJ4A8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   
</body>

</html>
<?php /**PATH C:\laragon\www\maysarv3\resources\views/back/index.blade.php ENDPATH**/ ?>