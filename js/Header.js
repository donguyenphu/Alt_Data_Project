class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = 
        /* html */
        `
        <header>
            <a href="index.html">Alt data project</a>
            <nav>
            <a href="index.html"><strong>Homepage</strong></a>
            <a href="detail.html"><strong>Details</strong></a>
            <a href="function.html"><strong>Functions</strong></a>
            <a href="benefit.html"><strong>Benefits</strong></a>
            <a href="contact.html"><strong>Contact</strong></a>
            </nav>
        </header>
        `;
    }
}

customElements.define('x-header', Header);