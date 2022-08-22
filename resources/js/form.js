

const nextBtn=document.getElementById("nextBtn")
const formItem = document.getElementsByClassName("formItem");
const prevBtn =document.getElementById("prevBtn")
console.log(prevBtn)

var currentTab = 0; 
const showForm =(n)=>{
    console.log(n)
    nextBtn.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log(++n)
       displayForm(n)
       hiddenForm(n)
       beck(n)})}
const displayForm=(index)=>{
    if(index< formItem.length -1 || index=== formItem.length -1){ 
        if(index>0){
            prevBtn.classList.add("flex")
            prevBtn.classList.remove("hidden") }
 formItem[index].classList.add("flex");
 formItem[index].classList.remove("hidden")}
 else{
data()
 }
// console.log(formItem.length)
};

const hiddenForm=(index)=>{
    if(index< formItem.length -1 || index=== formItem.length -1){
    const indexIdden = index-1;
    
    formItem[indexIdden].classList.remove('flex');
    formItem[indexIdden].classList.add("hidden")}
}
showForm(currentTab)





    const data =()=>{
     let inputData = document.querySelectorAll(".input");
     for (let index = 0; index < inputData.length; index++) {
        console.log(inputData[index].values)
        
     }
    }
   

