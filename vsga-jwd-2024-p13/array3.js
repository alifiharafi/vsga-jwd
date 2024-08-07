/**
 * Array pada JavaScript
 */ 

// Mendeklarasikan array kosong
let fruits = [];

// Mendeklarasikan dan menginisialisasi array dengan elemen
let colors = ['red', 'green', 'blue'];

// Mendeklarasikan array dengan konstruktur array
let numbers = new Array(1, 2, 3, 4, 5);

// Mendeklarasikan object, dalam hal ini pada JavaScript tidak ada array asosiatif
let person = {name: 'John', age: 30, city: 'New York'};

// Tetap mendeklarasikan object, walaupun menggunakan kurung siku khas "array"
person['gender'] = 'Male';

// Menampilkan nilai object menggunakan cara "attribute" vs "key"
console.log('Attribute Call: ' + person.gender);
console.log('Key Call: ' + person['gender']);

// Dalam hal ini menggunakan console.dir() untuk bisa melihat indeks dan nilai pada array.
console.dir(person);

// Array dapat berisi tipe data yang berbeda
let mixedArray = ['apple', 3, true, { name: 'John' }];

// Dalam hal ini menggunakan console.dir() untuk bisa melihat indeks dan nilai pada array.
console.dir(mixedArray);

// Dalam hal ini menggunakan 'typeof' di dalam looping untuk bisa melihat nilai dan tipe data pada array.
// Terdapat pemanggilan khusus untuk memanggil object (padanan dari array asosiatif), sehingga perlu kondisional.
for(let i = 0; i < mixedArray.length; i++) {
    if(typeof mixedArray[i] !== 'object') {
        console.log(typeof mixedArray[i] + ': ' + mixedArray[i]);
    } else {
        console.log(typeof mixedArray[i] + ': ' + mixedArray[i].name);
    }
}

// Mengakses elemen array melalui indeks array
console.log(colors[0]); // Output: 'red'