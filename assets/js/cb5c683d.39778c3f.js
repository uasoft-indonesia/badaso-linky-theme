"use strict";(self.webpackChunkdoc=self.webpackChunkdoc||[]).push([[249],{3905:function(t,e,n){n.d(e,{Zo:function(){return s},kt:function(){return u}});var r=n(7294);function a(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}function i(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function o(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?i(Object(n),!0).forEach((function(e){a(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function l(t,e){if(null==t)return{};var n,r,a=function(t,e){if(null==t)return{};var n,r,a={},i=Object.keys(t);for(r=0;r<i.length;r++)n=i[r],e.indexOf(n)>=0||(a[n]=t[n]);return a}(t,e);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(t);for(r=0;r<i.length;r++)n=i[r],e.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(t,n)&&(a[n]=t[n])}return a}var p=r.createContext({}),c=function(t){var e=r.useContext(p),n=e;return t&&(n="function"==typeof t?t(e):o(o({},e),t)),n},s=function(t){var e=c(t.components);return r.createElement(p.Provider,{value:e},t.children)},m={inlineCode:"code",wrapper:function(t){var e=t.children;return r.createElement(r.Fragment,{},e)}},g=r.forwardRef((function(t,e){var n=t.components,a=t.mdxType,i=t.originalType,p=t.parentName,s=l(t,["components","mdxType","originalType","parentName"]),g=c(n),u=a,d=g["".concat(p,".").concat(u)]||g[u]||m[u]||i;return n?r.createElement(d,o(o({ref:e},s),{},{components:n})):r.createElement(d,o({ref:e},s))}));function u(t,e){var n=arguments,a=e&&e.mdxType;if("string"==typeof t||a){var i=n.length,o=new Array(i);o[0]=g;var l={};for(var p in e)hasOwnProperty.call(e,p)&&(l[p]=e[p]);l.originalType=t,l.mdxType="string"==typeof t?t:a,o[1]=l;for(var c=2;c<i;c++)o[c]=n[c];return r.createElement.apply(null,o)}return r.createElement.apply(null,n)}g.displayName="MDXCreateElement"},4845:function(t,e,n){n.r(e),n.d(e,{frontMatter:function(){return l},contentTitle:function(){return p},metadata:function(){return c},toc:function(){return s},default:function(){return g}});var r=n(7462),a=n(3366),i=(n(7294),n(3905)),o=["components"],l={sidebar_position:2},p="Google Analytics Setup",c={unversionedId:"getting-started/google-analytics-setup",id:"getting-started/google-analytics-setup",title:"Google Analytics Setup",description:"Getting credentials JSON",source:"@site/docs/getting-started/google-analytics-setup.md",sourceDirName:"getting-started",slug:"/getting-started/google-analytics-setup",permalink:"/getting-started/google-analytics-setup",editUrl:"https://github.com/uasoft-indonesia/badaso-linky-theme/edit/main/website/docs/getting-started/google-analytics-setup.md",tags:[],version:"current",sidebarPosition:2,frontMatter:{sidebar_position:2},sidebar:"tutorialSidebar",previous:{title:"Installation",permalink:"/getting-started/installation"},next:{title:"Override Controller",permalink:"/customization/override-controller"}},s=[{value:"Getting credentials JSON",id:"getting-credentials-json",children:[],level:2},{value:"Granting permissions to your Analytics property",id:"granting-permissions-to-your-analytics-property",children:[],level:2},{value:"Getting the ID that you need.",id:"getting-the-id-that-you-need",children:[{value:"View ID",id:"view-id",children:[],level:3},{value:"Property ID / Tracking ID",id:"property-id--tracking-id",children:[],level:3},{value:"Account ID",id:"account-id",children:[],level:3},{value:"Web Property ID",id:"web-property-id",children:[],level:3}],level:2}],m={toc:s};function g(t){var e=t.components,n=(0,a.Z)(t,o);return(0,i.kt)("wrapper",(0,r.Z)({},m,n,{components:e,mdxType:"MDXLayout"}),(0,i.kt)("h1",{id:"google-analytics-setup"},"Google Analytics Setup"),(0,i.kt)("h2",{id:"getting-credentials-json"},"Getting credentials JSON"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Go to ",(0,i.kt)("a",{parentName:"p",href:"http://analytics.google.com/"},"Google Analytics")," page.")),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Login using Google Account.")),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"If you dont have an Analytics account before, fill in the form like image below. "),(0,i.kt)("ul",{parentName:"li"},(0,i.kt)("li",{parentName:"ul"},"Fill in account name. On ",(0,i.kt)("strong",{parentName:"li"},"Account Data Sharing Settings"),", check options that you want.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/f6grepG.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ul"},"Fill in poperty name, reporting time zone and currency.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/tqjv2JS.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ul"},"Click ",(0,i.kt)("strong",{parentName:"li"},"Show advanced options"),"."),(0,i.kt)("li",{parentName:"ul"},"Fill in website URL with your site URL. Don't forget to check ",(0,i.kt)("strong",{parentName:"li"},"Create a Universal Analytics property only"),".\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/sBBNTQh.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ul"},"Check anything that your business is about.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/nEDZcGA.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ul"},"After that, click the ",(0,i.kt)("strong",{parentName:"li"},"Create")," button and modal will appear then press ",(0,i.kt)("strong",{parentName:"li"},"I Accept")," button."))),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Go to ",(0,i.kt)("a",{parentName:"p",href:"https://console.cloud.google.com/apis/dashboard"},"Google API")," and select a project that you want from the header.")),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Go to ",(0,i.kt)("a",{parentName:"p",href:"https://console.cloud.google.com/apis/credentials"},"Credential")," and create a new credential. Click ",(0,i.kt)("strong",{parentName:"p"},"Create Credentials")," and select ",(0,i.kt)("strong",{parentName:"p"},"Service account"),"."))),(0,i.kt)("p",null,(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/nS7m6rZ.png",alt:"Imgur"})),(0,i.kt)("ol",{start:6},(0,i.kt)("li",{parentName:"ol"},"Fill in the form with service account name and account ID that you like. After that, click ",(0,i.kt)("strong",{parentName:"li"},"Create")," button and click ",(0,i.kt)("strong",{parentName:"li"},"Done"),".")),(0,i.kt)("p",null,(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/PhCaP9Z.png",alt:"Imgur"})),(0,i.kt)("ol",{start:7},(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"To obtain service account credential JSON, press edit on the new created service account.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/pXbDdHy.png",alt:"Imgur"}))),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Select ",(0,i.kt)("strong",{parentName:"p"},"KEYS")," menu from the tab. Click Add Key and select ",(0,i.kt)("strong",{parentName:"p"},"Create new key"),". After that, select JSON and click ",(0,i.kt)("strong",{parentName:"p"},"Create")," button.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/oexLid9.png",alt:"Imgur"}))),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"After you create the key, it'll automatically download the key.")),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Place your .json key to storage directory like below."))),(0,i.kt)("pre",null,(0,i.kt)("code",{parentName:"pre",className:"language-php"},"\ud83d\udce6 Your Project\n \u2523 \ud83d\udcc2 storage\n \u2503 \u2523 \ud83d\udcc2 app\n \u2503 \u2503 \u2523 \ud83d\udcc2 analytics // If the directory doesn't exists, just create it\n \u2503 \u2503 \u2503 \u2517 \ud83d\udcdc service-account-credentials.json // Filename must be the same\n")),(0,i.kt)("h2",{id:"granting-permissions-to-your-analytics-property"},"Granting permissions to your Analytics property"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},"Go to ",(0,i.kt)("a",{parentName:"li",href:"http://analytics.google.com/"},"Google Analytics")," page."),(0,i.kt)("li",{parentName:"ol"},"Select ",(0,i.kt)("strong",{parentName:"li"},"Admin")," menu from sidebar. Select ",(0,i.kt)("strong",{parentName:"li"},"View User Management"),".\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/PeKLoZ3.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ol"},"New window will appear, after that click ",(0,i.kt)("strong",{parentName:"li"},"Add users"),".\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/BCVGUH4.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ol"},"Open the credential that we get before, search for ",(0,i.kt)("inlineCode",{parentName:"li"},"client_email"),". Copy the email.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/A7CPWQB.png",alt:"Imgur"})),(0,i.kt)("li",{parentName:"ol"},"Paste it in the ",(0,i.kt)("strong",{parentName:"li"},"Email addresses")," field and select permission that you want. ",(0,i.kt)("strong",{parentName:"li"},"You must check the Read & Analyze permissions"),". After that, press ",(0,i.kt)("strong",{parentName:"li"},"Done")," button.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/gzDv7sb.png",alt:"Imgur"}))),(0,i.kt)("h2",{id:"getting-the-id-that-you-need"},"Getting the ID that you need."),(0,i.kt)("h3",{id:"view-id"},"View ID"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Select Admin menu from sidebar and select View Settings.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/07rzLN4.png",alt:"Imgur"}))),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"There you have it.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/hsLpo0A.png",alt:"Imgur"})))),(0,i.kt)("h3",{id:"property-id--tracking-id"},"Property ID / Tracking ID"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},"Select Admin menu from sidebar and there you have it.\n",(0,i.kt)("img",{parentName:"li",src:"https://i.imgur.com/LdY7YVz.png",alt:"Imgur"}))),(0,i.kt)("h3",{id:"account-id"},"Account ID"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Select Admin menu from sidebar and select Account Settings.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/G34Uwxs.png",alt:"Imgur"}))),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"There you have it.\n",(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/dCvEycA.png",alt:"Imgur"})))),(0,i.kt)("h3",{id:"web-property-id"},"Web Property ID"),(0,i.kt)("ol",null,(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Open ",(0,i.kt)("a",{parentName:"p",href:"http://analytics.google.com/"},"Google Analytics")," page.")),(0,i.kt)("li",{parentName:"ol"},(0,i.kt)("p",{parentName:"li"},"Look at the page URL. The web property ID start with ",(0,i.kt)("strong",{parentName:"p"},"w"),". Usually it has 9 character. For example:\n",(0,i.kt)("a",{parentName:"p",href:"https://analytics.google.com/analytics/web/?authuser=1#/report-home/a000000000w299999997p000000000"},"https://analytics.google.com/analytics/web/?authuser=1#/report-home/a000000000w299999997p000000000")),(0,i.kt)("p",{parentName:"li"},"   The web property ID for that account is 299999997."))),(0,i.kt)("p",null,(0,i.kt)("img",{parentName:"p",src:"https://i.imgur.com/XWimJm5.png",alt:"Imgur"})))}g.isMDXComponent=!0}}]);