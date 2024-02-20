const form = document.querySelector('.signup form'),
continueBtn = form.querySelector('.button input'),
errorText = form.querySelector('.error-txt');

form.onsubmit = (e) => {
    e.preventDefault();//preventing form from submitting
}

continueBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest();//creating XML object
    xhr.open("POST", "../php/annonce.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE ){
            if (xhr.status === 200) {
                let data = xhr.response
                if(data == 'success') {
                    location.href = "./acceuil.php"
                }else{
                    errorText.textContent = data;
                    errorText.style.display = 'block';
                }
            }
        }
    }
    // we have to send the form data trough ajax to php
    let formData = new FormData(form); //creating new formData object
    xhr.send(formData); //sending the form Data to php
}

