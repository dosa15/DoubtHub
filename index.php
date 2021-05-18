<?php include_once "header.php"; ?>
<body class='body-homepage' onload="display()">
    <br><br>
    <!--Main Page-->
    <center>
        <h1 class="ml11">
            <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters">DoubtHub</span>
            </span>
        </h1>
        <h1 class="ml3">Ask Your Doubt ?</h1>
        <br>
        <div class="wrapper-homepage">
            <div class="face"></div>
            <div class="face"></div>
            <div class="face"></div>
            <div class="face"></div>
            <div class="face"></div>
            <div class="face"></div>
        </div>
        <section id="About">
            <div id="about-section">
                <div class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, laudantium, velit earum fugit
                    possimus maxime ipsa,
                    vero delectus illo pariatur omnis reprehenderit. Eius enim nobis officiis qui ratione minima
                    asperiores.
                </div>
                <div class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, laudantium, velit earum fugit
                    possimus maxime ipsa,
                    vero delectus illo pariatur omnis reprehenderit. Eius enim nobis officiis qui ratione minima
                    asperiores.
                </div>
                <div class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, laudantium, velit earum fugit
                    possimus maxime ipsa,
                    vero delectus illo pariatur omnis reprehenderit. Eius enim nobis officiis qui ratione minima
                    asperiores.
                </div>
            </div>
        </section>
        <section class="test" id="Contact">
            <center>
                <div class="row">
                    <div class="col-sm">
                        <div class="description">
                            <h1>Please Fill this Form</h1>
                            <label style="font-size:30px" class="fa">&#xf0e0;</label>
                            <input class="input-homepage" type="text" name="" placeholder="Email"><br>
                            <label style="font-size:30px" class="fa">&#xf095;</label>
                            <input class="input-homepage" type="text" name="" placeholder="Phone Number"><br>
                            <label style="font-size:30px" class="fa">&#xf059;</label>
                            <input class="input-homepage" type="text" name="" placeholder="Queries"><br>
                            <button type="button" class="btn btn-light" style="margin: 10px;">Submit</button>
                        </div>
                    </div>
                </div>
            </center>
        </section>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>

        function doubt() {
            var textWrapper = document.querySelector('.ml3');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            var x = 1;
            anime.timeline({ loop: true })
                .add({
                    targets: '.ml3 .letter',
                    opacity: [0, 1],
                    easing: "easeInOutQuad",
                    duration: 2250,
                    delay: (el, i) => 150 * (i + 1)
                }).add({
                    targets: '.ml3',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });
            return;
        }
        var textWrapper = document.querySelector('.ml11 .letters');
        function display() {

            textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");
            var x = 1;
            anime.timeline({ loop: true })
                .add({
                    targets: '.ml11 .line',
                    scaleY: [0, 1],
                    opacity: [0.5, 1],
                    easing: "easeOutExpo",
                    duration: 700
                })
                .add({
                    targets: '.ml11 .line',
                    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                    easing: "easeOutExpo",
                    duration: 700,
                    delay: 100
                }).add({
                    targets: '.ml11 .letter',
                    opacity: [0, 1],
                    easing: "easeOutExpo",
                    duration: 600,
                    offset: '-=775',
                    delay: (el, i) => 34 * (i + 1)
                }).add({
                    targets: '.ml11',
                    opacity: 0,
                    duration: 1000,
                    easing: "easeOutExpo",
                    delay: 1000
                });

            doubt();


            return;



        }


    </script>
</body>

</html>
