let img = document.getElementById('parallax');

document.addEventListener('scroll',()=>{
    console.log(scrollY);
    
    img.style.marginTop =scrollY * 2.5 + 'px';
    img.style.transform ='rotate('+scrollY * .5 +'deg)';
    // img.style.transform ='scale('+scrollY * -.500 +')';

  

    
});



