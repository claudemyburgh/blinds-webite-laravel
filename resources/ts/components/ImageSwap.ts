
export class ImageSwap extends HTMLElement{
    private mainImage: HTMLElement;
    private smallImages: NodeListOf<HTMLElement>;
    private initialUrl: string;

    constructor() {
        super();
        this.mainImage = this.querySelector('[data-image]')
        this.smallImages = this.querySelectorAll('[data-image-url]')
        this.initialUrl = this.mainImage.getAttribute('src')
    }

    connectedCallback() {
        this.smallImages?.forEach((button) => button.addEventListener('click', this.swapImage.bind(this)))
    }

    disconnectCallback() {
        this.smallImages?.forEach((button) => button.removeEventListener('click', this.swapImage))
    }


    private swapImage(event) {
        (this.mainImage as HTMLElement).setAttribute('src', event.target.dataset.imageUrl)
    }







}

customElements.define('image-swap', ImageSwap)
