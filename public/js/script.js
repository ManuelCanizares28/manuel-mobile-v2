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
    const dropMenu = document.querySelector('.dropdown-products');
    const openProducts = document.getElementById('menu-products');

    openMenu.addEventListener('click', function() {
        menuContent.style.display = 'block';
        openMenu.style.display = 'none';
        closeMenu.style.display = 'block';
    });

    closeMenu.addEventListener('click', function() {
        menuContent.style.display = 'none';
        openMenu.style.display = 'block';
        closeMenu.style.display = 'none';
    });

    openProducts.addEventListener('click', function() {
        dropMenu.style.display = 'block';
    });
};

myFunction();
functionMenu();

});