document.addEventListener('DOMContentLoaded', function() {

function myFunction() {
    const makingProduction = document.querySelector('.making-production');
    const shoeModeling = document.querySelector('.shoe-modeling');
    const shoeCreation = document.querySelector('.shoe-creation');
    const insoleDesign = document.querySelector('.insole-design');

    makingProduction.addEventListener('click', function() {
        makingProduction.classList.add('border-show');
        shoeModeling.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
    });
    shoeModeling.addEventListener('click', function() {
        makingProduction.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
        shoeModeling.classList.add('border-show');
        makingProduction.classList.remove('making-production');
    });
    shoeCreation.addEventListener('click', function() {
        shoeCreation.classList.add('border-show');
        makingProduction.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
        shoeModeling.classList.remove('border-show');
        makingProduction.classList.remove('making-production');
    });

    insoleDesign.addEventListener('click', function() {
        insoleDesign.classList.add('border-show');
        makingProduction.classList.remove('border-show');
        shoeModeling.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        makingProduction.classList.remove('making-production');
    });
};

function functionMenu () {
    const openMenu = document.querySelector('.open-menu');
    const closeMenu = document.querySelector('.close-menu');
    const menuContent = document.querySelector('.container-header');
    const dropProducts = document.querySelector('.dropdown-products');
    const openProducts = document.getElementById('menu-products');
    const iconoChevron = document.querySelector('.chevron-down');
    const openPlans = document.getElementById('menu-plans');
    const dropPlans = document.querySelector('.dropdown-plans');
    const iconoPlans = document.querySelector('.chevron-down-plans');
    const openExplore = document.getElementById('menu-explore');
    const dropExplore = document.querySelector('.dropdown-explore');
    const iconoExplore = document.querySelector('.chevron-down-explore');
    const designShoe = document.querySelector('.shoe-design-a');
    const closeDesign = document.querySelector('.close-design');
    const dropDesign = document.querySelector('.dropdown-design');

    openMenu.addEventListener('click', function() {
        menuContent.classList.toggle('show-container');
        openMenu.style.display = 'none';
        closeMenu.classList.toggle('show-icons');
    });

    closeMenu.addEventListener('click', function() {
        closeMenu.classList.remove('show-icons');
        openMenu.style.display = 'block';
        menuContent.classList.remove('show-container');
    });

    openProducts.addEventListener('click', function() {
        if (dropProducts.style.display === 'block') {
            dropProducts.style.display = 'none';
        } else {
            dropProducts.style.display = 'block';
        }

        iconoChevron.classList.toggle('rotate-up-products');
    });

    openPlans.addEventListener('click', function() {
        if (dropPlans.style.display === 'block') {
            dropPlans.style.display = 'none';
        } else {
            dropPlans.style.display = 'block';
        }

        iconoPlans.classList.toggle('rotate-up-plans');
    });

    openExplore.addEventListener('click', function() {
        if(dropExplore.style.display === 'block') {
            dropExplore.style.display = 'none';
        } else {
            dropExplore.style.display = 'block';
        }

        iconoExplore.classList.toggle('rotate-up-explore');
    });

    designShoe.addEventListener('click', function() {
        if(dropDesign.style.display === 'block') {
            dropDesign.style.display = 'none';
        } else {
            dropDesign.style.display = 'block';
        }
    });

    designShoe.addEventListener('click', function() {
        designShoe.classList.toggle('hover');
        if(closeDesign.style.display === 'block') {
            closeDesign.style.display = 'none';
        } else {
            closeDesign.style.display = 'block';
        }
    });

    closeDesign.addEventListener('click', function() {
        dropDesign.style.display = 'none';
        designShoe.classList.remove('hover');
        closeDesign.style.display = 'none';
    });
};

myFunction();
functionMenu();

});