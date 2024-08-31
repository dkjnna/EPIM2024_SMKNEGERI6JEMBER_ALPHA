function openmodal(modalId, show){
    const modal = document.getElementById(modalId)
    console.log(modal)
    if(show == true){
        modal.style.display = 'flex'
    }else{
        modal.style.display = 'none'
    }
}

function qty(qty, show){
    const qty = document.getElementById(qty)
            
    console.log(qty)
    if(show == true){
        qty.style.display = 'flex'
    }else{
        qty.style.display = 'none'
    }
}

document.querySelectorAll('.modal-btn').forEach(button => {
    const modalId = button.getAttribute('data-modal') 

    button.addEventListener('click', () =>{
        openmodal(modalId, true)
    })
})

document.querySelectorAll('.modal-close').forEach(button => {
    const modalId = button.getAttribute('data-modal') 
    button.addEventListener('click', () =>{
        openmodal(modalId, false)
    })
})