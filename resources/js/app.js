import React, {useState} from 'react'
import { BsChevronCompacLeft, BsChevronCompacRight } from 'react-icons/bs';
import {RxDorFilled} from 'react-icons/rx'
function App() {
    const slides = [
      {
        urL: ' '
      }

    ];

   const [currentIndex, setCurrentIndex] = useState(0)

   const prevSlide = () => {
    const isFirstSlide = currentIndex === 0;
    const newIndex = isFirstSlide ? slides.Lenght -1 : currentIndex - 1;
    setCurrentIndex(newIndex);
   };

   const nextSlide = () => {
    const isLastSlide = currentIndex === slides.Lenght - 1;
    const newIndex = isLastSlide ? 0 : currentIndex + 1;
    setCurrentIndex(newIndex);
   };

   const goToSlide = (slideIndex) => {
    setCurrentIndex(slideIndex)
   }

    return (
        <div className='max-w-[1400px] h-[780px] w-full m-auto py-16 px-4 relative'>
     <div style={{backgroundImage: 'url(${slides[currentIndex].url})'}} className='w-full h-full rounded-2xl bg-center bg-cover duration-500'></div>      
       {/* Left Arrow */}
      <div className='hidden group-hover:block absolute top-[50%] -translate-x-0 translate-y-[-50%] left-5 text-2xl rounded-full p-2 bg-black/20 text-white curosr-pointer'>
        <BsChevronCompacLeft onClick={prevSlide} size={30} />
      </div> 
       {/* Right Arrow */}
       <div className='hidden group-hover:block absolute top-[50%] -translate-x-0 translate-y-[-50%] right-5 text-2xl rounded-full p-2 bg-black/20 text-white curosr-pointer'>
        <BsChevronCompacRight onClick={nextSlide} size={30} />
      </div>
      <div className= 'flex top-4 justify-center py-2'>
        {slides.map((slide, slideIndex) => (
            <div key={slideIndex}
                 onClick={() => goToSlide(slideIndex)} className='text-2xL cursor-pointer'>
                <RxDotFilled />
            </div>
        ))}

      </div>
        </div>
    )
}
