/*
Anggota Kelompok:
1. Muhammad Drajat Ramdhani (1930511053)
2. Deni Alpiana (1930511065)
3. Ikram Maulana (1930511075)
4. Ariski
*/
// # for private
// _ for protected

class Laptop {
  // Initial Variable
  os;
  storage;
  memory;
  #manufacture;
  #type;
  #color;
  #processor;
  #batteryPercentage;
  #willOn;
  _owner;
  
  // constructor variable
  constructor(os, storage, memory, manufacture, type, color, processor, batteryPercentage, owner) {
    this.os = os;
    this.storage = storage;
    this.memory = memory;
    this.#manufacture = manufacture;
    this.#type = type;
    this.#color = color;
    this.#processor = processor;
    this.#batteryPercentage = batteryPercentage;
    this.#willOn = false;
    this._owner = owner;
  }

  // Get owner for protected modifier
  get owner(){
    return this._owner;
  }
  
  // method turn on
  turnOn(){
    if(this.#batteryPercentage === 0 || this.#batteryPercentage <= 0){
      console.log('Battery low, please charge your laptop');
    } else{
      this.#willOn = true;
      console.log('Laptop will turned on');
    }
  }
  
  // method turn off
  turnOff(){
    this.#willOn = false;
    console.log('Laptop will turned off');
  }

  // method playing game fortnite
  playingGameFortnite() {
    // Ketika mau main fortnite jika laptop belum menyala maka nyalakan laptop terlebih dahulu
    if(this.#willOn === true){
      const storage = 50;
      const memory = 8;
      // panggil method #checkCompability
      this.#checkCompatibility();
      // Cek kompabilitas spek laptop keseluruhan
      if(this.storage >= storage && this.memory >= memory && this.#processor === true){
        console.log('This laptop is eligible to play fortnite');
        console.log('Opening fortnite game');
        console.log('Fornite is running');
        // Ketika bermain fortnite baterai berkurang
        const batteryNow = this.#batteryPercentage -= 20;
        // jika baterai kurang dari sama dengan 0 atau sama dengan 0 maka matikan laptop
        if(batteryNow <= 0 || batteryNow === 0){
          console.log('Battery is runs out, please charge your laptop');
          this.turnOff();
        } else {
          console.log(`Your battery now is ${batteryNow}%`);
        }
      } else {
        console.log('This Laptop is not eligible to play fortnite');
      }
    } else {
      console.log('Turn on laptop first');
    }
  }

  // Method charging
  charging() {
    // Jika baterai dalam kondisi 0 atau <= 0 maka charge laptop sampai 100%
    if(this.#batteryPercentage === 0 || this.#batteryPercentage <= 0){
        this.#batteryPercentage = 100;
        console.log(`Your battery is full ${this.#batteryPercentage}%`);
    }
  }
  
  // method info hardware
  HardwareInfo() {
    console.log(`OS: ${this.os}`);
    console.log(`Storage: ${this.storage} GB`);
    console.log(`Memory: ${this.memory} GB`);
    console.log(`Manufacture : ${this.#manufacture}`);
    console.log(`Type: ${this.#type}`);
    console.log(`Color: ${this.#color}`);
    console.log(`Processor: ${this.#processor}`);
    console.log(`Battery: ${this.#batteryPercentage}`);
    console.log(`Owner: ${this.owner}`);
  }
  
  // Method cek kompabilitas
  #checkCompatibility(){
    if (this.#processor === 'I5' || this.#processor === 'I6' || this.#processor === 'I7' || this.#processor === 'I8' || this.#processor === 'I9' || this.#processor === 'I10' || this.#processor === 'I11') {
        this.#processor = true;
    } else{
      this.#processor = false;
    }
  }
}

const LaptopDrajat = new Laptop('Windows', 120, 16, 'Acer', 'Predator', 'Black', 'I5', 30, 'Drajat');
// LaptopDrajat.turnOn();
// LaptopDrajat.playingGameFortnite();
// LaptopDrajat.turnOn();
// LaptopDrajat.charging();
// LaptopDrajat.turnOn();
LaptopDrajat.HardwareInfo();

const LaptopIkram = new Laptop('MacOS', 240, 16, 'Apple', 'Macbook Air M1', 'Silver', 'I7', 60, 'Ikram');
LaptopIkram.HardwareInfo();


const LaptopDeni = new Laptop('Linux', 360, 16, 'Acer', 'TUF 14', 'Silver', 'I7', 10, 'Deni');
LaptopDeni.HardwareInfo();