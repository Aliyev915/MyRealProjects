const fr_vk_pop = document.querySelector(".vak-popup");
const fr_vk_btn = document.querySelectorAll(".fr-vk");
const closepop = document.querySelectorAll(".close-popup");
const sc_vk_btn = document.querySelectorAll(".sc-vk");
const th_vk_btn = document.querySelectorAll(".th-vk");

for (let vk of fr_vk_btn) {
    vk.addEventListener("click", function () {
        let popup=this.parentElement.parentElement.parentElement.nextElementSibling;
        popup.style.display = 'block';
    });
}
for (let close of closepop) {
    close.addEventListener("click", function () {
        let pop = this.parentElement.parentElement;
        pop.style.display = 'none';
    });
}
sc_vk_btn.addEventListener("click", function () {
    fr_vk_pop.style.display = "block";
});
th_vk_btn.addEventListener("click", function () {
    fr_vk_pop.style.display = "block";
});
document.body.addEventListener("click", closeOutPopup);
function closeOutPopup(o) {
    if (o.target.className == "vak-popup") {
        fr_vk_pop.style.display = "none";
    }
}
