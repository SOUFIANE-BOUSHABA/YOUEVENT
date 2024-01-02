
class ticketSelect {

    constructor() {
        this.quantity = document.getElementById('ticket_quant');
        this.quantityPlaceHolder = document.getElementById('ticket_price');
        this.selectTicketValue();
    }

    selectTicketValue() {
        this.selectOps = document.getElementById('ticket_select');
        this.quantityPrice = 0;
        this.getTicketValue();
    }

    getTicketValue() {
        this.selectOps.addEventListener('change', () => {
            const selectedOption = this.selectOps.options[this.selectOps.selectedIndex];
            this.quantityPrice = parseFloat(selectedOption.getAttribute('data-price')) || 0;
            this.displayTicketPrices();
        });
    }

    displayTicketPrices() {
        this.quantityPlaceHolder.innerText = this.quantityPrice + '$';
    }
}

const tickets = new ticketSelect();