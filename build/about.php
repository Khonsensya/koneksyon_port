<!DOCTYPE html>
<html lang="en">

<head>
  <title>About</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="/build/javascript/smoothie.js"></script>
</head>

<?php

$myAddress = "Project 8, Quezon City";
$myEmail = "khoviimalow@gmail.com";
$myNumber = "09606977***";

?>

<body class="gradient-backdrop min-h-screen overflow-x-hidden bg-[#f5f5f7] align-baseline leading-none text-white dark:bg-[#1d1d1f]">
  <!-- Wrapper -->
  <div class="mx-auto w-[90rem] max-w-[calc(100%-4rem)]">
    <!-- Header -->
    <header class="top-0 z-10 mx-auto flex max-w-[88rem] items-center justify-between p-4 text-center text-[#f5f5f7]">
      <!-- Portfolio Title  -->
      <h1 class="p-2 text-2xl font-medium text-[#f5f5f7]">
        <a href="#" id="logo">My Portfolio</a>
      </h1>
      <!-- Navigation -->

      <!-- Navigation Items in a PHP Array -->
      <?php
      $navItems = [
        ['url' => 'index.php', 'text' => 'Home'],
        ['url' => '#', 'text' => 'About'],
        ['url' => 'error_404.php', 'text' => 'Projects'],
        ['url' => 'index.php', 'text' => 'Contacts'],
      ];
      ?>

      <!-- Generates navigation items dynamically -->
      <nav class="hidden space-x-12 overflow-hidden text-xl sm:block" aria-label="main">
        <?php foreach ($navItems as $navItem) : ?>
          <a href="<?php echo $navItem['url']; ?>" class="hover:opacity-90 px-6 py-2"><?php echo $navItem['text']; ?></a>
        <?php endforeach; ?>
      </nav>

      <!-- Message Button -->
      <div>
        <button class="ghost-white hidden overflow-hidden rounded-2xl bg-none px-4 py-2 text-lg text-white outline outline-2 sm:flex" id="msg_me">
          <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
          <lord-icon src="https://cdn.lordicon.com/pkmkagva.json" trigger="hover" target="button#msg_me" colors="primary:#FFFFFF" style="width: 25px; height: 25px">
          </lord-icon>
          <p class="ml-2">Message Me</p>
        </button>

        <!-- Mobile Button -->
        <button id="mobile-open-button" class="text-3xl focus:outline-none sm:hidden">
          &#9776;
        </button>
      </div>
    </header>

    <main>
      <section class="glassy mt-8 mb-16 max-w-full overflow-hidden !rounded-3xl pb-[5.5rem] pt-8 fade-in-bck" id="gallery">

        <!-- Photo Gallery -->
        <h1 class="text-center text-[2em] font-semibold p-10">Picture Gallery</h1>
        <div class="gallery-image">

          <?php
          $gallery_Images = [
            ['pic' => 'images/lifetime pictures/Elem.jpg', 'stage' => 'Elementary', 'level' => "6th Grade"],
            ['pic' => 'images/lifetime pictures/HS.jpg', 'stage' => 'Junior Highschool', 'level' => "10th Grade"],
            ['pic' => 'images/lifetime pictures/HS2.jpg', 'stage' => 'Junior Highschool', 'level' => "10th Grade"],
            ['pic' => 'images/lifetime pictures/College.jpg', 'stage' => 'Senior Highschool', 'level' => "11th Grade"],
            ['pic' => 'images/lifetime pictures/College2.jpg', 'stage' => 'College', 'level' => "2nd Year"],
          ];
          ?>

          <?php foreach ($gallery_Images as $gallery_Image) : ?>
            <div class="img-box">
              <img src="<?php echo $gallery_Image['pic']; ?>">
              <div class="transparent-box">
                <div class="caption">
                  <p>
                    <?php echo $gallery_Image['stage']; ?>
                  </p>

                  <p class="opacity-low">
                    <?php echo $gallery_Image['level']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mx-auto max-w-3xl text-center">
          <p class="my-6 text-xl mx-4 sm:mx-0 sm:text-4xl font-medium sm:leading-10">
            More images coming soon...
          </p>
        </div>
      </section>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-10 ">
    <div class=" mx-auto flex flex-col sm:flex-row w-[72rem] max-w-[calc(100%-4rem)] gap-8">
      <div class=" flex flex-col sm:mx-auto space-y-6">
        <!-- Footer Navigation -->
        <h4 class="text-gray-400 text-xl font-semibold mb-4">Navigation</h4>
        <?php
        $footer_navItems = [
          ['url' => '#logo', 'text' => 'Home'],
          ['url' => '#about', 'text' => 'About'],
          ['url' => '#proj', 'text' => 'Projects'],
          ['url' => '#sugg', 'text' => 'Contact'],
        ];
        ?>

        <ul class="grid grid-cols-2 gap-4 sm:gap-0 sm:flex sm:flex-col sm:space-y-6">
          <?php foreach ($footer_navItems as $footer_navItem) : ?>
            <li><a href="<?php echo $footer_navItem['url']; ?>" class="hover:text-gray-500">
                <?php echo $footer_navItem['text']; ?> </a> </li>
          <?php endforeach; ?>
        </ul>

      </div>
      <div class="flex flex-col sm:mx-auto space-y-6">
        <h4 class="text-gray-400 text-xl font-semibold mb-4">Contact Information</h4>
        <p class="text-gray-400">Address: <i><?php echo $myAddress ?></i></p>
        <p class="text-gray-400">Email: <?php echo $myEmail ?></p>
        <p class="text-gray-400">Phone: <?php echo $myNumber ?></p>
      </div>
      <div class="flex flex-col sm:mx-auto space-y-6">
        <h4 class="text-gray-400 text-xl font-semibold mb-4">Social Media</h4>

        <?php
        $social_Links = [
          ['url' => 'https://www.facebook.com/kobe.malonzo/', 'socmed' => 'Facebook'],
          ['url' => 'https://twitter.com/Kokay___', 'socmed' => 'Twitter'],
          ['url' => 'https://discordapp.com/users/723888526457962557', 'socmed' => 'Discord'],
          ['url' => 'https://github.com/Khonsensya', 'socmed' => 'Github'],
        ];
        ?>

        <ul class="grid grid-cols-2 gap-4 sm:gap-0 sm:flex sm:flex-col sm:space-y-6">
          <?php foreach ($social_Links as $social_Link) : ?>
            <li><a href="<?php echo $social_Link['url']; ?>" class="hover:text-gray-500">
                <?php echo $social_Link['socmed']; ?></a></li>
          <?php endforeach; ?>
      </div>
    </div>
  </footer>
</body>

</html>