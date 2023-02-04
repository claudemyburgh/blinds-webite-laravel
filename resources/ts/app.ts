import './bootstrap';
import "vanilla-headless"
import "./components/ContactForm"
import "./gsap"
import "./components/ImageSwap"
import "./components/ToggleShow"
import "./components/Slider-box"
import "./flare.js"
import Pace from 'pace-js'

Pace.on('done', () => {
    alert('done')
})

const messages = document.querySelectorAll('.session-state')

messages.forEach( (mess) => {
    setTimeout(() => {
        (mess as HTMLElement).style.display = 'none'
    }, 3000)
})

