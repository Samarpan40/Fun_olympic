<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fun Olympic</title>
    <link rel="stylesheet" href="landing.css" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        

        <header>
          <div class="container">
            <div class="logo">
              
              <h3>Fun Olympic</h3>
            </div>

            <div class="links">
              <ul>
                <!--<li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Testimonials</a></li>-->
                
                <li><a href="registration.php" class="btn">Sign up</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Welcome to fun olympic,</h1>
                <h1>Enjoy Every Moment.</h1>
              </div>
              <p class="text">
                The Fun Olympic is an international sports festival. The ultimate goals are to cultivate human beings, through sport, and contribute to world peace. 
              </p>
              <div class="cta">
                <a href="login.php" class="btn">Get started</a>
              </div>
            </div>

            <div class="right">
              <img style="height: 600px; width: 600px; " src="assets/img/logo.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script type="text/javascript">
      // Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");

declare();

let dark = false;

function toggleAnimation() {
  // Clone the wrapper
  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

events();
    </script>
  </body>
</html>