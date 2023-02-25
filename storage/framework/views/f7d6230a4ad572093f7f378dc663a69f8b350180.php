<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name','Mini_Twitter')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php if(session()->get('locale')=='ar'): ?>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
        <style>
            html {
                direction:rtl;
                font-family:"Droid Arabic Kufi", "Droid Sans", sans-serif;
                font-size:16px;
                /* background-color: azure; */
            }
            *{
                direction:rtl;
            }
        </style>
    <?php endif; ?>
</head>



<body class="<?php echo e(session()->get('locale')=='ar' ? 'rtl' : 'ltr'); ?>">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Mini_Twitter')); ?>

                </a>
                <?php if(auth()->guard()->check()): ?>
                    <a class="navbar-brand" href="<?php echo e(url('/follows')); ?>">
                        <?php echo e(__('User List')); ?>

                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/tweets')); ?>">
                        <?php echo e(__('My Tweets')); ?>

                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/tweets/create')); ?>">
                        <?php echo e(__('New Tweet')); ?>

                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/timelines')); ?>">
                        <?php echo e(__('Timeline')); ?>

                    </a>
                <?php endif; ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" font-weight-bolder nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img style="border-radius: 50%;" src="<?php echo e(asset('images/' . Auth::user()->imgname)); ?>" height="60">
                                    <span style="font-size:x-large"><?php echo e(Auth::user()->name); ?></span> <span class="caret"></span>
                                 </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                <?php $locale = session()->get('locale'); ?>
                                <li class="nav-item dropdown" style="margin:10px">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php switch($locale):
                                            case ('ar'): ?>
                                            <img src="<?php echo e(asset('ar.png')); ?>" width="30px" height="40px" > <?php echo e(__('Arabic')); ?>

                                            <?php break; ?>
                                            <?php default: ?>
                                            <img src="<?php echo e(asset('en.png')); ?>" width="30px" height="40px"> <?php echo e(__('English')); ?>

                                        <?php endswitch; ?>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="en"><img src="<?php echo e(asset('en.png')); ?>" width="30px" height="30px"> <?php echo e(__('English')); ?></a>
                                        <a class="dropdown-item" href="ar"><img src="<?php echo e(asset('ar.png')); ?>" width="30px" height="30px"> <?php echo e(__('Arabic')); ?></a>
                                    </div>
                                </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH D:\git\Mini-Twitter\Mini-Twitter\resources\views/layouts/app.blade.php ENDPATH**/ ?>