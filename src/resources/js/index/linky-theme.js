import Alpine from "alpinejs";
import { list } from "postcss";

function loadDataContent(){
    let token = localStorage.token;
    return {
      slug: ["linky"],
      navbar: null,
      listlink: null,
      content: null,
      configuration: {},
      navbartitle: "",
      loadLandingPage() {
        fetch(
          `/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`
        )
          .then((res) => res.json())
          .then((data) => {
            this.content = data.data.value;
            this.navbar = this.content.navbarlink.data;
            this.listlink = this.content.listlink.data;

          });
      },
      loadDataConfiguration() {
        fetch("/badaso-api/v1/configurations", {
          method: "GET",
          headers: new Headers({
            Authorization: "bearer " + token,
          }),
        })
          .then((res) => res.json())
          .then((data) => {
            const content = data.data;
            content.configurations.forEach((element, index) => {
              if (element.group == "linkyTheme") {
                if (element.key == "linkyThemeNavbarTitle") {
                  this.configuration["title"] = element.value;
                  this.navbartitle = this.configuration.title;
                }
              }
            });
          });
      },
    };
}

window.loadDataContent = loadDataContent;
window.Alpine = Alpine;
Alpine.start();
