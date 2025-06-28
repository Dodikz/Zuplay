import "./bootstrap";
(function () {
function r() {
    const loader = document.getElementById("loader");
    if (loader) {
        loader.classList.add("d-none");
    }
}
    if (
        (window.addEventListener("load", r),
        [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(
            (e) => new bootstrap.Tooltip(e)
        ),
        [...document.querySelectorAll('[data-bs-toggle="popover"]')].map(
            (e) => new bootstrap.Popover(e)
        ),
        flatpickr("#daterange", {
            mode: "range",
            dateFormat: "Y-m-d",
            defaultDate: ["2024-07-01", "2024-07-30"],
        }),
        document.querySelector("#switcher-canvas"))
    ) {
        const e = document.querySelector(".pickr-container-primary"),
            l = document.querySelector(".theme-container-primary"),
            n = document.querySelector(".pickr-container-background"),
            u = document.querySelector(".theme-container-background"),
            E = [
                [
                    "nano",
                    {
                        defaultRepresentation: "RGB",
                        components: {
                            preview: !0,
                            opacity: !1,
                            hue: !0,
                            interaction: {
                                hex: !1,
                                rgba: !0,
                                hsva: !1,
                                input: !0,
                                clear: !1,
                                save: !1,
                            },
                        },
                    },
                ],
            ],
            p = [];
        let f = null;
        for (const [i, b] of E) {
            const c = document.createElement("button");
            (c.innerHTML = i),
                p.push(c),
                c.addEventListener("click", () => {
                    const m = document.createElement("p");
                    e.appendChild(m), f && f.destroyAndRemove();
                    for (const a of p)
                        a.classList[a === c ? "add" : "remove"]("active");
                    (f = new Pickr(
                        Object.assign(
                            { el: m, theme: i, default: "#589bff" },
                            b
                        )
                    )),
                        f.on("changestop", (a, v) => {
                            let t = v.getColor().toRGBA();
                            document
                                .querySelector("html")
                                .style.setProperty(
                                    "--primary-rgb",
                                    `${Math.floor(t[0])}, ${Math.floor(
                                        t[1]
                                    )}, ${Math.floor(t[2])}`
                                ),
                                localStorage.setItem(
                                    "primaryRGB",
                                    `${Math.floor(t[0])}, ${Math.floor(
                                        t[1]
                                    )}, ${Math.floor(t[2])}`
                                );
                        });
                }),
                l.appendChild(c);
        }
        p[0].click();
        const L = [];
        let k = null;
        for (const [i, b] of E) {
            const c = document.createElement("button");
            (c.innerHTML = i),
                L.push(c),
                c.addEventListener("click", () => {
                    const m = document.createElement("p");
                    n.appendChild(m), k && k.destroyAndRemove();
                    for (const a of p)
                        a.classList[a === c ? "add" : "remove"]("active");
                    (k = new Pickr(
                        Object.assign(
                            { el: m, theme: i, default: "#589bff" },
                            b
                        )
                    )),
                        k.on("changestop", (a, v) => {
                            let t = v.getColor().toRGBA(),
                                h = document.querySelector("html");
                            h.style.setProperty(
                                "--body-bg-rgb",
                                `${t[0]}, ${t[1]}, ${t[2]}`
                            ),
                                document
                                    .querySelector("html")
                                    .style.setProperty(
                                        "--body-bg-rgb2",
                                        `${t[0] + 14}, ${t[1] + 14}, ${
                                            t[2] + 14
                                        }`
                                    ),
                                document
                                    .querySelector("html")
                                    .style.setProperty(
                                        "--light-rgb",
                                        `${t[0] + 14}, ${t[1] + 14}, ${
                                            t[2] + 14
                                        }`
                                    ),
                                document
                                    .querySelector("html")
                                    .style.setProperty(
                                        "--form-control-bg",
                                        `rgb(${t[0] + 14}, ${t[1] + 14}, ${
                                            t[2] + 14
                                        })`
                                    ),
                                document
                                    .querySelector("html")
                                    .style.setProperty(
                                        "--gray-3",
                                        `rgb(${t[0] + 14}, ${t[1] + 14}, ${
                                            t[2] + 14
                                        })`
                                    ),
                                localStorage.removeItem("bgtheme"),
                                h.setAttribute("data-theme-mode", "dark"),
                                h.setAttribute("data-menu-styles", "dark"),
                                h.setAttribute("data-header-styles", "dark"),
                                (document.querySelector(
                                    "#switcher-dark-theme"
                                ).checked = !0),
                                (document.querySelector(
                                    "#switcher-menu-dark"
                                ).checked = !0),
                                (document.querySelector(
                                    "#switcher-header-dark"
                                ).checked = !0),
                                localStorage.setItem(
                                    "bodyBgRGB",
                                    `${t[0]}, ${t[1]}, ${t[2]}`
                                ),
                                localStorage.setItem(
                                    "bodylightRGB",
                                    `${t[0] + 14}, ${t[1] + 14}, ${t[2] + 14}`
                                );
                        });
                }),
                u.appendChild(c);
        }
        L[0].click();
    }
    function s() {
        let e = document.querySelector("html");
        e.getAttribute("data-theme-mode") === "dark"
            ? (e.setAttribute("data-theme-mode", "light"),
              e.setAttribute("data-header-styles", "light"),
              e.setAttribute("data-menu-styles", "light"),
              localStorage.getItem("primaryRGB") || e.setAttribute("style", ""),
              e.removeAttribute("data-bg-theme"),
              document.querySelector("#switcher-canvas") &&
                  ((document.querySelector("#switcher-light-theme").checked =
                      !0),
                  (document.querySelector("#switcher-menu-light").checked =
                      !0)),
              document
                  .querySelector("html")
                  .style.removeProperty(
                      "--body-bg-rgb",
                      localStorage.bodyBgRGB
                  ),
              e.style.removeProperty("--body-bg-rgb2"),
              e.style.removeProperty("--light-rgb"),
              e.style.removeProperty("--form-control-bg"),
              e.style.removeProperty("--input-border"),
              document.querySelector("#switcher-canvas") &&
                  ((document.querySelector("#switcher-header-light").checked =
                      !0),
                  (document.querySelector("#switcher-menu-light").checked = !0),
                  (document.querySelector("#switcher-light-theme").checked =
                      !0),
                  (document.querySelector("#switcher-background4").checked =
                      !1),
                  (document.querySelector("#switcher-background3").checked =
                      !1),
                  (document.querySelector("#switcher-background2").checked =
                      !1),
                  (document.querySelector("#switcher-background1").checked =
                      !1),
                  (document.querySelector("#switcher-background").checked =
                      !1)),
              localStorage.removeItem("menodarktheme"),
              localStorage.removeItem("menoMenu"),
              localStorage.removeItem("menoHeader"),
              localStorage.removeItem("bodylightRGB"),
              localStorage.removeItem("bodyBgRGB"),
              e.setAttribute("data-header-styles", "light"))
            : (e.setAttribute("data-theme-mode", "dark"),
              e.setAttribute("data-header-styles", "dark"),
              localStorage.getItem("primaryRGB") || e.setAttribute("style", ""),
              e.setAttribute("data-menu-styles", "dark"),
              document.querySelector("#switcher-canvas") &&
                  ((document.querySelector("#switcher-dark-theme").checked =
                      !0),
                  (document.querySelector("#switcher-menu-dark").checked = !0),
                  (document.querySelector("#switcher-header-dark").checked =
                      !0),
                  (document.querySelector("#switcher-menu-dark").checked = !0),
                  (document.querySelector("#switcher-header-dark").checked =
                      !0),
                  (document.querySelector("#switcher-dark-theme").checked = !0),
                  (document.querySelector("#switcher-background4").checked =
                      !1),
                  (document.querySelector("#switcher-background3").checked =
                      !1),
                  (document.querySelector("#switcher-background2").checked =
                      !1),
                  (document.querySelector("#switcher-background1").checked =
                      !1),
                  (document.querySelector("#switcher-background").checked =
                      !1)),
              localStorage.setItem("menodarktheme", "true"),
              localStorage.setItem("menoMenu", "dark"),
              localStorage.setItem("menoHeader", "dark"),
              localStorage.removeItem("bodylightRGB"),
              localStorage.removeItem("bodyBgRGB"));
    }
    document.querySelector(".layout-setting").addEventListener("click", s),
        document.addEventListener("DOMContentLoaded", function () {
            var e = document.querySelectorAll("[data-trigger]");
            for (let n = 0; n < e.length; ++n) {
                var l = e[n];
                new Choices(l, {
                    allowHTML: !0,
                    placeholderValue: "This is a placeholder set in the config",
                    searchPlaceholderValue: "Search",
                });
            }
        }),
        (document.getElementById("year").innerHTML = new Date().getFullYear()),
        Waves.attach(".btn-wave", ["waves-light"]),
        Waves.init();
    let w = ".card";
    document.querySelectorAll('[data-bs-toggle="card-remove"]').forEach((e) => {
        e.addEventListener("click", function (l) {
            return l.preventDefault(), this.closest(w).remove(), !1;
        });
    }),
        document
            .querySelectorAll('[data-bs-toggle="card-fullscreen"]')
            .forEach((e) => {
                e.addEventListener("click", function (l) {
                    let u = this.closest(w);
                    return (
                        u.classList.toggle("card-fullscreen"),
                        u.classList.remove("card-collapsed"),
                        l.preventDefault(),
                        !1
                    );
                });
            });
    var g = 1;
    setInterval(() => {
        document.querySelectorAll(".count-up").forEach((e) => {
            e.getAttribute("data-count") >= g &&
                ((g = g + 1), (e.innerText = g));
        });
    }, 10);
    const S = document.querySelector(".scrollToTop"),
        q = document.documentElement;
    (window.onscroll = () => {
        q.scrollHeight - q.clientHeight,
            window.scrollY > 100
                ? (S.style.display = "flex")
                : (S.style.display = "none");
    }),
        (S.onclick = () => {
            window.scrollTo(0, 0);
        });
    var B = document.getElementById("header-notification-scroll");
    new SimpleBar(B, { autoHide: !0 });
    var $ = document.getElementById("header-cart-items-scroll");
    new SimpleBar($, { autoHide: !0 });
    const A = new autoComplete({
        selector: "#header-search",
        data: {
            src: [
                "What is the meaning of life?",
                "How does gravity work?",
                "Why is the sky blue?",
                "What is the capital of France?",
                "Who painted the Mona Lisa?",
                "What is the speed of light?",
                "Why do we dream?",
                "How do birds fly?",
                "What is the largest mammal?",
                "Why do leaves change color in the fall?",
            ],
            cache: !0,
        },
        resultItem: { highlight: !0 },
        events: {
            input: {
                selection: (e) => {
                    const l = e.detail.selection.value;
                    A.input.value = l;
                },
            },
        },
    });
})();
var d = document.documentElement;
window.openFullscreen = function () {
    let r = document.querySelector(".full-screen-open"),
        o = document.querySelector(".full-screen-close");
    !document.fullscreenElement &&
    !document.webkitFullscreenElement &&
    !document.msFullscreenElement
        ? (d.requestFullscreen
              ? d.requestFullscreen()
              : d.webkitRequestFullscreen
              ? d.webkitRequestFullscreen()
              : d.msRequestFullscreen && d.msRequestFullscreen(),
          o.classList.add("d-block"),
          o.classList.remove("d-none"),
          r.classList.add("d-none"))
        : (document.exitFullscreen
              ? document.exitFullscreen()
              : document.webkitExitFullscreen
              ? document.webkitExitFullscreen()
              : document.msExitFullscreen && document.msExitFullscreen(),
          o.classList.remove("d-block"),
          r.classList.remove("d-none"),
          o.classList.add("d-none"),
          r.classList.add("d-block"));
};
let I = document.querySelectorAll(".toggle");
I.forEach((r) =>
    r.addEventListener("click", () => {
        r.classList.toggle("on");
    })
);
const R = document.querySelectorAll(".dropdown-item-close");
R.forEach((r) => {
    r.addEventListener("click", (o) => {
        if (
            (o.preventDefault(),
            o.stopPropagation(),
            r.parentNode.parentNode.parentNode.parentNode.parentNode.remove(),
            (document.getElementById("cart-data").innerText = `${
                document.querySelectorAll(".dropdown-item-close").length
            } Items`),
            (document.getElementById("cart-icon-badge").innerText = `${
                document.querySelectorAll(".dropdown-item-close").length
            }`),
            console.log(
                document.getElementById("header-cart-items-scroll").children
                    .length
            ),
            document.querySelectorAll(".dropdown-item-close").length == 0)
        ) {
            let y = document.querySelector(".empty-header-item"),
                s = document.querySelector(".empty-item");
            y.classList.add("d-none"), s.classList.remove("d-none");
        }
    });
});
const P = document.querySelectorAll(".dropdown-item-close1");
P.forEach((r) => {
    r.addEventListener("click", (o) => {
        if (
            (o.preventDefault(),
            o.stopPropagation(),
            r.parentNode.parentNode.parentNode.parentNode.remove(),
            (document.getElementById("notifiation-data").innerText = `${
                document.querySelectorAll(".dropdown-item-close1").length
            } Unread`),
            document.querySelectorAll(".dropdown-item-close1").length == 0)
        ) {
            let y = document.querySelector(".empty-header-item1"),
                s = document.querySelector(".empty-item1");
            y.classList.add("d-none"), s.classList.remove("d-none");
        }
    });
});
