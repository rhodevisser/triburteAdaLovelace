<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/header.php') ?>

<!-- 1. Open een foreach loop: Gebruik de variabele die je vanuit je controller stuurt (bijv. $innovators).

2. Maak een <div> voor het kaartje: Geef deze een class (bijv. card).

3. Voeg de data toe: Gebruik de PHP tags < ?= $vrouw['naam'] ?> om de naam en de samenvatting in het kaartje te zetten.

4. Maak de link: Zorg dat de <a href="..."> linkt naar je biografie-pagina, en geef het ID mee (zoals we eerder bespraken). -->

<main>
<div class="py-24 sm:py-32 hall-of-fame-container">
    <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">

        <ul role="list" 
            class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Leslie Alexander
                        </h3>
                        <p class="paragraph-styling">
                            Co-Founder / CEO
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="resources/images/Ada_Lovelace_daguerreotype_by_Antoine_Claudet_1843_-_cropped.png" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Ada Lovelace
                        </h3>
                        <p class="paragraph-styling">
                            First Computer Programmer
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Dries Vincent
                        </h3>
                        <p class="paragraph-styling">
                            Business Relations
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Lindsay Walton
                        </h3>
                        <p class="paragraph-styling">
                            Front-end Developer
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Courtney Henry
                        </h3>
                        <p class="paragraph-styling">
                            Designer
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex items-center gap-x-6">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                        alt="" 
                        class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                    <div>
                        <h3 class="header-two-styling">
                            Tom Cook
                        </h3>
                        <p class="paragraph-styling">
                            Director of Product
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
    <div class="introduction-container">
        <div class="text-introduction-container">
        </div>
    </div>
     <div class="newsletter-container">
        <div class="newsletter-box">
            <div class="title-paragraph-box-for-styling">
                <h2 class="title-text-newsletter">
                    Wil je meer weten over vrouwen in de technologie?
                </h2>
                <p class="paragraph-text-newsletter paragraph-styling">
                    Schrijf je dan in voor onze nieuwsbrief en blijf op de hoogte van de laatste ontwikkelingen,
                    evenementen en inspirerende verhalen van vrouwen in de technologie.
                </p>
            </div>
            <button class="get-newsletter">
                Meldt je hier aan voor de nieuwsbrief!
            </button>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>