from payment import Payment

class Card(Payment):
    cardNumber = int
    cardDate = str
    cvv = int
    
    def __init__(self, amount, kind, cardNumber, cvv, cardDate) -> None:
        super().__init__(amount, kind)
        self.cardNumber = cardNumber
        self.cvv = cvv
        self.cardDate = cardDate