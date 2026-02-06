let img = document.getElementById('parallax');

document.addEventListener('scroll',()=>{
    console.log(scrollY);
    let numb = Math.floor(scrollY);
    console.log(numb);
    if(numb > 250){
        img.classList.add('active');
    }else{
        img.classList.remove('active');

    }
    img.style.marginTop =scrollY * 2.5 + 'px';
    img.style.transform ='rotate('+scrollY * .5 +'deg)';

    // img.style.transform ='scale('+scrollY * -.500 +')';

  

    
});



