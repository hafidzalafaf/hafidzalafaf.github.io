<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

<!-- MULTIPLE UPLOAD -->
<script>
    // no react or anything
    let state = {};

    // state management
    function updateState(newState) {
        state = {
            ...state,
            ...newState
        };
        console.log(state);
        console.log('aa')
    }

    // event handlers
    $("input").change(function(e) {
        let files = document.getElementById("upload").files;
        let filesArr = Array.from(files);
        updateState({
            files: files,
            filesArr: filesArr
        });

        renderFileList();
    });

    //for deleted
    $(".files").on("click", "li > .close", function(e) {
        let key = $(this)
            .parent()
            .attr("key");
        let curArr = state.filesArr;
        curArr.splice(key, 1);
        updateState({
            filesArr: curArr
        });
        renderFileList();
    });

    // $("form").on("submit", function(e) {
    //     e.preventDefault();
    //     console.log(state);
    //     renderFileList();
    //     // e.submit();
    // });

    // render functions
    function renderFileList() {
        let fileMap = state.filesArr.map((file, index) => {
            let suffix = "bytes";
            let size = file.size;
            if (size >= 1024 && size < 1024000) {
                suffix = "KB";
                size = Math.round(size / 1024 * 100) / 100;
            } else if (size >= 1024000) {
                suffix = "MB";
                size = Math.round(size / 1024000 * 100) / 100;
            }

            return `<li key="${index}"><img class="icon-text" src="<?= base_url('assets/images/icon-text.svg') ?>">  ${file.name
            }<img class="close" src="<?= base_url('assets/images/close.svg') ?>"></li>`;
        });
        $("ul").html(fileMap);
    }
</script>


<!-- SMOOTH SCROLL -->
<script>
    // var html = document.documentElement;
    // var body = document.body;

    // var scroller = {
    //     target: document.querySelector("#scroll-container"),
    //     ease: 0.05, // <= scroll speed
    //     endY: 0,
    //     y: 0,
    //     resizeRequest: 1,
    //     scrollRequest: 0,
    // };

    // var requestId = null;

    // TweenLite.set(scroller.target, {
    //     rotation: 0.01,
    //     force3D: true
    // });

    // window.addEventListener("load", onLoad);

    // function onLoad() {
    //     updateScroller();
    //     window.focus();
    //     window.addEventListener("resize", onResize);
    //     document.addEventListener("scroll", onScroll);
    // }

    // function updateScroller() {

    //     var resized = scroller.resizeRequest > 0;

    //     if (resized) {
    //         var height = scroller.target.clientHeight;
    //         body.style.height = height + "px";
    //         scroller.resizeRequest = 0;
    //     }

    //     var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

    //     scroller.endY = scrollY;
    //     scroller.y += (scrollY - scroller.y) * scroller.ease;

    //     if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
    //         scroller.y = scrollY;
    //         scroller.scrollRequest = 0;
    //     }

    //     TweenLite.set(scroller.target, {
    //         y: -scroller.y
    //     });

    //     requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
    // }

    // function onScroll() {
    //     scroller.scrollRequest++;
    //     if (!requestId) {
    //         requestId = requestAnimationFrame(updateScroller);
    //     }
    // }

    // function onResize() {
    //     scroller.resizeRequest++;
    //     if (!requestId) {
    //         requestId = requestAnimationFrame(updateScroller);
    //     }
    // }


    gsap.registerPlugin(ScrollTrigger);

    var container = document.querySelector("#scroll-container");

    var height;

    function setHeight() {
        height = container.clientHeight;
        document.body.style.height = height + "px";
    }
    ScrollTrigger.addEventListener("refreshInit", setHeight);
    window.addEventListener('scroll', setHeight);

    gsap.to(container, {
        y: () => -(height - document.documentElement.clientHeight),
        ease: "none",
        scrollTrigger: {
            trigger: document.body,
            start: "top top",
            end: "bottom bottom",
            scrub: 1,
            invalidateOnRefresh: true
        }
    });

    document.querySelectorAll('.nav a').forEach((e) => {
        const target = e.getAttribute('href');
        const targetEl = document.querySelector(target);
        const targetRect = targetEl.getBoundingClientRect();

        e.addEventListener('click', (e) => {
            e.preventDefault();

            gsap.to(window, {
                scrollTo: targetRect.top,
                ease: "power4"
            });

        });

    });
</script>


<!-- MOBILE MENU -->
<script>
    // mobile menu

    document.getElementById('mobile-menu').addEventListener("click", showMenu);
    document.getElementById('close-btn').addEventListener("click", closeMenu);

    function showMenu() {
        let menu = document.getElementById('navbar-mobile');
        // menu.style.display = "block";
        menu.style.transform = "translateY(0%)";
        // menu.style.opacity = "1";
        menu.style.transition = "0.3s ease-in all";
    }

    function closeMenu() {
        let menu2 = document.getElementById('navbar-mobile');
        // menu2.style.display = "none";
        menu2.style.transform = "translateY(100%)"
        // menu2.style.opacity = "0";
        menu2.style.transition = "0.3s ease-in-out all";
    }
</script>