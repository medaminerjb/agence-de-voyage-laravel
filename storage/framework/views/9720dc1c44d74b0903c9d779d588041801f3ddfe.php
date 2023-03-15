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
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />    
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js"></script>
  
</head>
    <style>

      .fc .fc-bg-event {
          background: black;
      }
    </style>
</head>
<body>
<section class="header">
        <a href="#" class="logo"><img src="/images/images (4).jpg" class="img-responsive" alt="" width="150px" height="50px"></a>

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
    <section class="exc-packages"id="con">
    <h1 class="heading-title"><?php echo e($home->title); ?></h1>
        <div class="box-container">
        <div class="image">
            <div class="box">
                <img src="<?php echo e(asset('images/' . $home->image)); ?>" alt="" width="100%" height="490px" >
                </div>
            </div>
         
         
        </div>
    </section>
    <section class="home-offer" id="offer">
        <div class="content">
        
            <h3><?php echo e($home->title); ?></h3>
            <p><?php echo e($home->BLOB); ?></p>
            <a href="#" class="btn">reservez maintenant</a>
        </div>
    </section>
    
     <!-- section du pide de la page -->
     <section class="footer" id="info">
        <div class="box-container">
            <div class="box">
                <h3>Liens rapides</h3>
                <a href="#"><i class="fas fa-angle-right    "></i>accueil </a>
                <a href="#"><i class="fas fa-angle-right    "></i>a propos </a>
                <a href="#"><i class="fas fa-angle-right    "></i>paquets </a>
                <a href="#"><i class="fas fa-angle-right    "></i>reservation </a>
            </div>
            <div class="box">
                <h3>Liens extra</h3>
                <a href="#"><i class="fas fa-angle-right    "></i>posez questions </a>
                <a href="#"><i class="fas fa-angle-right    "></i>a propos de nous </a>
                <a href="#"><i class="fas fa-angle-right    "></i>politique de confidentialité </a>
                <a href="#"><i class="fas fa-angle-right    "></i>nos termes </a>
            </div>
            <div class="box">
                <h3>info contact</h3>
                <a href="#"><i class="fas fa-phone    "></i>+216 29200013 </a>
                <a href="#"><i class="fas fa-phone    "></i> +216 29202226 </a>
                <a href="#"><i class="fas fa-envelope    "></i>info@maysartravel.com </a>
                <a href="#"><i class="fas fa-map    "></i>Zone Touristique Djerba </a>
            </div>
            <div class="box">
                <h3>suivez nous</h3>
                <a href="#"><i class="fab fa-facebook    "></i>facebook </a>
                <a href="#"><i class="fab fa-twitter    "></i>twitter </a>
                <a href="#"><i class="fab fa-instagram    "></i>instagram </a>
                <a href="#"><i class="fab fa-linkedin    "></i>linkedIn </a>
            </div>
        </div>
        <div class="home-right">
            créé par <span>Rejeb Mohamed Lamine</span> | tout droit reservé
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  
</body>
</html>
<?php /**PATH C:\laragon\www\maysarv3\resources\views/hotel.blade.php ENDPATH**/ ?>