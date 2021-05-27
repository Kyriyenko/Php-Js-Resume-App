let formItemBox=document.querySelector('.form-item-box');

let networkSection=document.querySelector('.networks-input');
console.log(networkSection.value);




networkSection.addEventListener('change',function (e){
    e.preventDefault();
    console.log(networkSection.value);
    let value=networkSection.value;

    let inputDiv = document.createElement('div');
    inputDiv.classList.add('item-box-div');

    inputDiv.style.display='flex';
    inputDiv.style.justifyContent='space-between';
    inputDiv.style.marginTop='20px';
    inputDiv.style.alignItems='center';

    if(value==='other') {


        let newContactFile = document.createElement('input');
        newContactFile.innerText = ' '
        newContactFile.classList.add('file-input-name');
        inputDiv.appendChild(newContactFile);

        let newContactName = document.createElement('input');
        newContactName.innerText = ' '
        newContactName.classList.add('input-network');
        inputDiv.appendChild(newContactName);

        let cancelButton = document.createElement('span');
        cancelButton.innerText = 'delete'
        cancelButton.classList.add('delete-btn');
        inputDiv.appendChild(cancelButton);

        formItemBox.appendChild(inputDiv);

        newContactFile.value = "";
        newContactName.value = "";
    }
    else {
        let newContactInput = document.createElement('div');
        newContactInput.innerHTML= value;
        newContactInput.classList.add('contact-item');
        inputDiv.appendChild(newContactInput);

        let newContactName = document.createElement('input');
        newContactName.innerText = ' '
        newContactName.classList.add('input-network');
        inputDiv.appendChild(newContactName);

        let cancelButton = document.createElement('span');
        cancelButton.innerText = 'delete'
        cancelButton.classList.add('delete-btn');
        inputDiv.appendChild(cancelButton);

        formItemBox.appendChild(inputDiv);

        newContactInput.value = "";
        newContactName.value = "";

    }



});


let itemBox=document.querySelector('.form-item-box');

itemBox.addEventListener('click',function (e){
    let item = e.target;
    if (item.classList[0] === 'delete-btn') {
        let list = item.parentElement;

        list.remove();
    }

});
