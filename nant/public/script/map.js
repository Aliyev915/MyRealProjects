const gence = document.querySelector("#ganja");
const naxcivan = document.querySelector("#naxcivan");
const karabag = document.querySelector("#karabag");
const mingecevir = document.querySelector("#mingachevir");
const kuba = document.querySelector("#guba");
const baki = document.querySelector("#baku");
const lenkeran = document.querySelector("#lankaran");
const btnGence = document.querySelector(".ganja");
const btnNaxcivan = document.querySelector(".nachchivan");
const btnKarabag = document.querySelector(".karabakh");
const btnMingecevir = document.querySelector(".mingachevir");
const btnKuba = document.querySelector(".guba");
const btnBaki = document.querySelector(".baku");
const btnLenkeran = document.querySelector(".lankaran");
const closeGence = document.querySelector(".closeGanja");
const closeNaxcivan = document.querySelector(".closeNakhchivan");
const closeKarabag = document.querySelector(".closeKarabakh");
const closeMingecevir = document.querySelector(".closeMingachevir");
const closeKuba = document.querySelector(".closeGuba");
const closeBaki = document.querySelector(".closeBaku");
const closeLenkeran = document.querySelector(".closeLankaran");
console.log(btnNaxcivan);
btnGence.onclick= function () {
    gence.style.display = "block";
};
closeGence.onclick=function () {
    gence.style.display = "none";
};
btnNaxcivan.onclick=function () {
    naxcivan.style.display = "block";
};
closeNaxcivan.onclick=function () {
    naxcivan.style.display = "none";
};
btnKarabag.onclick=function () {
    karabag.style.display = "block";
};
closeKarabag.onclick=function () {
    karabag.style.display = "none";
};
btnMingecevir.onclick=function () {
    mingecevir.style.display = "block";
};
closeMingecevir.onclick=function () {
    mingecevir.style.display = "none";
};
btnKuba.onclick=function () {
    kuba.style.display = "block";
    console.log(kuba)
};
closeKuba.onclick=function () {
    kuba.style.display = "none";
};
btnBaki.onclick=function () {
    baki.style.display = "block";
};
closeBaki.onclick=function () {
    baki.style.display = "none";
};
btnLenkeran.onclick=function () {
    lenkeran.style.display = "block";
};
closeLenkeran.onclick=function () {
    lenkeran.style.display = "none";
};

document.body.addEventListener("click", closeOutPopup);
function closeOutPopup(o) {
    if (o.target.className == "popup-parent") {
        gence.style.display = "none";
        naxcivan.style.display = "none";
        karabag.style.display = "none";
        mingecevir.style.display = "none";
        kuba.style.display = "none";
        baki.style.display = "none";
        lenkeran.style.display = "none";
    }
}
