 <div class="grid grid-cols-1 content-center gap-4 max-w-[832px] mx-auto pb-10">
    <template x-for="listdata in listlink" >
     <a href="https://tailwindcss.com/" :href="listdata.url.data.url">
         <div class="bg-white  rounded-xl  cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300">
             <div class="flex justify-between p-5">
                 <div class="flex justify-start">
                     <div class="flex flex-col">
                         <div class="flex items-center">
                             <span class="text-blue-400  text-sm font-normal capitalize" x-text="listdata.title.data">Gurusahambot</span>
                         </div>
                         <div class="flex items-center">
                             <span class="text-blue-300 text-sm" x-text="listdata.subtitle.data">Google Play</span>
                         </div>
                     </div>

                 </div>
                 <div class="flex justify-end items-center">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="20px"  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" version="1.1" xml:space="preserve"><g id="_x37_17-_next__x2C__arrow__x2C__right_arrow__x2C__direction__x2C_"><g><path d="M146.662,26.814L358.221,238.27c10.755,10.222,10.755,26.193,0,36.414L146.662,486.139" style="fill:none;stroke:#6495ED;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;"/></g></g><g id="Layer_1"/></svg>
                 </div>
             </div>

         </div>
     </a>
    </template>


 </div>
