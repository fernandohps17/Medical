(() => {
    const sourceMobile = document.getElementById("sourceMobile");
    const sourceDes = document.getElementById("sourceDes");
    const imageDes = document.getElementById("imageDes");
    const title = document.getElementById("title");
    const subtitleTop = document.getElementById("subtitleTop");
    const subtitle = document.getElementById("subtitle");
    const arrow_right = document.getElementById("arrow_right");
    const arrow_left = document.getElementById("arrow_left");
    const timeInteval = 10000;

    const imagenes = [
        {
            image: "/public/img/medical-home-header-slides-1.jpg",
            webp: "/public/img/medical-home-header-slides-1.webp",
            mobile: "/public/img/medical-home-header-slides-1-mobile.webp",
            subtitleTop: "<span>PASSION FOR CARING</span>",
            title: "Genuine Commitment <br> To Your Health",
            subtitle: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, <br> rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, rerum.",
        },
        {
            image: "/public/img/medical-home-header-slides-2.jpg",
            webp: "/public/img/medical-home-header-slides-2.webp",
            mobile: "/public/img/medical-home-header-slides-2-mobile.webp",
            subtitleTop: "<span>GREAT IN BULDING</span>",
            title: "Orthopedic Treatment <br> Accute Pain",
            subtitle: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, <br> rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, rerum.",
        },
        {
            image: "/public/img/medical-home-header-slides-3.jpg",
            webp: "/public/img/medical-home-header-slides-3.webp",
            mobile: "/public/img/medical-home-header-slides-3-mobile.webp",
            subtitleTop: "<span>HIGHER LEVEL OF CARE</span>",
            title: "Setting Standards <br> in Physiotherapy",
            subtitle: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, <br> rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, rerum.",
        },
    ];

    let indiceImagenes = 0;

    function cambiarImagenes(action = "next") {
        if (action === "next") {
            if (indiceImagenes < imagenes.length - 1) {
                indiceImagenes++;
            } else {
                indiceImagenes = 0;
            }
        } else {
            if (indiceImagenes === 0) {
                indiceImagenes = imagenes.length - 1
            } else {
                indiceImagenes--;
            }
        }

        imageDes.src = imagenes[indiceImagenes].image;
        sourceDes.srcset = imagenes[indiceImagenes].webp;
        sourceMobile.srcset = imagenes[indiceImagenes].mobile;
        subtitleTop.innerHTML = imagenes[indiceImagenes].subtitleTop;
        title.innerHTML = imagenes[indiceImagenes].title;
        subtitle.innerHTML = imagenes[indiceImagenes].subtitle;
    }

    arrow_right.addEventListener('click', () => {
        cambiarImagenes()

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    arrow_left.addEventListener('click', () => {
        cambiarImagenes("prev")

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    let myTimer = window.setInterval(cambiarImagenes, timeInteval);
})();