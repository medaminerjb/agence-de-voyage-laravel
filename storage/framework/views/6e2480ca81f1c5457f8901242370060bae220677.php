<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage | Maysar Tunisian Travel</title>
    <meta name="author" content="bestmomo">
    <meta name="description" content="Les meilleures réservations du web">
    <meta name="keywords" content="vacances,gites">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
      .fc .fc-bg-event {
          background: darkred;
      }
    </style>
</head>
<body>
    <!-- Section de l'entête -->
    <section class="header">
        <a href="#" class="logo"><img src="./images/images (4).jpg" class="img-responsive" alt="" width="150px" height="50px"></a>

        <nav class="navbar">
            <a href="<?php echo e(route('welcome')); ?>">accueil</a>
           
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('profile.edit')); ?>">
            My Profile
            </a>
             <a href="<?php echo e(route('rents')); ?>">
             Mes resarvations
              </a>
            <form action="<?php echo e(route('logout')); ?>" method="POST" hidden>
                            <?php echo csrf_field(); ?>                                
                        </form>
                        <a href="#"  onclick="event.preventDefault(); this.previousElementSibling.submit();">
                            <i></i><img src="/images/log.png" class="" alt="" width="20px" height="20px"></a>    
          
          <?php else: ?>
            <a id="auth" href="<?php echo e(route('register')); ?>" class="cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-110 duration-300 ease-in-out">
            Registration or login
            </a>
          <?php endif; ?>
        </nav>
        <div class="fas fa-bars" id="menu-btn"></div>
    </section>
    
    <section class="home-packages"id="con">
        <h1 class="heading-title">hotels</h1>
        <div class="box-container">

          <?php $__currentLoopData = $homes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box">
                <div class="image">
                       <img  src="<?php echo e(asset('images/' . $home->image)); ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo e($home->title); ?></h3>
                    <p><?php echo e($home->BLOB); ?></p>
                    <a href="<?php echo e(route('homes.show', $home->id)); ?>" class="btn">en savoir plus</a>  
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </div>
    </section>
    

    <section class="footer" id="info">
        <div class="box-container">
            <div class="box">
                <h3>Liens rapides</h3>
                <a href="#"><i class="fas fa-angle-right    "></i>accueil </a>
                <a href="#prop"><i class="fas fa-angle-right    "></i>a propos </a>
                <a href="#"><i class="fas fa-angle-right    "></i>paquets </a>
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('rents')); ?>"><i class="fas fa-angle-right    "></i>reservation </a>
                <?php endif; ?>
            </div>
            
            <div class="box">
                <h3>info contact</h3>
                <a href="tel:29202226"><i class="fas fa-phone    "></i>+216 29200013 </a>
                <a href="tel:29202226"><i class="fas fa-phone    "></i> +216 29202226 </a>
                <a href="mailto:info@maysartravel.com"><i class="fas fa-envelope    "></i>info@maysartravel.com </a>
                <a href="https://www.google.com/maps/place/My+Booking+Way/@33.8624094,10.9615822,17z/data=!3m1!4b1!4m6!3m5!1s0x13aaa2bde4540b9b:0x5160c96073b8f9c5!8m2!3d33.862405!4d10.9637762!16s%2Fg%2F11cm1wwtyp"><i class="fas fa-map    "></i>Zone Touristique Djerba </a>
            </div>
            <div class="box">
                <h3>suivez nous</h3>
                <a href="https://www.facebook.com/maysartunisiantravel"><i class="fab fa-facebook    "></i>facebook </a>
                
                <a href="https://www.instagram.com/maysartunisiantravel/"><i class="fab fa-instagram    "></i>instagram </a>
                
            </div>
        </div>
        <div class="home-right">
            créé par <span>Rejeb Mohamed Lamine</span> | tout droit reservé
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\maysarv3\resources\views/hotels.blade.php ENDPATH**/ ?>