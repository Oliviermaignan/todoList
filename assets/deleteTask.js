//recup des bouttons de suppression de tache
const deleteButtons = document.querySelectorAll('.deleteBtn');
console.log(deleteButtons);
const tasksList = document.querySelector('#tasksList');

//gestion du bouton de suppression de tache
deleteButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const taskId = e.currentTarget.id;
        console.log(taskId);
        const dataObj = {
            'taskId': taskId
        };

        const JSONdata = JSON.stringify(dataObj);

        fetch('./../src/treatment/deleteTask.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSONdata
        })
        .then(response => response.json())
        .then(responseData => { 
            if (responseData) {
            let htmlContent = responseData;

            let tempElement = document.createElement('div');

            tempElement.innerHTML = htmlContent;
            console.log(tempElement.innerHTML);
            tasksList.innerHTML = '';
            console.log(tasksList);
            tasksList.appendChild(tempElement.firstChild);
            } else {
                console.log('La requête de suppression a echouée');
            }
        })
        .catch(error => {
            console.error('Erreur lors de la requête de suppression:', error);
        });

    })
})