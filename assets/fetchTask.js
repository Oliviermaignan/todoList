// recuperation du boutton
if (document.querySelector('#addTaskBtn')) {
    let btnTask = document.querySelector('#addTaskBtn');

    btnTask.addEventListener('click', (e) => {
        e.preventDefault();
        appelFetchTask();
    });
}

function appelFetchTask(){
    let taskInput = document.querySelector('#taskInput').value;
    let descriptionInput = document.querySelector('#descriptionInput').value;
    let dateInput = document.querySelector('#dateInput').value;
    let prioritySelect = document.querySelector('#prioritySelect').value;
    let tasksList = document.querySelector('#tasksList');

    let dataObj = {
        "task": taskInput,
        "description": descriptionInput,
        "deadline": dateInput,
        "priority": prioritySelect
    };
    let JSONdata = JSON.stringify(dataObj);

    fetch('./../src/treatment/taskTreatment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSONdata
    })
    .then(response => response.json())
    .then(responseData => {
        if (responseData) {
            // Parse the HTML content from the response
            let htmlContent = responseData;
            // Create a temporary element to hold the parsed HTML content
            let tempElement = document.createElement('div');
            tempElement.innerHTML = htmlContent;

            tasksList.appendChild(tempElement.firstChild);

        } else {
            console.log('La requête a echouée');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la requête fetch:', error);
    });
}