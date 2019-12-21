/*www.w3schools.com'dan alıntı*/
window.onscroll = function() { Scroll() };

function Scroll() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("backToTop").style.display = "block"
    } else {
        document.getElementById("backToTop").style.display = "none"

    }
}
/*www.w3schools.com'dan alıntı*/