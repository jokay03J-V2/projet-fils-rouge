<x-app-layout>

   <!-- header -->
   <!------------------------------------------------------------------------------------------------------>
   <x-slot name="header">
      <h1 class="font-title text-4xl m-2">home page</h1>
      <p class="font-sans text-lg w-10/12 text-center my-5">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, consequuntur! Excepturi dolores tempore
         debitis, placeat fugiat error laborum voluptatem aperiam illum nam recusandae! Saepe quam officiis id eius ex
         ducimus.
      </p>
   </x-slot>

   <!------------------------------------------------------------------------------------------------------>
   <!-- main content -->
   <!------------------------------------------------------------------------------------------------------>
   <section class="flex flex-col justify-center items-center">
      <h2 class="lg:self-start font-title text-3xl m-3">Fonctionnalitées</h2>
      <a href="{{route("information.point")}}" class="w-11/12 my-10">
         <!-- Home card -->
         <!------------------------------------------------------------------------------------------------------>
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start  justify-center w-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/information_point.jpg" alt="/"
               class="w-12/12 min-h-40 lg:w-3/12 rounded-2xl lg:min-h-50">
            <hgroup class="w-10/12 p-2 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">point d'informations</h3>
               <p class="m-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
                  rem
                  nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
                  perferendis?
               </p>
            </hgroup>
         </article>
      </a>
      <!------------------------------------------------------------------------------------------------------>

      <!------------------------------------------------------------------------------------------------------>
      <a href="{{route("page.advices")}}" class="w-11/12 my-10">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/conseil.jpg" alt="/" class="w-12/12 min-h-40 lg:w-3/12 rounded-2xl lg:min-h-50">
            <hgroup class="w-10/12 p-2 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">conseils</h3>
               <p class="m-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
                  rem
                  nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
                  perferendis?
               </p>
            </hgroup>
         </article>
      </a>
      <!------------------------------------------------------------------------------------------------------>

      <!------------------------------------------------------------------------------------------------------>
      <a href="{{route('page.find_practitioners')}}" class="w-11/12 my-10">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/practitioners.jpg" alt="/"
               class="w-12/12 min-h-40 lg:w-3/12 rounded-2xl lg:min-h-50">
            <hgroup class="w-10/12 p-2 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Praticienns</h3>
               <p class="m-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
                  rem
                  nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
                  perferendis?
               </p>
            </hgroup>
         </article>
      </a>
      <!------------------------------------------------------------------------------------------------------>

      <!------------------------------------------------------------------------------------------------------>
      <a href="{{route('page.numbers')}}" class="w-11/12 my-10">
         <article
            class="flex flex-col lg:flex-row items-center lg:items-start justify-center w-full rounded-2xl border-2 border-tonal">
            <img src="./img_folder/emergency_number.jpg" alt="/"
               class="w-12/12 min-h-40 lg:w-3/12 rounded-2xl lg:min-h-50">
            <hgroup class="w-10/12 p-2 text-center lg:text-start">
               <h3 class="text-secondary text-3xl font-title m-2">Numéro d’urgence</h3>
               <p class="m-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi molestiae blanditiis tenetur tempore
                  rem
                  nam aliquid eaque soluta amet numquam rerum nobis qui, et animi excepturi incidunt architecto ipsa
                  perferendis?
               </p>
            </hgroup>
         </article>
      </a>
      <!------------------------------------------------------------------------------------------------------>
   </section>
   <!------------------------------------------------------------------------------------------------------>
</x-app-layout>