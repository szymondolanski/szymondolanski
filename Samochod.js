class Samochod{
    constructor(marka, model, cena, rocznik, spalanie){
        this.marka = marka;
        this.model = model;
        this.cena = cena;
        this.rocznik = rocznik;
        this.spalanie = spalanie;
    }
    wiek(){
        const data = new Date();
        const rok = data.getFullYear();
        return 'wiek samochodu wynosi: ' + (rok - this.rocznik) + 'lat';
    }
    koszt(){
       
    }
}