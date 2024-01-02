
class ticketSelect {

    constructor() {
        this.ticketPrice = document.getElementById('ticket_price');
        this.ChangeTicketPrice();
        this.selectTicketValue();
    }
    selectTicketValue() {
        this.selectOps = document.getElementById('ticket_select');
        this.qntPrice = 0;
        this.getTicketValueAndQuantity();
    }
    getTicketValueAndQuantity() {
        this.selectOps.addEventListener('change', () => {
            const selectedOption = this.selectOps.options[this.selectOps.selectedIndex];
            this.qntPrice = parseFloat(selectedOption.getAttribute('data-price')) || 0;
            this.qnt = parseFloat(selectedOption.getAttribute('data-quantity')) || 0;
            this.fullPrice = this.qntPrice;
            this.displayTicketPrices();
            this.qntPlaceHolder.value = 1;
        });
    }
    displayTicketPrices() {
        this.ticketPrice.innerText = 'Price: ' + this.fullPrice + '$';
    }
    ChangeTicketPrice() {
        this.qntPlaceHolder = document.getElementById('ticket_quant');
        this.qntPlus = document.getElementById('plus');
        this.qntMinus = document.getElementById('minus');
        this.upQuantity();
        this.lowerQuantity();
    }
    upQuantity() {
        this.qntPlus.addEventListener('click', () => {
            if (this.qntPlaceHolder.value < this.qnt) {
                this.qntPlaceHolder.value++;
                this.qntPlaceHolder.setAttribute('value', this.qntPlaceHolder.value);
                this.fullPrice += this.qntPrice;
                this.changePrice();
            }
        });
    }
    lowerQuantity() {
        this.qntMinus.addEventListener('click', () => {
            if (this.qntPlaceHolder.value > 1) {
                this.qntPlaceHolder.value--;
                this.qntPlaceHolder.setAttribute('value', this.qntPlaceHolder.value);
                this.fullPrice -= this.qntPrice;
                this.changePrice();
            }
        });
    }
    changePrice() {
        this.displayTicketPrices();
    }
    getQuantity() {
        return this.qntPlaceHolder.value;
    }
}

const tickets = new ticketSelect();