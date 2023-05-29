var arr =[1,2,3,4];
//Print a Spacific element from an array
console.log(arr[2]);
//print all element using loop
console.log('print all element using loop.')
for(let i=0; i<arr.length;i++){
    console.log(arr[i]);
}
//at() mrthod

let idx=arr.at(4);
console.log(idx);

console.log('Concat menthod');
let arr1=['First_name','Last_name'];
let arr2=['Farhad','Ahamed'];
let arr3=arr1.concat(arr2);
console.log(arr3);

