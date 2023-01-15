import './bootstrap';
import "vanilla-headless"
import "./components/ContactForm"



const messages = document.querySelectorAll('.session-state')

messages.forEach( (mess) => {
    setTimeout(() => {
        (mess as HTMLElement).style.display = 'none'
    }, 3000)
})

