let checkbox = document.getElementById("checkDefault")
let submit = document.getElementById("res-button")
submit.disabled = true
checkbox.addEventListener("click",()=>{
    if (checkbox.checked){
        submit.disabled = false
    }
    else{
        submit.disabled = true
    }
})