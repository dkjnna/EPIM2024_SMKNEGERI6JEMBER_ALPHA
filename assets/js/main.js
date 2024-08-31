function openmodal(modalId, show){
    const modal = document.getElementById(modalId)
    
    if(show == true){
        modal.style.display = 'flex'
        console.log(modal)
    }else{
        modal.style.display = 'none'
        console.log('asjahaaa')
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