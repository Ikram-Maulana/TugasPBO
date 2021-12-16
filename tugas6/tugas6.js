class ValidationError extends Error {
    constructor(message) {
        super(message);
        this.name = 'ValidationError';
    }
}

const validasiInput = (a,b,c) => {
    if(typeof(a) !== 'number') {
        throw new ValidationError('Inputan pertama harus berupa number');
    }
    if(typeof(b) !== 'number') {
        throw new ValidationError('Inputan kedua harus berupa number');
    }
    if(typeof(c) !== 'number') {
        throw new ValidationError('Inputan ketiga harus berupa number');
    }
}
 
const cekSegitiga = (a, b, c) => {
    try{
      validasiInput(a, b, c);
      if (a === b && b === c) {
        return 'Segitiga sama sisi';
      }
      if (a === b || a === c || b === c) {
        return 'Segitiga sama kaki';
      }
      return 'Segitiga sembarang';
    } catch (error) {
      if (error instanceof ValidationError) {
          return error.message;
      }
    }
  };

console.log(cekSegitiga(3, 2, 2));
console.log(cekSegitiga(3,false,2));
