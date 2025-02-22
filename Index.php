<html lang="en">

<head>

  <meta charset="UTF-8">

  <link rel="apple-touch-icon" type="image/png"
    href="./images/icons/fv-flucent.png">
  <meta name="Flucent Technologies Pvt Ltd" content="bgv">

  <link rel="shortcut icon" type="image/x-icon"
    href="./images/icons/fv-flucent.png">

  <link rel="mask-icon" type="image/x-icon"
    href="./images/icons/fv-flucent.png"
    color="#111">


  <script src="./assets/packs/js/authorizeDataCapture-87166fe544ee463cb083.js"></script>


  <title>Flucent Technologies - BGV</title>
  <!-- <title>Onboarding Walkthrough Screens</title> -->
  <meta name="title" content="Onboarding Screens">
  <meta name="description" content="">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://flucenttechnologies.com/">
  <meta property="og:title" content="Onboarding Screens">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://assets.codepen.io/167555/onboarding-walkthrough-screens.PNG">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://twitter.com/FlucentTechnol1">
  <meta property="twitter:title" content="FlucentTechnol1">
  <meta property="twitter:description" content="">
  <meta property="twitter:image" content="https://assets.codepen.io/167555/onboarding-walkthrough-screens.PNG">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:700,300">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
  <link rel="stylesheet" href="./css/info.css">


  <script>
    window.console = window.console || function (t) { };
  </script>



  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>


</head>

<body translate="no">
  <!-- / A set of walkthrough screens in HTML/CSS/JS. A personal experiment with layering images, CSS3 transitions, & flexbox. -->
  <button class="open-walkthrough">Start</button>
  <div class="walkthrough show reveal">
    <div class="walkthrough-pagination">
      <a class="dot active"></a>
      <a class="dot"></a>
      <a class="dot"></a>
      <a class="dot"></a>
      <a class="dot"></a>
    </div>
    <div class="walkthrough-body">
      <ul class="screens animate">
        <li class="screen active">
          <div class="media logo">
            <img class="logo" src="./images/icons/icon.png">
          </div>
          <h3>
            Welcome to Flucent
          </h3>
          <p> We are Mocapays onboarding,document management and background verification partner,and need your help for
            the same.</p>
        </li>
        <li class="screen">
          <div class="media books">
            <img class="icon" src="./images/icons/book_icon_1.png">
            <img class="icon" src="./images/icons/book_icon_2.png">
            <img class="icon" src="./images/icons/book_icon_3.png">
          </div>
          <h3>
            Upload Documents
          </h3>
          <p>Please Keep scanned copy of documents handy as you may have to upload then in the process.</p>
        </li>
        <li class="screen">
          <div class="media bars">
            <img class="icon" src="./images/icons/bar_icon_axis.png">
            <img class="icon" src="./images/icons/bar_icon_3.png">
            <img class="icon" src="./images/icons/bar_icon_2.png">
            <img class="icon" src="./images/icons/bar_icon_1.png">
          </div>
          <h3>
            Create an account
          </h3>
          <p>We will request you to join Flucent in the following steps.</p>
        </li>
        <li class="screen">
          <div class="media files">
            <img class="icon" src="./images/icons/file_icon_1.png">
            <img class="icon" src="./images/icons/file_icon_2.png">
            <img class="icon" src="./images/icons/file_icon_3.png">
            <img class="icon" src="./images/icons/file_icon_4.png">
          </div>
          <h3>
            Tell us more
          </h3>
          <p>Once your have registered we amy ask for your id.</p>
        </li>
        <li class="screen">
          <div class="media comm">
            <img class="icon" src="./images/icons/comm_icon_1.png">
            <img class="icon" src="./images/icons/comm_icon_2.png">
          </div>
          <h3>
            Your Flucent Account
          </h3>
          <p>It gets created once the process is complete.you can come back and update your information anytime. </p>
        </li>
      </ul>
      <button class="prev-screen" disabled="">
        <i class="icon-angle-left"></i>
      </button>
      <button class="next-screen">
        <i class="icon-angle-right"></i>
      </button>
    </div>
    <div class="walkthrough-footer">
      <button class="button next-screen">OK,LETS GO!</button>
      <a href="login.php"><button class="button finish close" disabled="">Start</button></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script id="rendered-js">
    (function () {
      $(document).ready(function () {
        var walkthrough;
        walkthrough = {
          index: 0,
          nextScreen: function () {
            if (this.index < this.indexMax()) {
              this.index++;
              return this.updateScreen();
            }
          },
          prevScreen: function () {
            if (this.index > 0) {
              this.index--;
              return this.updateScreen();
            }
          },
          updateScreen: function () {
            this.reset();
            this.goTo(this.index);
            return this.setBtns();
          },
          setBtns: function () {
            var $lastBtn, $nextBtn, $prevBtn;
            $nextBtn = $('.next-screen');
            $prevBtn = $('.prev-screen');
            $lastBtn = $('.finish');
            if (walkthrough.index === walkthrough.indexMax()) {
              $nextBtn.prop('disabled', true);
              $prevBtn.prop('disabled', false);
              return $lastBtn.addClass('active').prop('disabled', false);
            } else if (walkthrough.index === 0) {
              $nextBtn.prop('disabled', false);
              $prevBtn.prop('disabled', true);
              return $lastBtn.removeClass('active').prop('disabled', true);
            } else {
              $nextBtn.prop('disabled', false);
              $prevBtn.prop('disabled', false);
              return $lastBtn.removeClass('active').prop('disabled', true);
            }
          },
          goTo: function (index) {
            $('.screen').eq(index).addClass('active');
            return $('.dot').eq(index).addClass('active');
          },
          reset: function () {
            return $('.screen, .dot').removeClass('active');
          },
          indexMax: function () {
            return $('.screen').length - 1;
          },
          closeModal: function () {
            $('.walkthrough, .shade').removeClass('reveal');
            return setTimeout((() => {
              $('.walkthrough, .shade').removeClass('show');
              this.index = 0;
              return this.updateScreen();
            }), 200);
          },
          openModal: function () {
            $('.walkthrough, .shade').addClass('show');
            setTimeout((() => {
              return $('.walkthrough, .shade').addClass('reveal');
            }), 200);
            return this.updateScreen();
          }
        };
        $('.next-screen').click(function () {
          return walkthrough.nextScreen();
        });
        $('.prev-screen').click(function () {
          return walkthrough.prevScreen();
        });
        $('.close').click(function () {
          return walkthrough.closeModal();
        });
        $('.open-walkthrough').click(function () {
          return walkthrough.openModal();
        });
        walkthrough.openModal();

        // Optionally use arrow keys to navigate walkthrough
        return $(document).keydown(function (e) {
          switch (e.which) {
            case 37:
              // left
              walkthrough.prevScreen();
              break;
            case 38:
              // up
              walkthrough.openModal();
              break;
            case 39:
              // right
              walkthrough.nextScreen();
              break;
            case 40:
              // down
              walkthrough.closeModal();
              break;
            default:
              return;
          }
          e.preventDefault();
        });
      });

    }).call(this);

  </script>







</body>

</html>