function myFunction() {
    const makingProduction = document.querySelector('.making-production');
    const shoeModeling = document.querySelector('.shoe-modeling');
    const shoeCreation = document.querySelector('.shoe-creation');
    const insoleDesign = document.querySelector('.insole-design');

    if(makingProduction.addEventListener('click', function() {
        makingProduction.classList.add('border-show');
        shoeModeling.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
    }));
    else if (shoeModeling.addEventListener('click', function() {
        makingProduction.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
        shoeModeling.classList.add('border-show');
        makingProduction.classList.remove('making-production');
    }));
    else if (shoeCreation.addEventListener('click', function() {
        shoeCreation.classList.add('border-show');
        makingProduction.classList.remove('border-show');
        insoleDesign.classList.remove('border-show');
        shoeModeling.classList.remove('border-show');
        makingProduction.classList.remove('making-production');
    }));

    else if (insoleDesign.addEventListener('click', function() {
        insoleDesign.classList.add('border-show');
        makingProduction.classList.remove('border-show');
        shoeModeling.classList.remove('border-show');
        shoeCreation.classList.remove('border-show');
        makingProduction.classList.remove('making-production');
    }));
};

myFunction();