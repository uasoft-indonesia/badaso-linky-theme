import Alpine from "alpinejs";
import { list } from "postcss";

function loadDataContent(){
    return{
        slug: ["linky"],
        navbar:null,
        listlink:null,
        content:null,
        loadLandingPage(){
             fetch(
               `/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`
             ).then((res) => res.json())
             .then((data)=> {
                this.content = data.data.value;
                this.navbar = this.content.navbarlink.data;
                this.listlink = this.content.listlink.data;
                console.log(this.listlink, "tes")
             });

        },
    };
}

window.loadDataContent = loadDataContent;
window.Alpine = Alpine;
Alpine.start();
