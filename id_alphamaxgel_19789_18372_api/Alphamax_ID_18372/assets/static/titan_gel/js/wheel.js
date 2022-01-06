var intr, time = 600;

function spin() {
    var wheel = document.querySelector(".wheel-img");
    if (!wheel.classList.contains("rotated")) {
        wheel.classList.add("super-rotation")
        setTimeout(function() {
            $("#productOne").slideUp();
            $(".spin-wrapper").slideUp();
            $(".order_block").slideDown();
            start_timer()
        }, 1e4),
        wheel.classList.add("rotated")
    }
}

function outputDat(e, t) {
    var r = new Date,
        o = new Date(r.getTime() - 864e5 * e),
        l = !1 === t ? "01,02,03,04,05,06,07,08,09,10,11,12".split(",") : "СЏРЅРІР°СЂСЏ,С„РµРІСЂР°Р»СЏ,РјР°СЂС‚Р°,Р°РїСЂРµР»СЏ,РјР°СЏ,РёСЋРЅСЏ,РёСЋР»СЏ,Р°РІРіСѓСЃС‚Р°,СЃРµРЅС‚СЏР±СЂСЏ,РѕРєС‚СЏР±СЂСЏ,РЅРѕСЏР±СЂСЏ,РґРµРєР°Р±СЂСЏ".split(",");
    return o.getDate(), !1 === t ? o.getDate() + "." + l[o.getMonth()] + "." + o.getFullYear() : o.getDate() + " " + l[o.getMonth()] + " " + o.getFullYear()
}

function start_timer() {
    intr = setInterval(tick, 1e3)
}

function tick() {
    time -= 1;
    var e = Math.floor(time / 60),
        t = time - 60 * e;
    0 == e && 0 == t && clearInterval(intr), t = t >= 10 ? t : "0" + t, $("#min").html("0" + e), $("#sec").html(t)
}