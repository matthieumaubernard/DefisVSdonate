let burger = document.getElementById('burger');
let btn_burger = document.getElementById('btn_burger');

btn_burger.addEventListener('click',myFunction);

function myFunction(){
    burger.classList.toggle('hidden');
    console.log("you recive your burger");
}