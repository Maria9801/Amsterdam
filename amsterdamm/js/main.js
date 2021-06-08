const prev = document.getElementById('btn_prev'),
      next = document.getElementById('btn_next'),
      slides = document.querySelectorAll('.slide');

let index = 0;

  
const activeSlide = n =>{
  console.log(n);
    for( slide of slides){
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}

const prepereCurrentSlide = ind =>{
  activeSlide(ind);
}

const nextSlide = () => {
  if(index == slides.length -1){
     index = 0;
        prepereCurrentSlide(index);
        
    } else{
        index++;
     prepereCurrentSlide(index);
    }
}


const prevSlide = () => {
   if(index == 0){
        index = slides.length -1
        prepereCurrentSlide(index);
    }else{
        index--;
        prepereCurrentSlide(index);
    }
}


next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);

 /***************************************************************************************/
 $(function () {
    $('.menu_open').click(function () {
      $('.menu').toggleClass('show_menu')

    })
 });
 /***************************************************************************************/ 
