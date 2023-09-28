<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portfolio</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="/build/javascript/smoothie.js"></script>
</head>

<?php
$myName = "Christian Kobe Malonzo";
$myAddress = "Project 8, Quezon City";
$myEmail = "khoviimalow@gmail.com";
$myNumber = "09606977***";
$myCourse = "Computer Science";

$yearNow = date("Y");
?>

<body class="gradient-backdrop min-h-screen bg-[#f5f5f7] align-baseline overflow-x-hidden leading-none text-white dark:bg-[#1d1d1f]">
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
        ['url' => '#home', 'text' => 'Home'],
        ['url' => '#about', 'text' => 'About'],
        ['url' => '#proj', 'text' => 'Projects'],
        ['url' => '#sugg', 'text' => 'Contacts'],
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
        <button class="hidden overflow-hidden rounded-2xl bg-none px-4 py-2 text-lg text-white outline outline-2 ghost-white sm:flex" id="msg_me">
          <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
          <lord-icon src="https://cdn.lordicon.com/pkmkagva.json" trigger="hover" target="button#msg_me" colors="primary:#FFFFFF" style="width: 25px; height: 25px">
          </lord-icon>
          <p class="ml-2">
            <?php echo "Message Me"; ?>
          </p>
        </button>

        <!-- Mobile Button -->
        <button id="mobile-open-button" class="text-3xl focus:outline-none sm:hidden">
          &#9776;
        </button>
      </div>
    </header>

    <!-- Main -->
    <main>
      <section id="home" class="fade-in-left my-16 flex max-w-full flex-col-reverse justify-evenly gap-2 sm:flex-row">
        <!-- Intro Text -->
        <div class="flex flex-col content-center justify-center gap-6 sm:gap-4">
          <h2 class="hidden max-w-fit text-center text-xl font-medium sm:block sm:text-left sm:text-xl">
            Welcome to my portfolio! I am...
          </h2>
          <h1 class="max-w-fit text-center text-3xl font-bold sm:text-left sm:text-4xl">
            <?php echo $myName ?>
          </h1>
          <p class="mx-4 max-w-fit text-center text-xl sm:text-left">
            I am a <?php echo $myCourse; ?> Student aiming to become a front-end
            developer.
          </p>
        </div>

        <!-- Intro Photo -->
        <article class="sm:p-8">
          <img src="images/main_photo.jpg" class="max-w-full rounded-full outline-8 outline-orange-300 transition-all hover:outline" />
        </article>
      </section>

      <!-- First Section -->
      <section class="glassy mb-24 block max-w-full bg-orange-300 p-[2.25rem] text-center sm:p-[4.75rem]" id="about">
        <!-- Life Experiences -->

        <?php

        $life_details = [
          ['image' => 'images/sunny_days.png', 'category' => "Elementary Days", 'backstory' =>
          "I spent my elementary days in Child's Future Guided Academe, and
          Villagers Montessori College. I made a lot of memories there and
          also participated inter-school events, such as the ISAAL Math
          Challenge, and ISAAL I.T Challenge."],
          //Separator
          ['image' => 'images/crystal.png', 'category' => "Highschool Achievements", 'backstory' =>
          "My junior highschool days continued in Villagers Montessori
          College. On the other hand, my senior highschool days were at
          STI-Munoz EDSA. I was an ITMAWD student because it was the most
          practical choice, and I learned a lot about coding, web design,
          and a little bit about databases."],
          //Separator
          ['image' => 'images/flames.png', 'category' => "College Struggles", 'backstory' =>
          "I applied to several colleges, but it was either I didn't pass
          the entrance exam, or my parents didn't like my chosen
          university. I was forced to continue my studies at STI."],
        ];

        ?>
        <header class="mb-4">
          <h1 class="mb-4 text-2xl font-semibold">
            <?php echo "Experiences in Life"; ?>
          </h1>
          <span class="gradient-backdrop mx-auto my-2 block h-[2px] self-center sm:w-[16em]"></span>
        </header>

        <!-- Lists of Life Experiences -->
        <ul class="featured-list items-baseline">

          <?php foreach ($life_details as $life_detail) : ?>

            <li class="flex flex-col items-center justify-center">
              <img src="<?php echo $life_detail['image']; ?>" class="mb-8 p-4" />
              <h2 class="text-xl font-semibold"><?php echo $life_detail['category'] ?></h2>
              <p class="mt-4 text-justify leading-relaxed">
                <?php echo $life_detail['backstory'] ?>
              </p>
            </li>
          <?php endforeach; ?>

        </ul>

        <!-- About Me -->
        <a href="about.php">
          <button class="mx-auto flex shadowed items-center shadowed rounded-full border-2 border-white px-6 py-4 text-white" id="to-about">
            <p class="mr-3 text-lg">
              <?php echo "Learn More"; ?>
            </p>
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon src="https://cdn.lordicon.com/jxwksgwv.json" trigger="hover" target="button#to-about" colors="primary:#f5f5f7" state="hover-3" style="width: 25px; height: 25px">
            </lord-icon>
          </button>
        </a>
      </section>
  </div>

  <!-- Second Section -->
  <section class="bg-[#313135] block text-center p-[2.25rem] sm:px-[6.75rem] py-12 mb-8" id="proj">
    <header class="bg-[#313135] block py-8 mb-[1.5em]">
      <h1 class="mb-4 text-2xl font-semibold">
        <?php echo "Skills and Assets"; ?>
      </h1>
      <span class="bg-[#f5f5f7] mx-auto mb-4 block h-[2px] self-center sm:w-[16em]"></span>
      <p class="leading-6  sm:text-xl">
        These are all the programming languages and skills I have developed over the years 2020 - <?php echo $yearNow ?>.
        <br class="hidden sm:block">
        I still have a lot to learn, so join me on this journey of becoming a professional developer.
      </p>
    </header>

    <!-- List of Skills -->

    <?php
    $skillsets = [
      ['image' => 'images/html_5.png', 'label' => 'HTML'],
      ['image' => 'images/css-3.png', 'label' => 'Tailwind CSS'],
      ['image' => 'images/office.png', 'label' => 'MS Office'],
      ['image' => 'images/c-sharp.png', 'label' => 'C#'],
      ['image' => 'images/java.png', 'label' => 'Java'],
    ];
    ?>

    <ul class="stats">
      <?php foreach ($skillsets as $skillset) : ?>
        <li>
          <span class="icon"> <img src="<?php echo $skillset['image']; ?>" class="block w-full"> </span>
          <strong><?php echo $skillset['label']; ?></strong>
        </li>
      <?php endforeach; ?>

    </ul>

    <!-- Projects -->
    <a href="error_404.php">
      <button class="mx-auto flex shadowed items-center shadowed rounded-full border-2 border-white px-6 py-4 text-white" id="to-soon">
        <p class="mr-3 text-lg">
          <?php echo "View Projects"; ?>
        </p>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon src="https://cdn.lordicon.com/jxwksgwv.json" trigger="hover" target="button#to-soon" colors="primary:#f5f5f7" state="hover-3" style="width: 25px; height: 25px">
        </lord-icon>
      </button>
    </a>
  </section>

  <!-- Contact Me -->
  <section class="flex justify-center sm:px-[6.75rem] mb-16" id="sugg">
    <form class="form flex-1 glassy" method="post">
      <div class="title">Have a suggestion? Send me an e-mail!</div>
      <input type="text" placeholder="Your email" class="input" name="email">
      <textarea placeholder="Your message" name="message"></textarea>

      <button type="submit" class=" text-xl rounded-full border-white border-2 px-6 sm:px-12 py-4 self-end shadowed"><i class="mr-2 fa fa-send"></i> Send </button>
    </form>
  </section>

  </main>

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
<?php ?>

</html>