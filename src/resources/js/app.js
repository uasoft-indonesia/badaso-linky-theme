import Alpine from "alpinejs";

function loadDataContent() {
  return {
    slug: ["linky"],
    navbar: null,
    listlink: null,
    content: "",
    configuration: [],
    favicon: "",
    copyright: "",
    loadLandingPage() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.value;
          this.navbar = this.content.navbarlink.data;
          this.listlink = this.content.listlink.data;
          this.copyright = this.content.copyright.data;
        });
    },
    loadDataConfiguration() {
      fetch(`/badaso-api/v1/configurations/fetch`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.configuration;
          for (let index = 0; index < this.content.length; index++) {
            if (this.content[index]["group"] == "linkyTheme") {
              this.configuration = this.content[index]["value"];
              if (this.content[index]["key"] == "linkyThemeFavicon") {
                this.favicon = this.content[index]["value"];
              }
            }
          }

          let favicon = document.getElementById("favicon");
          favicon.href = this.favicon;
        });
    },
  };
}

const splash = document.querySelector(".splash");
document.addEventListener("DOMContentLoaded", (e) => {
  setTimeout(() => {
    splash.classList.add("display-none");
  }, 2000);
});

window.loadDataContent = loadDataContent;
window.Alpine = Alpine;
Alpine.start();
