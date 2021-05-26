let formItemBox=document.querySelector('.form-item-box');

let networkSection=document.querySelector('.networks-input');
console.log(networkSection.value);

networkSection.addEventListener('change',function (e){
    e.preventDefault();
    console.log(networkSection.value);
    let value=networkSection.value;

    const inputDiv = document.createElement('item-box-div');
    inputDiv.classList.add("todo");
    inputDiv.style.display='flex';
    inputDiv.style.justifyContent='space-between';
    inputDiv.style.marginTop='20px';
    inputDiv.style.alignItems='center';

    if(value==='other') {

        const newContactFile = document.createElement('input');
        newContactFile.innerText = ' '
        newContactFile.classList.add('file-input-name');
        inputDiv.appendChild(newContactFile);

        const newContactName = document.createElement('input');
        newContactName.innerText = ' '
        newContactName.classList.add('input-name');
        inputDiv.appendChild(newContactName);

        const cancelButton = document.createElement('span');
        cancelButton.innerText = 'delete'
        cancelButton.classList.add('delete-btn');
        inputDiv.appendChild(cancelButton);

        formItemBox.appendChild(inputDiv);

        newContactFile.value = "";
        newContactName.value = "";
    }
    else {
      const newContactInput = document.createElement('p');
        newContactInput.innerHTML= value;
        newContactInput.classList.add('contact-item');
        inputDiv.appendChild(newContactInput);

        const newContactName = document.createElement('input');
        newContactName.innerText = ' '
        newContactName.classList.add('input-name');
        inputDiv.appendChild(newContactName);

        const cancelButton = document.createElement('span');
        cancelButton.innerText = 'delete'
        cancelButton.classList.add('delete-btn');
        inputDiv.appendChild(cancelButton);

        formItemBox.appendChild(inputDiv);

        newContactInput.value = "";
        newContactName.value = "";

    }



});
